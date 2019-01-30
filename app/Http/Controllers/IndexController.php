<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Movies;
use App\Settings;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    //Settings
    private $perPage = 4;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dataForTemplate = array();

        $firstMovie = Movies::find(setting('site.movies_first'))->first();

        $dataForTemplate['FirstMovie'] = $firstMovie;
        $dataForTemplate['FirstMovieWallpaper'] = setting('site.movies_first_wallpaper');

        return view('index', $dataForTemplate);
    }

    public function getMoviesList(){
        $moviesData = Movies::paginate($this->perPage);
        return response()->json($moviesData);
    }
}
