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
    return view('index');
});


Route::get('/elements', 'HomeController@elements')->name('elements');
Route::get('/freetest', 'HomeController@freetest')->name('freetest');
Route::post('/clients/create', 'HomeController@store')->name('store');
Route::get('/error', 'HomeController@error')->name('error');
// ->middleware('auth');
Route::get('/run','HomeController@runscript')->name('run');
Route::get('/checking','HomeController@checking')->name('checking');
Route::post('/checkemail','HomeController@checkemail')->name('checkemail');
