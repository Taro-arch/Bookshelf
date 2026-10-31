<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Genre;
use App\Models\Review;
use App\Models\User;




class Book extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'title',
        'author',
        'isbn',
        'published_at',
        'description',
        'image_url',
    ];


    //本のジャンル（多対多）
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }


    //ユーザーが登録した本（１対多）
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //ユーザーが本をお気に入りに入れる（多対多）
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    //本に対してのレビュー（１対多）
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}