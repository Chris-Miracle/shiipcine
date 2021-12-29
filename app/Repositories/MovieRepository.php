<?php

namespace App\Repositories;

use App\Interfaces\MovieRepositoryInterface;
use App\Models\Movie;
use App\Models\CinemaLocation;

class MovieRepository implements MovieRepositoryInterface 
{
    public function getAllMovies() 
    {
        return Movie::all();
    }

    public function sortByCinema($cinemaId) 
    {
        $cinemaLocation = CinemaLocation::findOrfail($cinemaId);
        return $cinemaLocation->movies;
    }

    public function deleteMovie($movieId) 
    {
        Movie::destroy($movieId);
    }

    public function createMovie(array $movieDetails) 
    {
        return Movie::create($movieDetails);
    }
}