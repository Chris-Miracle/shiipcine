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

    public function getIkejaMovies($cinemaId) 
    {
        $cinemaLocation = CinemaLocation::findOrfail($cinemaId);
        return $cinemaLocation->movies;
    }

    public function getBananaIslandMovies() 
    {
        $cinemaLocation = CinemaLocation::findOrfail($cinemaId);
        return $cinemaLocation->movies;
    }

    public function getLekkiMovies() 
    {
        $cinemaLocation = CinemaLocation::findOrfail($cinemaId);
        return $cinemaLocation->movies;
    }

    public function getMovieById($movieId) 
    {
        return Movie::findOrFail($movieId);
    }

    public function deleteMovie($movieId) 
    {
        Movie::destroy($movieId);
    }

    public function createMovie(array $movieDetails) 
    {
        return Movie::create($movieDetails);
    }

    public function updateMovie($movieId, array $newDetails) 
    {
        return Movie::whereId($movieId)->update($newDetails);
    }
}