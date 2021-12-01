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
Route::post('/shop/load-product','ShopController@load_product');
//Category, ProductDetail
Route::get('/category/{slug}','ShopController@category');
Route::get('/products/{slug}','ProductDetailController@index');
Route::post('/load-comment','ProductDetailController@load_comment');
Route::post('/send-comment','ProductDetailController@send_comment');
Route::post('/quantity','ProductDetailController@quantity');
Route::post('/price','ProductDetailController@price');


// ---------------------------Blog----------------------------------
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{category}/{slug}', 'BlogController@viewBySlug');
Route::get('/blog/{category}', 'BlogController@viewByCategory');

// ---------------------------About----------------------------------
Route::get('/about-us', 'AboutController@index');

// ---------------------------Cart----------------------------------
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/cart/add-cart/{slug}/{variantId}/{quantity}', 'CartController@AddCart');
Route::get('/cart/delete-item-cart/{slug}/{variantId}', 'CartController@DeleteItemCart');
Route::get('/cart/delete-item-list-cart/{slug}/{variantId}', 'CartController@DeleteItemListCart');
Route::get('/cart/save-item-list-cart/{slug}/{variantId}/{quantity}', 'CartController@SaveItemListCart');
Route::post('/cart/save-all-list-cart', 'CartController@SaveAllListCart');
Route::post('/cart/delete-all-list-cart', 'CartController@DeleteAllListCart');
Route::get('/cart/check-quantity/{slug}/{variantId}/{quantity}/{check}', 'CartController@CheckQuantity');

// ---------------------------Checkout----------------------------------
Route::get('/checkout', 'CheckoutController@index')->name('cart.checkout')->middleware('isLogged');
Route::post('/checkout', 'CheckoutController@checkoutSubmit')->name('checkout.submit');
Route::get('/get_shipfee/{ShipOptionId}', 'SessionController@getshipfee');
Route::post('/set_session', 'SessionController@createsession');
Route::get('/allsession', 'SessionController@getsession');
Route::get('/order-success', 'CheckoutController@ordersuccessful');

//--------------------------search----------------------------
Route::get('/search{keyword?}', 'SearchController@action')->name('search');

// API routes
Route::prefix('api')->group(function () {
    Route::post('comment/{id}/insert', 'BlogController@insertComment')->name('api.comment.insert');
    Route::post('post/delete', 'admin\BlogController@delete')->name('api.post.delete');
    Route::post('/upload/image', 'admin\BlogController@uploadImage');
    Route::post('/post/new-post', 'admin\BlogController@newPost');
    Route::post('/post/{id}/edit', 'admin\BlogController@postUpdate');
    Route::post('/post/category/add', 'admin\BlogController@addNew');
    Route::post('/post/category/delete', 'admin\BlogController@deleteCategory');
    Route::post('/post/category/{id}/edit', 'admin\BlogController@categoryUpdate');
    Route::post('/post/comment/{id}/active', 'admin\BlogController@commentActive');
    Route::post('/post/comment/{id}/unactive', 'admin\BlogController@commentUnactive');
    Route::post('/post/comment/{id}/delete', 'admin\BlogController@commentDelete');

});
//----------------------- login google -------------------------------
Route::get('/buyer/login/google/redirect', 'SocialController@googleRedirect')->name('login.google');
Route::get('/buyer/login/google/back', 'SocialController@googleBack');
//----------------------- login facebook -------------------------------
Route::get('/buyer/login/facebook/redirect','App\Http\Controllers\Socialite\LoginController@redirectToProvider')->name('login.facebook');
Route::get('/buyer/login/facebook/back','App\Http\Controllers\Socialite\LoginController@handleProviderCallback');
Route::get('/buyer/login/facebook/redirect', 'SocialController@facebookRedirect')->name('facebook.google');
Route::get('/buyer/login/facebook/back', 'SocialController@facebookBack');
//------------admin Product-----------------------
Route::get('/admin','admin\AdminController@index')->middleware('admin');
Route::get('/admin/administrator','admin\AdministratorController@index')->name('admin.administrator');
Route::get('/admin/addAdministrator','admin\AdministratorController@add')->name('admin.addAdministrator');
Route::get('/admin/updateAdministrator/{id}','admin\AdministratorController@update')->name('admin.updateAdministrator');
Route::get('/admin/deleteAdministrator/{id}','admin\AdministratorController@delete')->name('admin.updateAdministrator');

