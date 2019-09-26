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

//Index Routes
Route::get('/', 'HomeController@index');
Route::get('/index', 'HomeController@index1');
Route::get('/getProducts','HomeController@getProducts');
Route::get('/product-detail/{id}','HomeController@productDetail');
//Route::get('/search-view-profile/{id}','SearchController@profileData');

//Dashboard Routes
Route::get('/user-dashboard', 'HomeController@userDashboard');
Route::get('/vendor-dashboard', 'HomeController@vendorDashboard');

//Register Routes
Route::get('/register-from', 'RegisterController@registerForm');
Route::post('register', 'RegisterController@registerUser');

//Login Routes
Route::get('/login-form', 'LoginController@loginForm');
Route::post('/login', 'LoginController@login');

//Logout route
Route::get('/logout', 'LoginController@destroy');

//Comapany Routes
Route::get('/company/create','CompanyController@create');
Route::post('/store-company','CompanyController@store');
Route::get('/company/show','CompanyController@show');
Route::get('/edit-company/{id}','CompanyController@edit');
Route::post('/update-company/{id}','CompanyController@update');
Route::get('/delete-company/{id}','CompanyController@destroy');

//Products Routes
Route::get('/product/create', 'ProductController@create');
Route::post('/store-product','ProductController@store');
Route::get('/product/show','ProductController@show');
Route::get('/edit-product/{id}','ProductController@edit');
Route::post('/update-product/{id}','ProductController@update');
Route::get('/delete-product/{id}','ProductController@destroy');

//Product Detail Routes
Route::get('/detail/create', 'DetailController@create');
Route::post('/store-detail','DetailController@store');
Route::get('/detail/show','DetailController@show');
Route::get('/edit-detail/{id}','DetailController@edit');
Route::post('/update-detail/{id}','DetailController@update');
Route::get('delete-detail/{id}','DetailController@destroy');

/****************Ajax Request Route********************************/
Route::get('/get-products/{id}','DetailController@getProducts');

