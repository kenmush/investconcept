<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('motorbike','motorbike');

Route::view('myassets','myassets');

Route::view('signin','login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
