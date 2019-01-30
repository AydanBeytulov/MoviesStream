<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Movies;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //Settings
    private $perPage = 8;



    private $filters = array();
    private $dataForTemplate = array();

    public function index(){

        $this->dataForTemplate['Movies'] = $this->generateMovies();

        return view("search", $this->dataForTemplate);
    }

    public function category($categoryURL){
        $getCategory = Categories::query()->where('slug', $categoryURL)->first();
        if($getCategory){
            $this->filters['category'] = $getCategory->id;
            $this->dataForTemplate['selectedCategory'] = $getCategory->id;
            return $this->index();
        }else{
            //@todo: Add else redirection
        }
    }

    private function generateMovies(){

        $movies = Movies::query();

        foreach ($this->filters as $key=>$value){

            if($key === "category"){
              $movies->whereHas('categories', function($query) use ($value){
                  $query->where('categories.id', '=', $value);
              });
            }

        }

        return $movies->paginate($this->perPage) ;
    }
}

