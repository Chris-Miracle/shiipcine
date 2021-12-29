<?php

namespace App\Interfaces;

interface MovieRepositoryInterface 
{
    public function getAllMovies();
    public function getIkejaMovies($cinemaId);
    public function getBananaIslandMovies($cinemaId);
    public function getLekkiMovies($cinemaId);
    public function getMovieById($movieId);
    public function deleteMovie($movieId);
    public function createMovie(array $movieDetails);
    public function updateMovie($movieId, array $newDetails);
}