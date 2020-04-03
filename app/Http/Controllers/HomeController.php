<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies = Movies::orderBy('year_released', 'DESC')->get();
        foreach ($movies as $movie){
            $movie->title = mb_convert_case($movie->title, MB_CASE_TITLE, "UTF-8");
        }
        return view('home', compact('movies'));
    }

    public function movies(){
        $movies = Movies::orderBy('year_released', 'DESC')->get();
        return json_encode($movies);
    }
}
