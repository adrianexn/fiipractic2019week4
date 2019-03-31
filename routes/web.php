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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostController@index');
Route::get('/post/{id}', 'PostController@show');
Route::get('/user/{id}', 'UserController@show');
Route::get('/products', 'ProductController@index');
Route::get('/cart/add/{id}', 'CartController@addProduct');
Route::get('/cart/remove/{key}', 'CartController@removeProduct');
Route::get('/cart/empty', 'CartController@empty');
