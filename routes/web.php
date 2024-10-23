<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', [MainPageController::class,'index'])->name('index');
Route::post('/cart/add/{id}', [CartController::class, 'store'])->name('cart-add');
Route::get('/book/{id}',[BookController::class,'show'])->name('book-show');
Route::get('/cart',[CartController::class,'show'])->name('cart-show');
Route::post('/cart-update/{id}', [CartController::class, 'updateCart'])->name('cart-update');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout');
Route::get('/view/checkout',[CheckoutController::class,'show'])->name('view-checkout');

    Route::middleware(AdminMiddleware::class)->group(function(){
        //books
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
        Route::get('admin/books/create', [BookController::class, 'adminCreate'])->name('admin-books-create');
        Route::post('admin/books', [BookController::class, 'adminStore'])->name('admin-books-store');
        Route::get('admin/books', [BookController::class, 'adminIndex'])->name('admin-books-index');
        Route::get('admin/books/{id}/edit', [BookController::class, 'adminEdit'])->name('admin-books-edit');
        Route::put('admin/books/{id}', [BookController::class, 'adminUpdate'])->name('admin-books-update');
        Route::delete('admin/books/{id}', [BookController::class, 'adminDestroy'])->name('admin-books-destroy');
        //orders
        Route::get('admin/orders', [OrderController::class, 'adminIndex'])->name('admin-orders-index');
        Route::put('/admin/orders/{id}/status', [OrderController::class, 'updateStatus'])->name('admin-orders-updateStatus');
        //users
        Route::get('users', [AdminController::class, 'userIndex'])->name('admin-users-index');
        Route::get('users/{id}/edit', [AdminController::class, 'userEdit'])->name('admin-users-edit');
        Route::put('users/{id}', [AdminController::class, 'userUpdate'])->name('admin-users-update');
        Route::delete('users/{id}', [AdminController::class, 'userDestroy'])->name('admin-users-destroy');
        Route::get('users/create', [AdminController::class, 'userCreate'])->name('admin-users-create');
    Route::post('users', [AdminController::class, 'userStore'])->name('admin-users-store');
   
    });
   


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
