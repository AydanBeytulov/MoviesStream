<?php

namespace App\Http\Controllers;

use App\Movies;
use Illuminate\Http\Request;

class ViewMovieController extends Controller
{
    public function index($movieId){

        $dataForTemplate = array();
        $dataForTemplate['movieData'] = Movies::query()->where('id',$movieId)->first();

        return view("viewMovie", $dataForTemplate);
    }
}
