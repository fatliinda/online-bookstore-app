<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class MainPageController extends Controller
{   
    public function index(){
        $books = Book::with('author')->get();
        $newBooks = Book::with('author')->orderBy('created_at', 'desc')->take(4)->get();
        $authors = Author::all();
        return view('welcome', compact('books','newBooks','authors'));
}
}
