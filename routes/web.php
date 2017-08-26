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

Route::get('about', function () {
    $thandodev = ['This', 'is', 'thandodev', 'world'];

    //return view('about', ['thandodev' => $thandodev]);
    //return view('about')->with(['thandodev'=>$thandodev]);
    //return view('about')->withThandodev($thandodev);
    return view('about',compact($thandodev));
});