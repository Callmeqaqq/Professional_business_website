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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@index');
Route::get('/wellcome', function () {
    return view('welcome');
});
Route::get('/','HomeController@index');


// Blog Route
Route::get('/blog', 'BlogController@index');
Route::get('/post/{slug}', 'BlogController@viewBySlug');
Route::get('/blog/{category}', 'BlogController@showAllCategory');


// About Route
Route::get('/about-us', 'AboutController@index');