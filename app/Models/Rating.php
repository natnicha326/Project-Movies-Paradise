<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $primaryKey = 'rating_id';
    protected $table = 'ratings';

    protected $fillable = [
        'rating_id',
        'rating_poster',
        'rating_name',
        'rating_for',

    ];

     public function ratings()
    {
        return $this->hasMany(Rating::class, 'ratings');
    }
}
