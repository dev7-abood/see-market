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

Route::group(['as' => 'dashboard.', 'middleware' => 'auth'], function (){
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);

    Route::group(['as' => 'product.', 'prefix' => 'product'], function (){
        Route::get('/', ['as' => 'index', 'uses' => 'ProductController@index']);
        Route::get('/create', ['as' => 'create', 'uses' => 'ProductController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'ProductController@store']);
    });

});
