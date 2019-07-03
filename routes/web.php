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

Route::get('/' , 'AlbumsController@index');
Route::get('/albums/create', 'AlbumsController@create');
Route::get('/albums/{id}', 'AlbumsController@show');
Route::get('/photos/create/{id}', 'PhotosController@create');
Route::get('/photos/{id}', 'PhotosController@show');
Route::post('/albums/submit', 'AlbumsController@store');
Route::post('/photos/submit', 'PhotosController@store');
Route::delete('/photos/{id}', 'PhotosController@destroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
