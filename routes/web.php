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
Route::group(['middleware' => 'auth'],function(){
    Route::resources([
        'producttype' => 'ProductTypeController',
        'product' => 'ProductController',
        'category' => 'CategoryController',
        'company' => 'CompanyController',
        'businesstype' => 'BusinessTypeController',
        'client' => 'ClientController',
        'companyfactory' => 'CompanyFactory',
    ]);
});

/*
Route::post('/login/custom','UserController@home')->name('login.custom');
*/