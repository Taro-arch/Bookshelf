<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;


//書籍一覧画面
Route::get('/', [BookController::class, 'index'])
    ->name('books.index');


//書籍登録画面
Route::get('/books/create', [BookController::class, 'create'])
    ->middleware('auth')
    ->name('books.create');



//書籍登録画面の登録ボタン
Route::get('/books', [BookController::class, 'store'])
    ->name('books.store');



//
Route::get('/ranking', [BookController::class, 'index'])
    ->name('ranking.index');

//
Route::get('/favorites', [BookController::class, 'index'])
    ->name('favorites.index');

//
Route::get('/genres', [BookController::class, 'index'])
    ->name('genres.index');




//書籍詳細画面を表示する
Route::get('/books/{book}', [BookController::class, 'show'])
    ->name('books.show');




//書籍詳細画面にて、お気に入りボタンを押す
Route::post('/books/{book}/favorites', [BookController::class, 'favoritesToggle'])
    ->middleware('auth')
    ->name('favorites.toggle');


//書籍詳細画面にて、「投稿する」ボタンを押すと、レビューが追加される
Route::post('/books/{book}/reviews', [BookController::class, 'reviewsStore'])
    ->middleware('auth')
    ->name('reviews.store');



//書籍詳細画面にて、「いいね」ボタンを押す
Route::post('/reviews/{review}/like', [BookController::class, 'reviewsLike'])
    ->middleware('auth')
    ->name('reviews.like');




//書籍詳細画面のレビュー編集ボタン
Route::get('/reviews/{review}/edit', [BookController::class, 'reviewsEdit'])
    ->middleware('auth')
    ->name('reviews.edit');


//書籍詳細画面のレビュー削除ボタン
Route::delete('/reviews/{review}', [BookController::class, 'reviewsDelete'])
    ->middleware('auth')
    ->name('reviews.destroy');



//書籍詳細画面のレビューを更新する
Route::put('/reviews/{review}', [BookController::class, 'reviewsUpdate'])
    ->middleware('auth')
    ->name('reviews.update');




//書籍詳細画面の編集ボタン
Route::get('/books/{book}/edit', [BookController::class, 'bookEdit'])
    ->middleware('auth')
    ->name('books.edit');


//書籍詳細画面の削除ボタン
Route::delete('/books/{book}', [BookController::class, 'bookDestroy'])
    ->middleware('auth')
    ->name('books.destroy');


//書籍編集画面の更新ボタン
Route::put('/books/{book}', [BookController::class, 'bookUpdate'])
    ->middleware('auth')
    ->name('books.update');














