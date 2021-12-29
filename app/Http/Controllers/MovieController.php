<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CinemaLocation;
use App\Models\Movie;
use App\Interfaces\MovieRepositoryInterface;

class MovieController extends Controller
{
    private MovieRepositoryInterface $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function index()
    {
        $movies = $this->movieRepository->getAllMovies();
        return view('welcome', compact('locations', 'movies'));
    }

    public function getIkejaMovies(){
        $cinemaId = $request->route('id');
        $movies = $this->movieRepository->getIkejaMovies($cinemaId);
        return view('welcome', compact('movies'));
    }

    public function getBananaIslandMovies(){
        $cinemaId = $request->route('id');
        $movies = $this->movieRepository->getBananaIslandMovies($cinemaId);
        return view('welcome', compact('movies'));
    }

    public function getLekkiMovies(){
        $cinemaId = $request->route('id');
        $movies = $this->movieRepository->getLekkiMovies($cinemaId);
        return view('welcome', compact('movies'));
    }
}
