<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    // Show checkout page
    public function checkout()
    {
        $cartItems = Cart::with('product')
                        ->where(function($query) {
                            if (auth()->check()) {
                                $query->where('user_id', auth()->id());
                            } else {
                                $query->where('session_id', Session::getId());
                            }
                        })
                        ->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $subtotal = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        $shipping = $this->calculateShipping($subtotal);
        $total = $subtotal + $shipping;

        return view('orders.checkout', compact('cartItems', 'subtotal', 'shipping', 'total'));
    }

    // Place order
    public function placeOrder(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'shipping_address' => 'required|string',
            'city' => 'required|string|max:100',
            'province' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
            'shipping_method' => 'required|string',
            'payment_method' => 'required|in:cash_on_delivery,bank_transfer,esewa,khalti',
            'notes' => 'nullable|string'
        ]);

        DB::beginTransaction();

        try {
            // Get cart items
            $cartItems = Cart::with('product')
                            ->where(function($query) {
                                if (auth()->check()) {
                                    $query->where('user_id', auth()->id());
                                } else {
                                    $query->where('session_id', Session::getId());
                                }
                            })
                            ->get();

            if ($cartItems->isEmpty()) {
                return back()->with('error', 'Your cart is empty.');
            }

            // Calculate totals
            $subtotal = $cartItems->sum(function ($item) {
                return $item->price * $item->quantity;
            });

            $shipping = $this->calculateShipping($subtotal);
            $total = $subtotal + $shipping;

            // Create order
            $order = Order::create([
                'user_id' => auth()->id(),
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'customer_phone' => $request->customer_phone,
                'shipping_address' => $request->shipping_address,
                'billing_address' => $request->billing_address ?? $request->shipping_address,
                'city' => $request->city,
                'province' => $request->province,
                'postal_code' => $request->postal_code,
                'shipping_method' => $request->shipping_method,
                'shipping_cost' => $shipping,
                'payment_method' => $request->payment_method,
                'subtotal' => $subtotal,
                'total_amount' => $total,
                'notes' => $request->notes
            ]);

            // Create order items and update product quantities
            foreach ($cartItems as $cartItem) {
                $product = $cartItem->product;

                // Check stock
                if ($product->quantity < $cartItem->quantity) {
                    throw new \Exception("Insufficient stock for {$product->name}");
                }

                // Create order item
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'product_name' => $product->name,
                    'price' => $cartItem->price,
                    'quantity' => $cartItem->quantity,
                    'total' => $cartItem->price * $cartItem->quantity
                ]);

                // Update product quantity
                $product->decrement('quantity', $cartItem->quantity);
            }

            // Clear cart
            Cart::where(function($query) {
                    if (auth()->check()) {
                        $query->where('user_id', auth()->id());
                    } else {
                        $query->where('session_id', Session::getId());
                    }
                })
                ->delete();

            DB::commit();

            // Redirect to order confirmation page
            return redirect()->route('orders.confirmation', $order->order_number)
                           ->with('success', 'Order placed successfully!');

        } catch (\Exception $e) {
            DB::rollBack();

            return back()->with('error', 'Failed to place order: ' . $e->getMessage());
        }
    }

    // Order confirmation page
    public function confirmation($orderNumber)
    {
        $order = Order::with('items.product')
                     ->where('order_number', $orderNumber)
                     ->firstOrFail();

        return view('orders.confirmation', compact('order'));
    }

    // View order details
    public function show($orderNumber)
    {
        $order = Order::with('items.product')
                     ->where('order_number', $orderNumber)
                     ->firstOrFail();

        // Check if user is authorized to view this order
        if (auth()->id() !== $order->user_id && !auth()->user()->isAdmin()) {
            abort(403);
        }

        return view('orders.show', compact('order'));
    }

    // User's order history
    public function history()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $orders = Order::where('user_id', auth()->id())
                      ->orderBy('created_at', 'desc')
                      ->paginate(10);

        return view('orders.history', compact('orders'));
    }

    private function calculateShipping($subtotal)
    {
        // Free shipping for orders above 2000
        if ($subtotal >= 2000) {
            return 0;
        }

        // Standard shipping charge
        return 50;
    }
}
