<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
protected $primaryKey = 'cinema_id';
    protected $table = 'bookings';

    protected $fillable = [
        'cinema_id',
        'cinema_name',
        'logo',
        'web',

    ];

     public function bookings()
    {
        return $this->hasMany(Booking::class, 'bookings');
    }
}

