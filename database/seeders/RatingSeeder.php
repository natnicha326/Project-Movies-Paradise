<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rating;
class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $RatingData = [
        [
            'rating_id' => 1,
            'rating_poster' => 'https://lh3.googleusercontent.com/w-5QXOQtADTv8eLWTuyWSW4J80H_6MWFIaZL8-p_19j50ap6fAMgETtNj7gwtV6j6ht6wquPCnvjBeJ2afSfljVktitiuEGNix4=w260',
            'rating_name' => 'พี่นาค 4',
            'rating_for' => '⭐7/10',
        ],
        [
            'rating_id' => 2,
            'rating_poster' => 'https://lh3.googleusercontent.com/fFJt_7VVXoc8pbKN78R4MOr993AlvcChgZZBGzzS5CNf2cPWmiMWaTZPD4tTWZ5XszclZ-SqR_AruPxE26agc8uPBDWBerUsGQ=w260',
            'rating_name' => '4 KINGS 2',
            'rating_for' => '⭐7.5/10',
        ],
        [
            'rating_id' => 3,
            'rating_poster' => 'https://lh3.googleusercontent.com/8Bd7H8KDnhqWhOrg9Ey9evg6l3mglbPuGSqVSDkGoP1Uf3C_PKZaCGYzFM3bRe5ZXp5jSWKuN8BTGoQFgVIkzzXgJLH-mFcC=w260',
            'rating_name' => 'เหมรฺย',
            'rating_for' => '⭐7.5/10',
        ],
        [
            'rating_id' => 4,
            'rating_poster' => 'https://lh3.googleusercontent.com/Ognuk3kdECvbXlFmWaqP8KGnAdrHsmOLOiHltBv7ivsoiQhM6nxqSG96WsNmBTKMgKsTyaBY9ER19waidv00nwygvpguO8Zq1g=w260',
            'rating_name' => 'มาสค์ไรเดอร์ ไฟซ์ ภาค สงครามทวงคืนสวรรค์',
            'rating_for' => '⭐6/10',
        ],
        [
            'rating_id' => 5,
            'rating_poster' => 'https://lh3.googleusercontent.com/yvyMJyeqXlVOSq2qwnhD1d21I9Nohq9yPlxhPb2hN_WWzzlOC6oYJOwqSxABwC5InldSiiVh3kymjQ3MQ1vmMGxR2G07AtGc=w260',
            'rating_name' => 'โคตรพยัคฆ์ชน คนมือทอง',
            'rating_for' => '⭐8.5/10',
        ],
        [
            'rating_id' => 6,
            'rating_poster' => 'https://lh3.googleusercontent.com/NHOFjou5kHV45c2YypYoPuyiFao9bYQJW5ZTVResX9xk3-kidvM4WbuhA0rccujXiS52xYXEGEikGH1qYu4TzZRG4jx7VVIadws=w260',
            'rating_name' => 'ดาบพิฆาตอสูร : สู่การสั่งสอนของเสาหลัก',
            'rating_for' => '⭐7.3/10',
        ],
        [
            'rating_id' => 7,
            'rating_poster' => 'https://lh3.googleusercontent.com/5tx79Mc2h9L2YkO-sJq_9KbQ8hCg1whtshS3OSQVcW0r-LpvGK5jydJwlTSA9GuGUWRu7HGWmeDXpB82gKfiUS6aXEB5OGSc_CU=w260',
            'rating_name' => 'ปิดเมืองล่า',
            'rating_for' => '⭐8/10',
        ],
        [
            'rating_id' => 8,
            'rating_poster' => 'https://lh3.googleusercontent.com/9nWpd2PGXbKk9bJvCCexPVX6j5-IgRSTAFV5v0vvse-v8KTGCnk5XaEM7vmRY0Z82NuIr1XYa2XqsGq7waEOa_5bFOn0uJ6f=w260',
            'rating_name' => 'ก๊วนสาวซ่าส์ วีนซะไม่มี',
            'rating_for' => '⭐8.3/10',
        ],
        [
            'rating_id' => 9,
            'rating_poster' => 'https://lh3.googleusercontent.com/At7-P67j4DaB3OmtnAKyh4CPu3x-GuDonJ80Z3ypCfrWEZEwzO9-nBWf-f8F3KINrHVrBLmUltEXjmgY2RLbLoCFNDRNb7XdXw=w260',
            'rating_name' => 'ดูน ภาคสอง',
            'rating_for' => '⭐9.7/10',
        ],
        [
            'rating_id' => 10,
            'rating_poster' => 'https://lh3.googleusercontent.com/5U3o9cOloz01BbVZgqd9EnX6YR49SkMv22EROs8h9JvR6YQ2UMHuaV9odebRk1Hxs80cumWB80njRihnqLbMwG7dwjwCke5xYmE=w260',
            'rating_name' => 'กังฟูแพนด้า 4',
            'rating_for' => 'ยังไม่ถึงเวลาภายภาพยนต์',
        ],
        [
            'rating_id' => 11,
            'rating_poster' => 'https://lh3.googleusercontent.com/5dAWWUGxs0CFZbpb716HN6y3T95oeM3sIS0XEP1c7qju1f_SLQ6j626xHCqte---tyJOi7P_cDwu1wRA8uraOUUMMFt5bk0u=w260',
            'rating_name' => 'วองก้า',
            'rating_for' => '⭐7/10',
        ],
        [
            'rating_id' => 12,
            'rating_poster' => 'https://lh3.googleusercontent.com/1OA6KslfxKGuZrziY4uSQxBpijvBZNonbiG8JNwylYqMm41j4hk2ic5_L99MD6EpD9uk1dh2y08GfKLC4M1-TpZebAVlVIasEog=w260',
            'rating_name' => 'อาร์ไกล์ ยอดสายลับ',
            'rating_for' => '⭐5/10',
        ],
        [
            'rating_id' => 13,
            'rating_poster' => 'https://lh3.googleusercontent.com/Vy2614FkOeHh-peRRD587NGsItlGrXUPy5vCs0YNaOF-JXr56KuvAaKEX32l5myfj9xop1UhlbAmOlm_td_bWqADn5Ejonv8XFg=w260',
            'rating_name' => 'มาดามเว็บ',
            'rating_for' => '⭐5/10',
        ],
        [
            'rating_id' => 14,
            'rating_poster' => 'https://lh3.googleusercontent.com/4puG69f6vmuXPOndWDWQtHN3UxVNQ9MTeuTavuzRpZqjvUxRB2bMDkbg7xr9IW0enwFQY_TJfGR7nYKHCR89wXnGDnSQmsvCsTw=w260',
            'rating_name' => 'โมบิลสูท กันดั้ม ซี้ด ฟรีด้อม',
            'rating_for' => '⭐7.3/10',
        ],
        [
            'rating_id' => 15,
            'rating_poster' => 'https://lh3.googleusercontent.com/R1aJAZPsYovWhFp_RmR989m95GK-KQq2JxGT8dFGh0kF7Y0OFWaJqnzcXtwWkLcBNryLvELlFAbLV2AzE8Z3UgLYPXQnozEH2w=w260',
            'rating_name' => 'ยินดีต้อนรับสู่โรงกลั่นโคมาดะ',
            'rating_for' => '⭐8/10',
        ],
        [
            'rating_id' => 16,
            'rating_poster' => 'https://lh3.googleusercontent.com/wRdxbYgQEyNCeri1IttO6usM6UK7ot5vSmuSRuaL14qvHYBgwM93P_Z4CG0WB1ZfWaofgbtyxim8es88yBwblL_Bmrl7ai52EQ=w260',
            'rating_name' => 'ผีสิงผี',
            'rating_for' => ' ⭐6/10',
        ],
    ];

    foreach ($RatingData as $data) {
        Rating::create($data);
    }
}
}
