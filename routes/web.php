<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;


//書籍一覧画面
Route::get('/', [BookController::class, 'index'])->name('books.index');


//書籍登録画面
Route::get('/books/create', [BookController::class, 'create'])
    ->middleware('auth')
    ->name('books.create');

//
Route::get('/books', [BookController::class, 'store'])
    ->name('books.store');



//
Route::get('/ranking', [BookController::class, 'index'])->name('ranking.index');

//
Route::get('/favorites', [BookController::class, 'index'])->name('favorites.index');

//
Route::get('/genres', [BookController::class, 'index'])->name('genres.index');



//書籍詳細画面
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');



//
Route::post('/books/{book}/favorites', [BookController::class, 'favoritesToggle'])
    ->middleware('auth')
    ->name('favorites.toggle');


//
Route::post('/books/{book}/reviews', [BookController::class, 'reviewsStore'])
    ->middleware('auth')
    ->name('reviews.store');

//
Route::post('/reviews/{review}/like', [BookController::class, 'reviewsLike'])
    ->middleware('auth')
    ->name('reviews.like');





