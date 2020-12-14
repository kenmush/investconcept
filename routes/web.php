<?php

use App\Asset;
use App\Http\Controllers\AllassetController;
use App\Http\Controllers\ChangePasswordController;
use App\Services\Investor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $assets = (new Investor())->getAssetCategories();
    $landingPageData = collect((new Investor())->getLandingPageData());
    return view('index', compact('assets', 'landingPageData'));
});

Route::group(['prefix' => 'assets', 'middleware' => ['auth', 'changepassword']], function () {

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
    Route::get('/manageasset/{id?}/{investor?}', [AllassetController::class, 'showforUse']);
    Route::resource('investors', 'Investors');
    Route::resource('investors', 'Investors');

    Route::resource('manageassets', 'AllassetController');
    Route::resource('beneficiary', 'BeneficiaryController');

});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contactus', function () {

    return view('contactus');

})->name('contactus');

Route::get('update-your-password', 'ChangePasswordController')->name('changepassword');
Route::post('resetpassword', 'ResetPassword')->name('resetpassword');
Auth::routes();
