<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'cinema_location_id',
        'movie_title',
        'show_date',
        'show_time',
        'movie_cover',
    ];

    public function cinema_location(){
        return $this->belongsTo('App\Models\CinemaLocation');
    }
}
