<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "Drama",
            'slug' => "drama",
            'icon' => "images/genres/drama.png",
        ]);

        DB::table('categories')->insert([
            'name' => "Comedy",
            'slug' => "comedy",
            'icon' => "images/genres/comedy.png",
        ]);

        DB::table('categories')->insert([
            'name' => "Action",
            'slug' => "action",
            'icon' => "images/genres/action.png",
        ]);

        DB::table('categories')->insert([
            'name' => "Romance",
            'slug' => "romance",
            'icon' => "images/genres/romance.png",
        ]);

        DB::table('categories')->insert([
            'name' => "Horror",
            'slug' => "horror",
            'icon' => "images/genres/horror.png",
        ]);

        DB::table('categories')->insert([
            'name' => "Fantasy",
            'slug' => "fantasy",
            'icon' => "images/genres/fantasy.png",
        ]);

        DB::table('categories')->insert([
            'name' => "Sci-fi",
            'slug' => "scifi",
            'icon' => "images/genres/sci-fi.png",
        ]);

        DB::table('categories')->insert([
            'name' => "Thriller",
            'slug' => "thriller",
            'icon' => "images/genres/thriller.png",
        ]);

        DB::table('categories')->insert([
            'name' => "Western",
            'slug' => "western",
            'icon' => "images/genres/western.png",
        ]);

        DB::table('categories')->insert([
            'name' => "Adventure",
            'slug' => "adventure",
            'icon' => "images/genres/adventure.png",
        ]);

        DB::table('categories')->insert([
            'name' => "Animation",
            'slug' => "animation",
            'icon' => "images/genres/animation.png",
        ]);

        DB::table('categories')->insert([
            'name' => "Documentary",
            'slug' => "documentary",
            'icon' => "images/genres/documentary.png",
        ]);

    }
}
