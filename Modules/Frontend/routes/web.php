<?php

use Illuminate\Support\Facades\Route;
use Modules\Frontend\Http\Controllers\FrontendController;


Route::get('/', [FrontendController::class, 'index'])->name('Home');
Route::get('/about', [FrontendController::class, 'about'])->name('About');
// Route::get('/contact', [FrontendController::class, 'contact'])->name('Contact');
// Route::get('/products', [FrontendController::class, 'products'])->name('Products');
// Route::get('/products/{slug}', [FrontendController::class, 'productDetails'])->name('ProductDetails');
// Route::get('/cart', [FrontendController::class, 'cart'])->name('Cart');
// Route::get('/checkout', [FrontendController::class, 'checkout'])->name('Checkout');
// Route::get('/category/{slug}', [FrontendController::class, 'categoryProducts'])->name('CategoryProducts');
// Route::get('/search', [FrontendController::class, 'search'])->name('Search');
// Route::post('/subscribe', [FrontendController::class, 'subscribe'])->name('Subscribe');
// Route::post('/contact-submit', [FrontendController::class, 'contactSubmit'])->name('ContactSubmit');
// Route::post('/add-to-cart', [FrontendController::class, 'addToCart'])->name('AddToCart');
// Route::post('/update-cart', [FrontendController::class, 'updateCart'])->name('UpdateCart');
// Route::post('/remove-from-cart', [FrontendController::class, 'removeFromCart'])->name('RemoveFromCart');
// Route::post('/place-order', [FrontendController::class, 'placeOrder'])->name('PlaceOrder');
// Route::get('/thank-you', [FrontendController::class, 'thankYou'])->name('ThankYou');
// Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('PrivacyPolicy');
// Route::get('/terms-of-service', [FrontendController::class, 'termsOfService'])->name('TermsOfService');
// Route::get('/faq', [FrontendController::class, 'faq'])->name('FAQ');
