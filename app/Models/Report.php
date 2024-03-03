<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'reports';

    protected $fillable = [
        'id',
        'report',
    ];

     public function reports()
    {
        return $this->hasMany(Report::class, 'reports');
    }
}
