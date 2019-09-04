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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'SearchController@index')->name('search');
Route::post('/search', 'SearchController@index')->name('searchReport');

Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('drone-users','DroneUserController')->name('DroneUsers','drone-users');
});
