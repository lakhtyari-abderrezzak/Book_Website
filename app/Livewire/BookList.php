<?php

namespace App\Livewire;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BookList extends Component
{

    public $search = '';
    public function delete(Book $book)
    {
        $book->delete();
    }
    public function render()
    {
        $books = Book::where('title', 'like', "%{$this->search}%")
                        ->orWhere('author', 'like', "%{$this->search}%")
                        ->orderBy('title')->paginate(16);
        return view('livewire.book-list', ['books' => $books]);
    }
}
