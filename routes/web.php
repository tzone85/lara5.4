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

Route::get('/', 'PagesController@welcome');

Route::get('about', 'PagesController@about');

Route::get('songs', 'SongsController@index');
Route::get('songs', 'SongsController@edit');
Route::resource('songs', 'SongsController');