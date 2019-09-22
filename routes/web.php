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



Route::post('/','HomeController@login')->name('login');
Route::get('/logout','HomeController@logout')->name('logout');


Route::get('/dashboard', 'HomeController@showdashboard');

Route::get('/profiledetails','HomeController@profileDetails');

Route::get('/sendreport','HomeController@sendReport');

Route::get('/viewreport','HomeController@viewReport');

Route::get('/rate','HomeController@rate');

Route::get('/viewrate','HomeController@viewrate');

Route::get('/alert','HomeController@alert');
Route::get('/contact','HomeController@contact');
