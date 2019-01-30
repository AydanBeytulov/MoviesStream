<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("picture");
            $table->string("wallpaper");
            $table->integer("type");
            $table->text('director');
            $table->text("storyline");
            $table->date("release_date");
            $table->integer("length");
            $table->string("youtube_trailer");
            $table->decimal("rating","3","1");
            $table->decimal("IMDBrating","3","1");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
