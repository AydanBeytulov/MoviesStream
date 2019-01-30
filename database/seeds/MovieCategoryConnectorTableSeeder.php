<?php

use Illuminate\Database\Seeder;

class MovieCategoryConnectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_category_connector')->insert([
            'movie_id' => "1",
            'category_id' => "10",
        ]);

        DB::table('movie_category_connector')->insert([
            'movie_id' => "1",
            'category_id' => "3",
        ]);

        DB::table('movie_category_connector')->insert([
            'movie_id' => "1",
            'category_id' => "6",
        ]);
    }
}
