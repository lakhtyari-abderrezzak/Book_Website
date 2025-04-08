<?php

use App\Models\Book;


test('getImgPathAttribute returns the URL unchanged if already external', function () {
    $url = 'https://example.com/book.jpg';

    $book = new Book([
        'img_path' => $url,
    ]);

    expect($book->img_path)->toBe($url);
});

