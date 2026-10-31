<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Book;
use App\Models\User;


class Review extends Model
{
    use HasFactory;

        protected $fillable = [
        'user_id',
        'book_id',
        'value',
        'comment',
    ];


    //本に対してのレビュー（１対多）
    public function book()
    {

    return $this->belongsTo(Book::class);

    }

    //ユーザーがレビューを登録する（１対多）
    public function user()
    {

    return $this->belongsTo(User::class);

    }



    //ユーザーがレビューに「いいね」を押す（多対多）
    public function users()
    {

    return $this->belongsToMany(User::class);

    }


}
