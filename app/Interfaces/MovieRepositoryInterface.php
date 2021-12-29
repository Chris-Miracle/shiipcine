<?php

namespace App\Interfaces;

interface MovieRepositoryInterface 
{
    public function getAllMovies();
    public function sortByCinema($cinemaId);
    public function deleteMovie($movieId);
    public function createMovie(array $movieDetails);
}