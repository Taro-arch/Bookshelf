<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 吾輩は猫である（book_id: 1）
        Review::create([
            'user_id' => 1,
            'book_id' => 1,
            'rating' => 5,
            'comment' => '猫の視点から描かれる人間社会が面白く、独特のユーモアを楽しめました。',
        ]);

        Review::create([
            'user_id' => 2,
            'book_id' => 1,
            'rating' => 4,
            'comment' => '昔の作品ですが、現代にも通じる人間の心理が描かれていて興味深かったです。',
        ]);

        Review::create([
            'user_id' => 3,
            'book_id' => 1,
            'rating' => 5,
            'comment' => '文章の表現が豊かで、何度読んでも新しい発見があります。',
        ]);

        // 人を動かす（book_id: 2）
        Review::create([
            'user_id' => 2,
            'book_id' => 2,
            'rating' => 5,
            'comment' => '人間関係を良くするための具体的な考え方が多く、仕事にも役立ちそうです。',
        ]);

        Review::create([
            'user_id' => 4,
            'book_id' => 2,
            'rating' => 4,
            'comment' => '相手の立場になって考えることの大切さを改めて実感しました。',
        ]);

        Review::create([
            'user_id' => 5,
            'book_id' => 2,
            'rating' => 5,
            'comment' => '実践しやすい内容が多く、コミュニケーションの参考になりました。',
        ]);

        // リーダブルコード（book_id: 3）
        Review::create([
            'user_id' => 1,
            'book_id' => 3,
            'rating' => 5,
            'comment' => 'コードの命名や構造について具体例が豊富で、とても勉強になりました。',
        ]);

        Review::create([
            'user_id' => 3,
            'book_id' => 3,
            'rating' => 4,
            'comment' => '読みやすいコードを書くための考え方が整理されていて理解しやすかったです。',
        ]);

        Review::create([
            'user_id' => 5,
            'book_id' => 3,
            'rating' => 5,
            'comment' => 'プログラミングを学び始めた人にもおすすめできる一冊だと思います。',
        ]);

        // 7つの習慣（book_id: 4）
        Review::create([
            'user_id' => 2,
            'book_id' => 4,
            'rating' => 5,
            'comment' => '日々の行動や考え方を見直すきっかけになりました。',
        ]);

        Review::create([
            'user_id' => 3,
            'book_id' => 4,
            'rating' => 4,
            'comment' => '内容は深いですが、自分の生活に当てはめながら読むと理解が進みました。',
        ]);

        Review::create([
            'user_id' => 4,
            'book_id' => 4,
            'rating' => 5,
            'comment' => '長期的な目標を持つことの重要性がよく分かりました。',
        ]);

        // 坊っちゃん（book_id: 5）
        Review::create([
            'user_id' => 1,
            'book_id' => 5,
            'rating' => 4,
            'comment' => '主人公の真っ直ぐな性格と、周囲の人物とのやり取りが面白かったです。',
        ]);

        Review::create([
            'user_id' => 4,
            'book_id' => 5,
            'rating' => 5,
            'comment' => 'テンポよく読み進められ、最後まで飽きずに楽しめました。',
        ]);

        Review::create([
            'user_id' => 5,
            'book_id' => 5,
            'rating' => 4,
            'comment' => '登場人物の個性が強く、物語の展開も印象に残りました。',
        ]);

        // サピエンス全史（book_id: 6）
        Review::create([
            'user_id' => 2,
            'book_id' => 6,
            'rating' => 5,
            'comment' => '人類の歴史を大きな視点から捉え直すことができ、とても刺激的でした。',
        ]);

        Review::create([
            'user_id' => 3,
            'book_id' => 6,
            'rating' => 4,
            'comment' => '普段あまり意識しない人類の歴史について、幅広く学べました。',
        ]);

        Review::create([
            'user_id' => 5,
            'book_id' => 6,
            'rating' => 5,
            'comment' => '社会や文明の成り立ちについて考えるきっかけになる一冊です。',
        ]);

        // Clean Code（book_id: 7）
        Review::create([
            'user_id' => 1,
            'book_id' => 7,
            'rating' => 5,
            'comment' => '保守しやすいコードを書くための原則が具体的に説明されていて参考になりました。',
        ]);

        Review::create([
            'user_id' => 3,
            'book_id' => 7,
            'rating' => 4,
            'comment' => '実際の開発で意識したい内容が多く、何度も読み返したいと思いました。',
        ]);

        Review::create([
            'user_id' => 4,
            'book_id' => 7,
            'rating' => 5,
            'comment' => 'コードの品質について考える良い機会になりました。',
        ]);

        // 嫌われる勇気（book_id: 8）
        Review::create([
            'user_id' => 2,
            'book_id' => 8,
            'rating' => 5,
            'comment' => '他人の評価にとらわれずに生きるという考え方が印象に残りました。',
        ]);

        Review::create([
            'user_id' => 4,
            'book_id' => 8,
            'rating' => 4,
            'comment' => '対話形式なので読みやすく、心理学の考え方を身近に感じられました。',
        ]);

        Review::create([
            'user_id' => 5,
            'book_id' => 8,
            'rating' => 5,
            'comment' => '自分の考え方を見直すきっかけになり、読んで良かったです。',
        ]);

        // 火花（book_id: 9）
        Review::create([
            'user_id' => 1,
            'book_id' => 9,
            'rating' => 4,
            'comment' => '芸人の世界を舞台にした人間関係や葛藤がリアルに描かれていました。',
        ]);

        Review::create([
            'user_id' => 3,
            'book_id' => 9,
            'rating' => 5,
            'comment' => '登場人物の心情が丁寧に描かれていて、物語に引き込まれました。',
        ]);

        Review::create([
            'user_id' => 5,
            'book_id' => 9,
            'rating' => 4,
            'comment' => '夢を追い続けることの難しさや切なさが伝わってくる作品でした。',
        ]);

        // FACTFULNESS（book_id: 10）
        Review::create([
            'user_id' => 2,
            'book_id' => 10,
            'rating' => 5,
            'comment' => '思い込みではなくデータをもとに世界を見る大切さを学べました。',
        ]);

        Review::create([
            'user_id' => 3,
            'book_id' => 10,
            'rating' => 4,
            'comment' => '世界の現状について、自分が知らなかったことが多く勉強になりました。',
        ]);

        Review::create([
            'user_id' => 4,
            'book_id' => 10,
            'rating' => 5,
            'comment' => 'ニュースや統計を見るときの意識が変わる内容でした。',
        ]);

        // コンテナ物語（book_id: 11）
        Review::create([
            'user_id' => 1,
            'book_id' => 11,
            'rating' => 5,
            'comment' => 'コンテナの普及が世界の物流を大きく変えたことがよく分かりました。',
        ]);

        Review::create([
            'user_id' => 5,
            'book_id' => 11,
            'rating' => 4,
            'comment' => '普段意識することのない物流の仕組みについて知ることができました。',
        ]);
    }
}




