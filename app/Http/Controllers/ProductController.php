<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // Show product listing with filters
    public function index(Request $request)
    {
        $query = Product::query()->with(['category', 'brand', 'images']);

        // Apply filters
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->filled('brand')) {
            $query->where('brand_id', $request->brand);
        }

        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('short_description', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('sort')) {
            switch ($request->sort) {
                case 'price_low':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_high':
                    $query->orderBy('price', 'desc');
                    break;
                case 'name_asc':
                    $query->orderBy('name', 'asc');
                    break;
                case 'name_desc':
                    $query->orderBy('name', 'desc');
                    break;
                case 'newest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'featured':
                    $query->where('is_featured', true)->orderBy('created_at', 'desc');
                    break;
                default:
                    $query->orderBy('created_at', 'desc');
            }
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $products = $query->paginate(12);
        $categories = Category::active()->get();
        $brands = Brand::active()->get();

        return view('products.index', compact('products', 'categories', 'brands'));
    }

    // Show single product
    public function show($slug)
    {
        $product = Product::with(['category', 'brand', 'images', 'reviews.user'])
            ->where('slug', $slug)
            ->firstOrFail();

        // Track view
        $this->trackProductView($product);

        // Related products
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->active()
            ->inStock()
            ->limit(4)
            ->get();

        return view('products.show', compact('product', 'relatedProducts'));
    }

    // Submit product review
    public function submitReview(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string|min:10',
            'title' => 'nullable|string|max:255'
        ]);

        $review = ProductReview::create([
            'product_id' => $id,
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'title' => $request->title,
            'comment' => $request->comment,
            'is_verified_purchase' => $this->checkVerifiedPurchase($id)
        ]);

        // Update product rating
        $product = Product::find($id);
        $product->updateRating();

        return back()->with('success', 'Thank you for your review! It will be visible after approval.');
    }

    private function trackProductView($product)
    {
        // Implement product view tracking logic
        // This could be stored in Redis or database
    }

    private function checkVerifiedPurchase($productId)
    {
        if (!auth()->check()) {
            return false;
        }

        return DB::table('order_items')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->where('orders.user_id', auth()->id())
            ->where('order_items.product_id', $productId)
            ->where('orders.order_status', 'delivered')
            ->exists();
    }
}
