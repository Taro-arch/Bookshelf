<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;


Route::get('/', [BookController::class, 'index'])->name('books.index');

Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

Route::get('/books/create', [BookController::class, 'create'])
    ->middleware('auth')->name('books.create');

Route::get('/ranking', [BookController::class, 'index'])->name('ranking.index');

Route::get('/favorites', [BookController::class, 'index'])->name('favorites.index');

Route::get('/genres', [BookController::class, 'index'])->name('genres.index');


