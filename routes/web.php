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

// Route::get('home','CurdController@index');
Route::get('list','CurdController@index');
Route::get('registration','CurdController@create');
Route::post('submit','CurdController@store');
Route::get('delete/{id}','CurdController@destroy');
Route::get('edit/{id}','CurdController@edit');
Route::post('edit/update/{id}','CurdController@update')->name('edit_update');

