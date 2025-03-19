<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {   
        $featuredBooks = Book::where('featured', 1)->orderBy('edition', 'asc')->take(3)->get() ;
        $latestBooks = Book::latest()->take(6)->get();
        return view('welcome',
    [
        'featuredBooks' => $featuredBooks,
        'latestBooks' => $latestBooks
    ]);
    }
}
