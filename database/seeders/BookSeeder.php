<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Book;
use App\Models\User;
use App\Models\Genre;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


    $datas = [

    [
        'title' => '吾輩は猫である',
        'author' => '夏目漱石',
        'isbn' => '9784101010014',
        'published_at' => '1905-01-01',
        'description' => '猫の視点から人間社会や人間の心理をユーモラスに風刺した夏目漱石の代表作。',
        'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=1',
        'genres' => ['小説'],
    ],

    [
        'title' => '人を動かす',
        'author' => 'D・カーネギー',
        'isbn' => '9784422100524',
        'published_at' => '1936-10-01',
        'description' => '人間関係を円滑にし、他者との信頼関係を築くための考え方やコミュニケーションの原則を解説した書籍。',
        'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=2',
        'genres' => ['ビジネス', '自己啓発'],
    ],

    [
        'title' => 'リーダブルコード',
        'author' => 'Dustin Boswell',
        'isbn' => '9784873115658',
        'published_at' => '2012-06-23',
        'description' => '読みやすく理解しやすいコードを書くための命名、コメント、構造化などの実践的な技術を解説した書籍。',
        'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=3',
        'genres' => ['技術書'],
    ],

    [
        'title' => '7つの習慣',
        'author' => 'スティーブン・R・コヴィー',
        'isbn' => '9784863940246',
        'published_at' => '2013-08-30',
        'description' => '個人の成長や人間関係の改善を通じて、効果的な生き方を実現するための7つの原則を解説した書籍。',
        'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=4',
        'genres' => ['ビジネス', '自己啓発'],
    ],

    [
        'title' => '坊っちゃん',
        'author' => '夏目漱石',
        'isbn' => '9784101010021',
        'published_at' => '1906-04-01',
        'description' => '正義感の強い青年教師が四国の中学校に赴任し、個性的な教師や生徒たちと繰り広げる騒動を描いた小説。',
        'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=5',
        'genres' => ['小説'],
    ],

    [
        'title' => 'サピエンス全史',
        'author' => 'ユヴァル・ノア・ハラリ',
        'isbn' => '9784309226712',
        'published_at' => '2016-09-08',
        'description' => '認知革命、農業革命、科学革命などを通じて、人類がどのように発展し現代社会を築いたのかを解説した歴史書。',
        'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=6',
        'genres' => ['歴史', '科学'],
    ],

    [
        'title' => 'Clean Code',
        'author' => 'Robert C. Martin',
        'isbn' => '9784048930598',
        'published_at' => '2017-12-18',
        'description' => '保守性や品質の高いソフトウェアを開発するための、読みやすく整理されたコードの書き方や設計原則を解説した技術書。',
        'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=7',
        'genres' => ['技術書'],
    ],

    [
        'title' => '嫌われる勇気',
        'author' => '岸見一郎・古賀史健',
        'isbn' => '9784478025819',
        'published_at' => '2013-12-13',
        'description' => 'アドラー心理学を対話形式で紹介し、他者の評価に縛られず自分らしく生きるための考え方を解説した書籍。',
        'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=8',
        'genres' => ['自己啓発'],
    ],

    [
        'title' => '火花',
        'author' => '又吉直樹',
        'isbn' => '9784163902302',
        'published_at' => '2015-03-11',
        'description' => '売れない芸人と才能あふれる先輩芸人との交流を通じて、芸人として生きることや人間の葛藤を描いた小説。',
        'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=9',
        'genres' => ['小説'],
    ],

    [
        'title' => 'FACTFULNESS',
        'author' => 'ハンス・ロスリング',
        'isbn' => '9784822289607',
        'published_at' => '2019-01-11',
        'description' => 'データや統計に基づいて世界の現状を正しく理解し、思い込みや先入観を見直すための考え方を解説した書籍。',
        'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=10',
        'genres' => ['ビジネス', '科学'],
    ],

    [
        'title' => 'コンテナ物語',
        'author' => 'マルク・レビンソン',
        'isbn' => '9784822251468',
        'published_at' => '2007-01-18',
        'description' => '海上輸送用コンテナの普及が世界の物流や貿易、経済の仕組みをどのように変えたのかを解説した書籍。',
        'image_url' => 'https://placehold.co/200x300/e2e8f0/475569?text=11',
        'genres' => ['ビジネス', '歴史'],
    ],

    ];


    //書籍の登録者は山田太郎だけ
    $user = User::first();

    foreach($datas as $data){

        $book = Book::firstOrCreate(
        ['isbn' => $data['isbn']],
        [
            'title' => $data['title'],
            'author' => $data['author'],
            'published_at' => $data['published_at'],
            'description' => $data['description'],
            'image_url' => $data['image_url'],
            'user_id' => $user->id,
        ]
        );


    $genreIds = Genre::whereIn('name', $data['genres'])
    ->pluck('id')
    ->all();


    $book->genres()->sync($genreIds);


    }








    }
}
