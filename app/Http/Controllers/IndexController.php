<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class IndexController extends Controller
{

    public function index()
    {
        // 1. データベースから本を取得する（空でもOKな箱が作られます）
        $books = Book::all();

        // 2. index.blade.php に $books を渡してあげる！
        return view('books.index', compact('books'));
    }



}
