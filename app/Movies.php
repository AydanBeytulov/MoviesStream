<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    public function torrent (){
        return $this->hasOne("App\Torrents","movie_id","id");
    }

    public function categories (){
        return $this->belongsToMany('App\Categories', 'movie_category_connector',
            'movie_id', 'category_id');
    }
}
