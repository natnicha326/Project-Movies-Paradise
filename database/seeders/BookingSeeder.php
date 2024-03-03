<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;
class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $BookingData = [
        [
            'cinema_id' => 1,
            'cinema_name' =>'Major Cineplex เมเจอร์ ซีนีเพล็กซ์',
'logo' => 'https://files.eventpass.co/eventpass-api/file/1635315554630blob',
'web' => 'https://www.majorcineplex.com/home'
        ],
[
            'cinema_id' => 2,
            'cinema_name' =>'SF Cinema เอสเอฟ ซีเนม่า',
'logo' => 'https://upload.wikimedia.org/wikipedia/commons/c/cb/SF_Cinema_logo.jpg',
'web' => 'https://www.sfcinemacity.com/'
        ],
    ];

    foreach ($BookingData as $data) {
        Booking::create($data);
    }
}
}
