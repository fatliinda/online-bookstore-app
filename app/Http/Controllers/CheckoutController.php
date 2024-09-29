<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'state' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
    ]);

    
    
    return redirect()->route('cart-show')->with('success', 'Checkout successful!');
}
public function show(){
    return view('checkout');
}
}
