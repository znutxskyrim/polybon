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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'ProductController@home')->name('Product.home');
Route::post('/test','ProductController@create')->name('Product.create');
/*
Route::post('/login/custom','UserController@home')->name('login.custom');
*/