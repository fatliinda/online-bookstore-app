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
        $cart[$id]=[
            'title'=> $book->title,
            'price'=> $book->price,
            'quantity'=> 1
        ];
        session()->put('cart',$cart);

        return redirect()->back()->with('success', 'Book added to cart!');
    }
}
