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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/items', 'ItemController@index');
Route::get('/items/create', 'ItemController@create');
Route::get('/items/store', 'ItemController@store');
Route::get('/items/{id}/edit', 'ItemController@edit');
Route::get('/items/{id}/update', 'ItemController@update');
Route::get('/items/{id}/destroy', 'ItemController@destroy');

Route::get('/data', 'DataController@index');
Route::get('/data/{id}/bayar', 'DataController@edit');
Route::get('/data/{id}/update', 'DataController@update');
