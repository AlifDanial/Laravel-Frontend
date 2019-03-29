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


Route::get('/index', 'ThreadsController@index');

Route::get('/', 'ThreadsController@index');

Route::get('/profile', 'ProfileController@index');

Route::get('register', 'CustomAuthController@showRegisterForm')->name('custom.register');
Route::post('register', 'CustomAuthController@register');

Route::get('login', 'CustomAuthController@showLoginForm')->name('custom.login');
Route::post('login', 'CustomAuthController@login');

Route::post('logout', 'CustomAuthController@logout');



// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/register', function () {
//     return view('auth.register');
// });

Route::get('/crops', function () {
    return view('crops.index');
})->middleware('auth');;

Route::get('/index/create', function () {
    return view('threads.create');
})->middleware('auth');;

Route::get('/editprofile', function () {
    return view('profile.editprofile');
})->middleware('auth');;

Route::resource('threads','ThreadsController');


Route::get('/crop', 'PagesController@showCrops');

Route::get('/crops/{id}', 'PagesController@showCropsData');

Route::any('/search', 'SearchController@search');

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/search/crops', 'SearchController@searchCrops');

