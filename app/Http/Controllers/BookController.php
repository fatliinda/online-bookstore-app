<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('author')->get();
        $newBooks = Book::orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome', compact('books','newBooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        return view('book-page', compact('book'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
    public function adminIndex()
    {
        $books = Book::all(); 
        return view('admin.books.index', compact('books'));
    }
    public function adminCreate()
    {   $authors= Author::get();
        return view('admin.books.create',compact('authors'));
    }
    public function adminEdit($id)
    {
        
        $book = Book::with('author')->findOrFail($id);
        $authors= Author::get();
        return view('admin.books.edit', compact('book','authors'));
    }
    public function adminDestroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('admin.books.index')->with('success', 'Book deleted successfully.');
    }
}
