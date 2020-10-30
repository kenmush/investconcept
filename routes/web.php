<?php

use App\Asset;
use App\Http\Controllers\AllassetController;
use App\Services\Investor;
use Illuminate\Support\Facades\Route;


Route::get('test/{investmentid}', function ($investmentId) {
 return   (new Investor())->getCategoryInvestments($investmentId);
});


Route::get('/', function () {
    $assets = (new Investor())->getAssetCategories();
    $landingPageData = collect((new Investor())->getLandingPageData())->first();
//    $landingPageData = [];
    return view('index', compact('assets','landingPageData'));
});

Route::group(['prefix' => 'assets', 'middleware' => ['auth']], function () {

    Route::resource('portfolio', 'PortfolioController');

    Route::resource('motorbike', 'MotorbikeController');

    Route::resource('smartmeter', 'SmartMeterController');

    Route::resource('raw-water-atm', 'RawWateratmController');

    Route::resource('mobile-irrigation', 'MobileIrrigationController');

    Route::resource('user-profile', 'UserController');

    Route::resource('myassets', 'AssetsController');


    Route::get('/dash', function () {
        $assets = Asset::all();
        return view('dash', compact('assets'));
    });
});

Route::group(['prefix' => 'administrate', 'middleware' => ['auth']], function () {

    Route::resource('herosection', 'LandingpageController');
    Route::get('/manageasset/{id?}/{investor?}',[AllassetController::class,'showforUse']);
    Route::resource('investors', 'Investors');
    Route::resource('investors', 'Investors');

    Route::resource('manageassets', 'AllassetController');
    Route::resource('beneficiary', 'BeneficiaryController');

});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contactus', function () {

    return view('contactus');

})->name('contactus');

//Auth::routes(['verify' => true]);
Auth::routes();
