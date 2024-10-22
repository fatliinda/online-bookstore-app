<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', [MainPageController::class,'index'])->name('index');
Route::post('/cart/add/{id}', [CartController::class, 'store'])->name('cart-add');
Route::get('/book/{id}',[BookController::class,'show'])->name('book-show');
Route::get('/cart',[CartController::class,'show'])->name('cart-show');
Route::post('/cart-update/{id}', [CartController::class, 'updateCart'])->name('cart-update');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout');
Route::get('/view/checkout',[CheckoutController::class,'show'])->name('view-checkout');

    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin-dashboard')->middleware(AdminMiddleware::class);
   


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
