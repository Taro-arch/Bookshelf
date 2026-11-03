<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;


class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    //ユーザーID1のお気に入り本

    $user = User::find(1);
    $user->books()->syncWithoutDetaching([1, 4, 5]);


    //ユーザーID2のお気に入り本

    $user = User::find(2);
    $user->books()->syncWithoutDetaching([2, 3, 4]);


//ユーザーID3のお気に入り本

    $user = User::find(3);
    $user->books()->syncWithoutDetaching([1, 4, 6, 11]);


    //ユーザーID4のお気に入り本

    $user = User::find(4);
    $user->books()->syncWithoutDetaching([3, 6, 9, 10, 11]);


    //ユーザーID5のお気に入り本

    $user = User::find(5);
    $user->books()->syncWithoutDetaching([2, 6, 11]);

    }


}
