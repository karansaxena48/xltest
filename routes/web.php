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

Route::resource('/details', 'DetailsController');
Route::get('/countries', 'CountriesController@index')->name('countries');
Route::get('/states', 'StatesController@index')->name('states');
Route::get('/cities', 'CitiesController@index')->name('cities');

