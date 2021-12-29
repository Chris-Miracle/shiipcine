<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CinemaLocation;
use App\Models\Movie;
use App\Interfaces\MovieRepositoryInterface;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private MovieRepositoryInterface $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->middleware('auth');
        $this->movieRepository = $movieRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locations = CinemaLocation::all();
        $movies = $this->movieRepository->getAllMovies();
        return view('home', compact('locations', 'movies'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'movie_title' => "required|min:3",
            'show_date' => 'required|date|after_or_equal:today',
            'show_time' => "required",
            'movie_cover' => "required|image|mimes:jpg,jpeg,png|max:600"
        ]);

        if ($request->hasFile('movie_cover')) {
            $image = $request->file('movie_cover');
            $Imagefile = '_movie_cover'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(470, 620)->save(public_path('images/movies/'.$Imagefile));
        }

        $movieDetails = array(
            'movie_title' => $request->movie_title,
            'show_date' => $request->show_date,
            'show_time' => $request->show_time,
            'movie_cover' => $Imagefile 
        );

        $this->movieRepository->createMovie($movieDetails);
        return redirect('/home');
    }

    public function destroy(Request $request) 
    {
        $movieId = $request->route('id');
        $getMovie = Movie::findOrfail($movieId);
        $getImage = "images/movies/".$getProduct->movie_cover;
        if(File::exists($getImage)) {
            File::delete($getImage);
        }
        $this->movieRepository->deleteOrder($movieId);

        return back();
    }
}
