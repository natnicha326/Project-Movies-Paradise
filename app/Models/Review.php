<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'reviews';

    protected $fillable = [
        'id',
        'movie_name',
'feedback',
    ];

     public function reviews()
    {
        return $this->hasMany(Review::class, 'reviews');
    }
}
