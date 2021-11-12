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

Route::get('/shop','ShopController@index');

<<<<<<< HEAD
=======
Route::get('/shop','ShopController@index');

>>>>>>> parent of e5893c3 (Revert "marge khai")
Route::get('/{slug}','ProductDetailController@index');
Route::get('/shop/{slug}','ProductDetailController@index');
// Shop
