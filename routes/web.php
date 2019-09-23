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
})->name('welcome');



Route::post('/','HomeController@login')->name('login');
Route::post('/logout','HomeController@logout')->name('logout');


Route::get('/dashboard', 'HomeController@showdashboard');
Route::get('/adb', 'HomeController@showadbdashboard');
Route::get('/delete','HomeController@deleteuser');
Route::get('/deleteUser/{user}','HomeController@deleteAUser');

Route::get('/profiledetails','HomeController@profileDetails');

Route::get('/sendreport','HomeController@sendReport');
Route::post('/sendreport','HomeController@sendReportWithFile');


Route::get('/viewreport','HomeController@viewReport');

Route::get('/rate','HomeController@rate');

Route::get('/viewrate','HomeController@viewrate');

Route::get('/alert','HomeController@alert');
Route::get('/contact','HomeController@contact');

Route::get('/register','HomeController@register');
Route::post('/register','HomeController@doRegister')->name('register');

Route::post('/review/{uid}','HomeController@addReview')->name('review');