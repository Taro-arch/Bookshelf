<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Review;

use App\Http\Requests\ReviewRequest;



class BookController extends Controller
{





public function index()
{
    $books = Book::with('genres')
        ->withAvg('reviews', 'rating')
        ->latest()
        ->paginate(10);

    return view('books.index', compact('books'));
}





public function show(Request $request)
{

    $id = $request->route('book');

    $book = Book::find($id);

    return view('books.show', compact('book'));

}






public function create()
{

    $genres = Genre::all();

    return view('books.create', compact('genres'));


}




public function favoritesToggle(Book $book)
{

    $user = Auth::user();

    //その本がお気に入りに登録されてるかどうか
    //お気に入りに登録済みならば、中間テーブル(favoritesTable)から削除する。
    //お気に入りに未登録ならば、中間テーブル(favoritesTable)に追加する。

    if ($user->favoriteBooks->contains($book->id)){

        $user->favoriteBooks()->detach($book->id);

    }else{

        $user->favoriteBooks()->attach($book->id);

    }

    return back();

}








public function reviewsStore(ReviewRequest $request, Book $book)
{

    $user = Auth::user();

    $rating = $request->input('rating');
    $comment = $request->input('comment');

    $user->reviews()->create([

            'book_id' => $book->id,
            'rating' => $rating,
            'comment' => $comment,

    ]);

    return redirect()->route('books.show', $book);

}





public function reviewsLike(Request $request)
{

    $user = Auth::user();

    $reviewId = $request->route('review');

    //いいね済みならば、中間テーブル(reviewLikesTable)から削除する。
    //いいねをまだしてないならば、中間テーブル(reviewLikesTable)に追加する。

    if ($user->likedReviews->contains($reviewId)){

        $user->likedReviews()->detach($reviewId);

    }else{

        $user->likedReviews()->attach($reviewId);

    }

    return back();

}



public function reviewsEdit(Request $request)
{

    //レビュー編集画面を表示する

    $reviewId = $request->route('review');

    $review = Review::findOrFail($reviewId);

    $this->authorize('update', $review);

    return view('reviews.edit', compact('review'));

}




public function reviewsDelete(Request $request)
{

    //削除ボタンを押して、自分のレビューを削除する

    $reviewId = $request->route('review');

    $review = Review::findOrFail($reviewId);

    $this->authorize('delete', $review);

    $review->delete();

    return back();

}





public function reviewsUpdate()
{



}







public function bookEdit(Request $request)
{

    $bookId = $request->route('book');

    $book = Book::findOrFail($bookId);

    $this->authorize('update', $book);

    $genres = Genre::all();

    return view('books.edit',[

    'book' => $book,
    'genres' => $genres,

    ]);

}





public function bookDestroy(Book $book)
{

    $this->authorize('delete', $book);

    $book->delete();

    return redirect()->route('books.index');

}



public function bookUpdate()
{



}



}
