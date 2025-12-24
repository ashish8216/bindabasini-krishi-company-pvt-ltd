<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    ProductController,
    CartController,
    OrderController,
    CategoryController,
    ServiceController
};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'storeContact']);

// Product Routes
Route::get('/shop', [ProductController::class, 'index'])->name('shop.index');
Route::get('/shop/category/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/shop/{product}', [ProductController::class, 'show'])->name('product.show');
Route::post('/shop/{product}/review', [ProductController::class, 'submitReview'])->name('product.review')->middleware('auth');

// Cart Routes
Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::put('/update/{cart}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/remove/{cart}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
});

// Order Routes
Route::middleware(['auth'])->prefix('orders')->group(function () {
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('orders.place');
    Route::get('/confirmation/{order}', [OrderController::class, 'confirmation'])->name('orders.confirmation');
    Route::get('/history', [OrderController::class, 'history'])->name('orders.history');
    Route::get('/{order}', [OrderController::class, 'show'])->name('orders.show');
});

// Service Routes
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::post('/services/request', [ServiceController::class, 'requestService'])->name('services.request');
