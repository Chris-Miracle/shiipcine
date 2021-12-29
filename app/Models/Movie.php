<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_time',
        'show_date',
        'show_time',
        'image1',
    ];

    public function cinema_locatiom(){
        return $this->belongsTo('App\Models\CinemaLocation');
    }
}
