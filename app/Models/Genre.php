<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Book;


class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre_name',
    ];



    //本のジャンル（多対多）
    public function books()
    {

    return $this->belongsToMany(Book::class);

    }



}
