<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    $ReviewData = [
        [
        ],

    ];

    foreach ($ReviewData as $data) {
        Review::create($data);
    }
}
}

