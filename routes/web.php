<?php

use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageControllerController;

Route::get('/', [MainPageController::class,'index']);
