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
    return view('auth.login');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/logout', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('threads.index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/profile', function () {
    return view('welcome');
});

Route::resource('threads','ThreadsController');

Route::get('/crops', 'PagesController@showCrops');

Route::get('/crops/{id}', 'PagesController@showCropsData');

Route::any('/search', 'SearchController@searchCrops');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
