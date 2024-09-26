<?php

use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageControllerController;
use App\Http\Controllers\CartController;

Route::get('/', [MainPageController::class,'index']);
Route::post('/cart/add/{id}', [CartController::class, 'store'])->name('cart-add');