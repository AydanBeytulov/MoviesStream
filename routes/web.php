<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index')->name('index');
Route::get("viewMovie/{id}", "ViewMovieController@index")->name('viewMovie');
Route::get("search", "SearchController@index")->name('search');

Route::get("category/{categoryURL}", "SearchController@category")->name('category');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
