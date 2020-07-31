<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('motorbike','motorbike');

Route::view('smartmeter','smartmeter');

Route::view('raw-water-atm','rawwateratm');

Route::view('myassets','myassets');

Route::view('userprofile','userprofile');

Route::view('signin','login');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
