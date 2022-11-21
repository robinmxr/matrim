<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;


    protected $fillable = [
      'name',
      'year',
      'casts',
      'trailer',
      'genre',
      'description',
      'poster',
        'runtime',
    ];



    public function booking()
    {
        return $this->hasMany('App\Models\Booking');
    }
}