Route::post('/admin/post/addAdministrator','admin\AdministratorController@postAdd')->name('admin.Administrator.add');
Route::post('/admin/post/updateAdministrator','admin\AdministratorController@postUpdate')->name('admin.Administrator.update');
//-----------------------comment admin -------------------------------
Route::get('/admin/comment/{slug}','admin\CommentController@index')->name('comment');
Route::get('/admin/listComment','admin\CommentController@list')->name('comment.list');
Route::get('/admin/deleteComment/{id}','admin\CommentController@deleteComment')->name('comment.delete');
//-----------------------Analytics admin -------------------------------
Route::get('/analytics/products','admin\AnalyticsController@product');
Route::get('/admin','admin\DashboardController@index')->name('dashboard.index');

Route::get('/admin/product','admin\AdminProductController@index')->name('admin.product')->middleware('role:Warehouse','check_view_permissions');
Route::get('/admin/product/add-product','admin\AdminProductController@add')->name('add-product')->middleware('role:Warehouse','check_create_permissions');
Route::post('/admin/product/add-product','admin\AdminProductController@create');
Route::get('/admin/product/delete-product/{id}','admin\AdminProductController@delete_product')->middleware('role:Warehouse','check_delete_permissions');

Route::get('/admin/product/add-category','admin\AdminProductController@add_category')->name('add-category')->middleware('role:Warehouse','check_create_permissions');
Route::post('/admin/product/add-category','admin\AdminProductController@create_category')->middleware('role:Warehouse','check_create_permissions');
Route::get('/admin/product/edit-category/{slug}','admin\AdminProductController@edit_category')->name('edit.category')->middleware('role:Warehouse','check_edit_permissions');
Route::post('/admin/product/edit-category/{slug}','admin\AdminProductController@createedit_category')->middleware('role:Warehouse','check_edit_permissions');
Route::get('/admin/product/delete-category/{slug}','admin\AdminProductController@delete_category')->middleware('role:Warehouse','check_delete_permissions');

Route::post('/admin/product/add-variant','admin\AdminProductController@create_variant')->name('add-variant')->middleware('role:Warehouse','check_create_permissions');
Route::post('/admin/product/edit-variant','admin\AdminProductController@edit_variant')->name('edit-variant')->middleware('role:Warehouse','check_edit_permissions');
Route::get('/admin/product/delete-variant/{id}','admin\AdminProductController@delete_variant')->middleware('role:Warehouse','check_delete_permissions');

Route::get('admin/product/edit-product/{slug}','admin\AdminProductController@edit')->name('admin.edit')->middleware('role:Warehouse','check_edit_permissions');
Route::post('admin/product/edit-product/{slug}','admin\AdminProductController@createedit')->middleware('role:Warehouse','check_edit_permissions');
Route::post('/delete-img','admin\AdminProductController@deleteimg');
Route::post('/load-img','admin\AdminProductController@load_img');

Route::get('/admin/category',function(){
    return view('admin/product/adminCategory');
})->name('admin.category')->middleware('role:Warehouse','check_view_permissions');


Route::get('admin/blog', 'admin\BlogController@index');
Route::get('admin/blog/new', 'admin\BlogController@new');
Route::get('admin/blog/{id}/edit','admin\BlogController@editView');
Route::get('admin/blog/category','admin\BlogController@categoryView');
Route::get('admin/blog/category/{id}/edit','admin\BlogController@categoryEditView');
Route::get('admin/blog/{id}/commentList', 'admin\BlogController@categoryCommentList');
Route::get('admin/blog/comments', 'admin\BlogController@commentsView');
