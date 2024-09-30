<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function store(Request $request)
{
    
    $cart = session('cart');

    
    if (!$cart) {
        return redirect()->back()->with('error', 'Your cart is empty!');
    }

    
    $totalPrice = array_sum(array_map(function ($item) {
        return $item['price'] * $item['quantity'];
    }, $cart));

    
    $order = Order::create([
        'user_id' => auth()->check() ? auth()->id() : null,  // nullable user_id for now
        'name' => $request->name,
        'email' => $request->email,
        'state' => $request->state,
        'city' => $request->city,
        'phone' => $request->phone,
        'total_price' => $totalPrice,
    ]);

    
    foreach ($cart as $item) {
        OrderItem::create([
            'order_id' => $order->id,
            'product_name' => $item['title'],
            'quantity' => $item['quantity'],
            'price' => $item['price'],
        ]);
    }

    
    session()->forget('cart');

    
    return redirect()->route('order-confirmation')->with('success', 'Order placed successfully!');
}

}
