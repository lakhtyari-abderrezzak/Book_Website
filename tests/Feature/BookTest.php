<?php

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

describe('Book pages', function () {

    
    test('shows a book list page', function () {
        $this->get('/books')
            ->assertStatus(200);
    });
    test('shows a book detail page', function () {
        $book = Book::factory()->create();

        $this->get('/books/' . $book->id)
            ->assertStatus(200)
            ->assertSee($book->title);
    });

    test('shows a book detail page with a non-existing book', function () {
        $this->get('/books/999')
            ->assertStatus(404);
    });


 
    test('does not show pagination if fewer than 10 books', function () {
        Book::factory()->count(5)->create();

        $response = $this->get('/books');

        $response->assertDontSee('Next &raquo;');
        $response->assertDontSee(__('pagination.previous'));
    });
 
    
});
