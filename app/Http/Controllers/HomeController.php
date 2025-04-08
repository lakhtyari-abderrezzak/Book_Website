<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {   
        $featuredBooks = Cache::remember('featured_books', now()->addDay(), function () {
            return Book::where('featured', 1)
                ->orderBy('edition', 'asc')
                ->take(3)
                ->get();
        });
        $latestBooks = Cache::remember('latest_books', now()->addDay(), function () {
            return Book::orderBy('created_at', 'desc')
                ->take(6)
                ->get();
        });
        return view('welcome', compact('featuredBooks', 'latestBooks'));
    }
}
