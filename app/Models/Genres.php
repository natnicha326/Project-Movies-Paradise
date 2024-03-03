<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;

    protected $primaryKey = 'genres_id';
    protected $table = 'genress';

    protected $fillable = [
        'genres_id',
        'genres_name',
        'description',
    ];

     public function genress()
    {
        return $this->hasMany(Genres::class, 'genress');
    }
}

