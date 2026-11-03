<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $names = [

        '小説',
        'ビジネス',
        '技術書',
        '自己啓発',
        'エッセイ',
        '歴史',
        '科学',
        '芸術',
        '料理',
        '旅行',

        ];

        foreach($names as $name){

        Genre::firstOrCreate(['name' => $name]);

        }


    }
}




