<?php

namespace App\Interfaces;

interface MovieRepositoryInterface 
{
    public function getAllMovies();
    public function getIkejaMovies();
    public function getBananaIslandMovies();
    public function getLekkiMovies();
    public function getMovieById($orderId);
    public function deleteMovie($orderId);
    public function createMovie(array $orderDetails);
    public function updateMovie($orderId, array $newDetails);
}