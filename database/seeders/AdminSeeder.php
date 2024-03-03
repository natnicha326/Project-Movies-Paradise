<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $AdminData = [
        [
            'admin_id' => 1,
            'photo' =>'https://www.sentangsedtee.com/wp-content/uploads/2018/05/cute-dog-shiba-inu-ryuji-japan-17.jpg',
            'nickname' =>'บิ๊ก',
'name' => 'ศุภเดช',
'lastname' => 'เดชคำ',
'jobs' => 'CEO Cyber Security Company No.1 of Thailand',
'gender' => 'ชาย',
'age' => '19',
'address' => 'Maejo University',
'tel' => '095-694-5835',
        ],
    ];

    foreach ($AdminData as $data) {
        Admin::create($data);
    }
}
}
