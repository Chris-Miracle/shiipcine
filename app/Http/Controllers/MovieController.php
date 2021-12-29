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
        $locations = CinemaLocation::all();
        return view('welcome', compact('locations', 'movies'));
    }

    public function sortByCinema(Request $request){
        $cinemaId = $request->route('id');
        $locations = CinemaLocation::all();
        $movies = $this->movieRepository->sortByCinema($cinemaId);
        return view('welcome', compact('locations', 'movies'));
    }
}
