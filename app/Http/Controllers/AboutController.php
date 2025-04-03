<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Fact;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $testimonials = Contact::take(4)->get();
        $categories = Category::take(9)->latest()->get();
        $bookFacts = Fact::take(3)->get();
        return view('about', [
            'categories' => $categories,
            'testimonials' => $testimonials,
            'bookFacts' => $bookFacts
        ]);
    }
}
