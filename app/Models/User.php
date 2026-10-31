<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Book;
use App\Models\Review;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'two_factor_confirmed_at',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    //ユーザーが本を登録する（１対多）
    public function books()
    {

    return $this->hasMany(Book::class);

    }


    //ユーザーが本をお気に入りに入れる（多対多）
    public function favoriteBooks()
    {
        return $this->belongsToMany(Book::class);
    }


    //ユーザーがレビューを投稿する（１対多）
    public function reviews()
    {

    return $this->hasMany(Review::class);

    }


    //ユーザーがレビューに「いいね」を押す（多対多）
    public function favoriteReviews()
    {

    return $this->belongsToMany(Review::class);

    }



}
