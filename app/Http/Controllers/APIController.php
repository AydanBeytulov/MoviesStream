<?php

namespace App\Http\Controllers;

use App\Movies;
use App\Ratings;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function saveRating(Request $request){
        $userIP  = $request->userIP;
        $movieID = $request->movieID;
        $rating  = $request->rating;

        if(Movies::find($movieID)->first() && ( $rating > 0 && $rating <= 10 ) && filter_var($userIP, FILTER_VALIDATE_IP)){

            $ratings = new Ratings;
            $ratings->movieId = $movieID;
            $ratings->ipAddress = $userIP;
            $ratings->rating = $rating;

            if($ratings->save() === true){
                return response()->json(["response" => "Success" ],200);
            }else{
                return response()->json(["response" => "Error with saving" ],500);
            }

        }else{
            return response()->json(["response" => "Wrong data" ],400);
        }
    }
}
