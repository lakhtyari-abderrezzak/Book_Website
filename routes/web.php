<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Livewire\BookList;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('books', [BookController::class , 'index'])->name('books.index');
Route::get('books/{id}', [BookController::class , 'show'])->name('books.show');

Route::get('categories/{id}', [CategoryController::class , 'show'])->name('categories.show');


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::view('/contact', 'contact');

require __DIR__.'/auth.php';
