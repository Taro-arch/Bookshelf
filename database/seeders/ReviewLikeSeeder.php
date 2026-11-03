<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class ReviewLikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


    //ユーザーID1のレビューへの「いいね」

    $user = User::find(1);
    $user->favoriteReviews()->syncWithoutDetaching([2, 4, 5]);


    //ユーザーID2のレビューへの「いいね」

    $user = User::find(2);
    $user->favoriteReviews()->syncWithoutDetaching([3]);


    //ユーザーID3のレビューへの「いいね」

    $user = User::find(3);
    $user->favoriteReviews()->syncWithoutDetaching([4, 7, 10]);


    //ユーザーID4のレビューへの「いいね」

    $user = User::find(4);
    $user->favoriteReviews()->syncWithoutDetaching([7, 8, 9]);


    //ユーザーID5のレビューへの「いいね」

    $user = User::find(5);
    $user->favoriteReviews()->syncWithoutDetaching([1, 4, 10, 11]);





    }


}
