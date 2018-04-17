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

Route::get('/', 'ParticipantController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('participant', 'ParticipantController');

Route::get('department', 'DepartmentController@index');
Route::get('city/{depart}', 'CityController@bydepart');

Route::resource('excel','ExcelController');