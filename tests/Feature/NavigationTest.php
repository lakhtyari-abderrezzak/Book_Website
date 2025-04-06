<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

describe('Static pages', function () {

    test('homepage displays featured and latest posts', function () {
        $this->get('/')
            ->assertStatus(200)
            ->assertSeeText('Featured Books')
            ->assertSeeText('Latest Books');
    });

    test('books page displays book list', function () {
        $this->get('/books')
            ->assertStatus(200)
            ->assertSeeText('Book List');
    });

    test('about page displays about us content', function () {
        $this->get('/about')
            ->assertStatus(200);
    });

    test('contact page displays contact content', function () {
        $this->get('/contact')
            ->assertStatus(200);
    });

});

describe('Error handling', function () {
    test('returns 404 for non-existent pages', function () {
        $this->get('/non-existent-page')
            ->assertStatus(404);
    });
});
describe('Navigation', function () {
    test('navigation links are present on all pages', function () {
        $this->get('/')
            ->assertSeeText('Home')
            ->assertSeeText('Books')
            ->assertSeeText('About')
            ->assertSeeText('Contact');

        $this->get('/books')
            ->assertSeeText('Home')
            ->assertSeeText('Books')
            ->assertSeeText('About')
            ->assertSeeText('Contact');

        $this->get('/about')
            ->assertSeeText('Home')
            ->assertSeeText('Books')
            ->assertSeeText('About')
            ->assertSeeText('Contact');

        $this->get('/contact')
            ->assertSeeText('Home')
            ->assertSeeText('Books')
            ->assertSeeText('About')
            ->assertSeeText('Contact');
    });
});