<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "PageController@home");
Route::get('/about', "PageController@about");
Route::get('/teachers', "PageController@teachers");
Route::get('/pricing', "PageController@pricing");
Route::get('/contact', "PageController@contact");
Route::get('/blog', "PostController@index");
Route::get("post/show/{id}", 'PostController@show')->name('post.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
