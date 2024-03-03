<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $primaryKey = 'movie_id';
    protected $table = 'movies';

    protected $fillable = [
        'title',
        'poster',
        'synopsis',
        'genres',
        'duration',
        'director',
        'cast',
        'trailer',
        'reviews',
    ];

     public function movies()
    {
        return $this->hasMany(Movie::class, 'movies');
    }
}

