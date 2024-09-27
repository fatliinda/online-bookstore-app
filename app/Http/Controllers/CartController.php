<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request,$id){

       $book = Book::findOrFail($id);

        if(!session()->has('cart')){
            session()->put('cart',[]);
        }

        $cart = session('cart');
        $quantity = $request->input('quantity', 1);

    if (isset($cart[$id])) {
        $cart[$id]['quantity'] += $quantity; 
    } else {
        $cart[$id] = [
            'title' => $book->title,
            'price' => $book->price,
            'quantity' => $quantity
        ];
    }

    session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Book added to cart!');
    }
    
    public function show(){
        $cart = session()->get('cart');

        return view('cart',compact('cart'));
    }

    public function updateCart(Request $request, $id)
{
    $cart = session()->get('cart', []);

    if(isset($cart[$id])) {
        $cart[$id]['quantity'] = max(1, $request->quantity);
        session()->put('cart', $cart);
    }

    return redirect()->route('cart-show')->with('success', 'Cart updated successfully!');
}

}
