<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $primaryKey = 'admin_id';
    protected $table = 'admins';

    protected $fillable = [
      'admin_id',
            'photo',
           'nickname',
            'name',
    'lastname',
       'jobs',
       'gender',
        'age',
       'address',
        'tel',
        'image_path',
    ];

     public function admins()
    {
        return $this->hasMany(Admin::class, 'admins');
    }
}
