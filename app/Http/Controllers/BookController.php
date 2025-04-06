<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('books.index');
    }
    public function show($id){
        $book = Book::findOrFail($id);

        return view('books.show', compact('book'));
    }
}
