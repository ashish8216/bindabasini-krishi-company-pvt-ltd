<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // View cart
    public function index()
    {
        $cartItems = $this->getCartItems();
        $subtotal = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        $shipping = $this->calculateShipping($subtotal);
        $total = $subtotal + $shipping;

        return view('cart.index', compact('cartItems', 'subtotal', 'shipping', 'total'));
    }

    // Add item to cart
    public function add(Request $request, $productId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::findOrFail($productId);

        if ($product->quantity < $request->quantity) {
            return back()->with('error', 'Insufficient stock available.');
        }

        $cartItem = Cart::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'session_id' => Session::getId(),
                'product_id' => $productId
            ],
            [
                'quantity' => DB::raw('quantity + ' . $request->quantity),
                'price' => $product->price
            ]
        );

        return back()->with('success', 'Product added to cart successfully.');
    }

    // Update cart item quantity
    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cartItem = Cart::findOrFail($id);
        $product = $cartItem->product;

        if ($product->quantity < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Insufficient stock available.'
            ]);
        }

        $cartItem->update(['quantity' => $request->quantity]);

        return response()->json([
            'success' => true,
            'message' => 'Cart updated successfully.'
        ]);
    }

    // Remove item from cart
    public function remove($id)
    {
        Cart::findOrFail($id)->delete();

        return back()->with('success', 'Item removed from cart.');
    }

    // Clear cart
    public function clear()
    {
        Cart::where('user_id', auth()->id())
            ->orWhere('session_id', Session::getId())
            ->delete();

        return back()->with('success', 'Cart cleared successfully.');
    }

    private function getCartItems()
    {
        if (auth()->check()) {
            return Cart::with('product')
                ->where('user_id', auth()->id())
                ->get();
        }

        return Cart::with('product')
            ->where('session_id', Session::getId())
            ->get();
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
