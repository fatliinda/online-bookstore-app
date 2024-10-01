<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;

class CheckoutController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'address'=>'required|string|max:255',
        'phone' => 'required|string|max:20',
    ]);

    
    return app(OrderController::class)->createOrder($validatedData);
}
public function show(){
    return view('checkout');
}
}
