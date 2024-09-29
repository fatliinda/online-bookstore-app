<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageControllerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [MainPageController::class,'index']);
Route::post('/cart/add/{id}', [CartController::class, 'store'])->name('cart-add');
Route::get('/book/{id}',[BookController::class,'show'])->name('book-show');
Route::get('/cart',[CartController::class,'show'])->name('cart-show');
Route::post('/cart-update/{id}', [CartController::class, 'updateCart'])->name('cart-update');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout');
Route::get('/view/checkout',[CheckoutController::class,'show'])->name('view-checkout');

