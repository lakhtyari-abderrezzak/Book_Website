<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Livewire\BookList;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
    
Route::get('books', [BookController::class , 'index'])->name('books.index');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
