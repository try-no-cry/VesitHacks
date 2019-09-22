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
    return view('welcome');
});

Route::get('/register', function () {
      
    return view('register') ;
});

Route::get('/dashboard', 'HomeController@showdashboard');

Route::get('/profile','HomeController@profileDetails');

Route::get('/sendreport','HomeController@sendReport');

Route::get('/viewreport','HomeController@viewReport');

Route::get('/rate','HomeController@rate');

Route::get('/viewrate','HomeController@viewrate');

Route::get('/alert','HomeController@alert');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact','HomeController@contact');
