<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'name' => "Tomb Raider: Първа мисия",
            'picture' => "http://filmisub.com/uploads/posts/zamunda/538009/538009-poster.jpg",
            'wallpaper' => "https://www.screengeek.net/wp-content/uploads/2018/03/tomb-raider-movie-2018.jpg",
            'type' => "1",
            'director' => "Director",
            'storyline' => "Storyline",
            'release_date' => "2019-01-31",
            'length' => "234",
            'youtube_trailer' => "8ndhidEmUbI",
        ]);
    }
}