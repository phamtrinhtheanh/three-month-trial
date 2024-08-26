<?php

use Illuminate\Support\Facades\Route;
use Modules\Cart\Controllers\CartController;
use Modules\Cart\Controllers\CheckoutController;

Route::middleware(['auth'])->group(function () {
    Route::get('cart', [CartController::class, 'getCart'])->name('cart');
    Route::post('delete', [CartController::class, 'removeFromCart'])->name('delete');
    Route::post('add', [CartController::class, 'addToCart'])->name('add');

    Route::get('/checkout', [CheckoutController::class, 'Index'])->name('checkout.index');
    Route::post('/checkout/process', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
    Route::post('/get-coupon-id',[CheckoutController::class, 'getCouponIdByCode'])->name('checkout.order');
});
