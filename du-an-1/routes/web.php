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

Route::get('/','HomeController@index')->name('home');

// -----------------------------log in  ------------------------------
Route::get('/buyer/login', 'BuyerController@login')->name('buyer.login')->middleware('AlreadyLogIn');
Route::post('/buyer/login', 'BuyerController@check')->name('buyer.check')->middleware('AlreadyLogIn');

//-----------------------------register-------------------------------
Route::get('/buyer/register', 'BuyerController@register')->name('buyer.register')->middleware('AlreadyLogIn');
Route::post('/buyer/insertUser', 'BuyerController@insertUser')->name('buyer.insertUser')->middleware('AlreadyLogIn');

// ---------------------------logout----------------------------------
Route::get('/buyer/logout', 'BuyerController@logout')->name('buyer.logout');

// -------------------------forgot password --------------------------
Route::get('/buyer/forgot', 'BuyerController@forgot')->name('buyer.forgot')->middleware('AlreadyLogIn');
Route::post('/buyer/postEmail', 'BuyerController@postEmail')->name('buyer.postEmail')->middleware('AlreadyLogIn');

// -------------------------reset password --------------------------
Route::get('/buyer/reset/{token}/{email}', 'BuyerController@reset')->name('buyer.reset')->middleware('AlreadyLogIn');
Route::post('/buyer/reset', 'BuyerController@resetToken')->name('buyer.resetToken')->middleware('AlreadyLogIn');

// --------------------------profile---------------------------------
Route::get('/profile/{page?}', 'Profile@index')->name('buyer.profile')->middleware('isLogged');
Route::get('/profile', 'Profile@index')->name('buyer.profile')->middleware('isLogged');
Route::post('/profile/update', 'Profile@update')->name('buyer.update')->middleware('isLogged');
Route::post('/profile/change', 'Profile@changePassword')->name('buyer.change')->middleware('isLogged');


// Home
Route::get('/','HomeController@index')->name('home');

// Shop
// --------------------------shop---------------------------------
Route::get('/shop','ShopController@index');

//Category, ProductDetail
Route::get('/category/{slug}','ShopController@category');
Route::get('/products/{slug}','ProductDetailController@index');
Route::post('/load-comment','ProductDetailController@load_comment');
Route::post('/send-comment','ProductDetailController@send_comment');


// ---------------------------Blog----------------------------------
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{category}/{slug}', 'BlogController@viewBySlug');
Route::get('/blog/{category}', 'BlogController@viewByCategory');

// ---------------------------About----------------------------------
Route::get('/about-us', 'AboutController@index');

// ---------------------------Cart----------------------------------
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/add-cart/{slug}', 'CartController@AddCart');
Route::get('/delete-item-cart/{slug}', 'CartController@DeleteItemCart');
Route::get('/delete-item-list-cart/{slug}', 'CartController@DeleteItemListCart');
Route::get('/delete-all-cart', 'CartController@DeleteAllCart');
Route::get('/save-item-list-cart/{slug}/{quantity}', 'CartController@SaveItemListCart');

Route::get('/checkout', 'CheckoutController@index')->name('cart.checkout')->middleware('isLogged');


//--------------------------search----------------------------
Route::get('/search{keyword?}', 'SearchController@action')->name('search');

// API routes
Route::prefix('api')->group(function () {
    Route::post('comment/{id}/insert', 'BlogController@insertComment')->name('api.comment.insert');
});