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

Route::get('/product', 'ProductController@index')->name('Product.index');
Route::post('/product','ProductController@store')->name('Product.store');


Route::get('/type', 'ProductTypeController@index')->name('ProductType.index');
Route::post('/type','ProductTypeController@store')->name('ProductType.store');

Route::get('/category', 'CategoryController@index')->name('Category.index');
Route::post('/category','CategoryController@store')->name('Category.store');
/*
Route::post('/login/custom','UserController@home')->name('login.custom');
*/