<?php

use App\Asset;
use App\Services\Investor;
use Illuminate\Support\Facades\Route;

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/', function () {
    $assets = (new Investor())->getAssetCategories();
    return view('index',compact('assets'));
});
Route::get('/ken', function () {
    $assets = (new Investor())->getAssetCategories();
    return view('landingpage',
            [
                    'assets' => collect($assets)->toArray()
            ]
    );

});
Route::get('/contactus', function () {

    return view('contactus');

})->name('contactus');

Route::group(['prefix' => 'assets', 'middleware' => 'auth'], function () {

    Route::resource('motorbike', 'MotorbikeController');

    Route::resource('smartmeter', 'SmartMeterController');

    Route::resource('raw-water-atm', 'RawWateratmController');

    Route::resource('mobile-irrigation', 'MobileIrrigationController');

    Route::resource('user-profile', 'UserController');

    Route::resource('myassets', 'AssetsController');

    Route::resource('portfolio', 'PortfolioController');

    Route::get('/dash', function () {
//        $user = urlencode(request()->user()->name);
//        $image = Http::get("https://ui-avatars.com/api/?name={$user}&color=000000&background=FF8377&rounded=true");
//        $Ima
        $assets = Asset::all();
        return view('dash',compact('assets'));
    });
});

Route::view('signin', 'login');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
