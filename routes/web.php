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

Route::get('/', function () {
    return view('welcome');
});



use Illuminate\Support\Facades\DB;
Route::get('test', function (){
   return DB::connection('sqlite')->table('facebook_users')->find(1)->email;
});

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/

Route::get('/test', function (){

   return DB::connection('sqlite')->table('facebook_users')->find(1);
});

Route::get('phpinfo', function (){
    return phpinfo();

});
