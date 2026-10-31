<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        // 1. データベースからすべての書籍データを取得する
        $books = Book::all();

        // 2. 取得したデータを「books」という名前の変数としてビューに渡す
        return view('books.index', compact('books'));
    }


}
