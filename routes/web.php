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
use TCG\Voyager\Facades\Voyager;

//Route::get('/', 'SearchController@index')->name('search');
//Route::post('/search', 'SearchController@index')->name('searchReport');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
