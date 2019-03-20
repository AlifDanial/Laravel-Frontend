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

Route::get('/crops', function () {
    return view('crops.index');
});

Route::get('/index/create', function () {
    return view('threads.create');
});

Route::resource('threads','ThreadsController');


Route::get('/crop', 'PagesController@showCrops');

Route::get('/crops/{id}', 'PagesController@showCropsData');   //uncomment for real one


Route::any('/search', 'SearchController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/search/crops', 'SearchController@searchCrops');

