<?php

use GuzzleHttp\Middleware;
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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('lang/{lang}', 'LangController@changeLanguage')->name('lang');
Route::group(['prefix' => 'admin', 'namespace'=>'Admin', 'middleware'=>'admin'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('tags', 'TagController');
    Route::resource('categories', 'CategoryController');
    Route::resource('posts', 'PostController');
});

