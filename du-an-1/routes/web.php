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
// -----------------------------log in  ------------------------------
Route::get('/buyer/login', 'BuyerController@login')->name('buyer.login')->middleware('AlreadyLogIn');
Route::post('/buyer/login', 'BuyerController@check')->name('buyer.check')->middleware('AlreadyLogIn');
//-----------------------------register-------------------------------
Route::get('/buyer/register', 'BuyerController@register')->name('buyer.register')->middleware('AlreadyLogIn');
Route::post('/buyer/register', 'BuyerController@insertUser')->name('buyer.insertUser')->middleware('AlreadyLogIn');
// ---------------------------logout----------------------------------
Route::get('/buyer/logout', 'BuyerController@logout')->name('buyer.logout');
// -------------------------forgot password --------------------------
Route::get('/buyer/forgot', 'BuyerController@forgot')->name('buyer.forgot')->middleware('AlreadyLogIn');
Route::post('/buyer/forgot', 'BuyerController@postEmail')->name('buyer.postEmail')->middleware('AlreadyLogIn');
// -------------------------reset password --------------------------
Route::get('/buyer/reset/{token}/{email}', 'BuyerController@reset')->name('buyer.reset')->middleware('AlreadyLogIn');
Route::post('/buyer/reset', 'BuyerController@resetToken')->name('buyer.resetToken')->middleware('AlreadyLogIn');

Route::get('/profile', 'BuyerController@profile')->middleware('isLogged');

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/','HomeController@index')->name('home');

