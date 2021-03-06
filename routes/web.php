<?php

use App\Asset;
use App\Services\Investor;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'WelcomePageController')
        ->middleware('cache.headers:public;max_age=43200;etag');

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
    Route::get('/manageasset/{id?}/{investor?}', 'AllassetController@showforUse');
    Route::resource('investors', 'Investors');
    Route::resource('investors', 'Investors');

    Route::resource('manageassets', 'AllassetController');
    Route::resource('beneficiary', 'BeneficiaryController');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('update-your-password', 'ChangePasswordController')
        ->name('changepassword');

Route::get('investor-verification', 'VerifyInvestor')
        ->name('verifyinvestor');

Route::post('resetpassword', 'ResetPassword')->name('resetpassword');

Route::post('updateverification', 'Verification')->name('updateverification');

Auth::routes();

Route::get('moto-taxis', 'MotoTaxisController')->middleware('cache.headers:public;max_age=43200;etag');
Route::get('water-atms', 'WaterAtms');
Route::get('irrigation-pumps', 'IrrigationPumps');
Route::get('questionnaire',
        'QuestinnareController')->name('questionarre')->middleware('cache.headers:public;max_age=43200;etag');
Route::post('questionnaire', 'UploadQuestionaire')->name('uploadquestionaire');

Route::post('registeraninvestor', 'RegisterInvestorController')->name('registeraninvestor');

Route::get('successfully/unsubscribed', function () {
    return redirect('/');
});

Route::get('engage', function () {
    return view('engage');
})->middleware('cache.headers:public;max_age=43200;etag');

Route::get('terms', function () {
    return view('terms');
})->middleware('cache.headers:public;max_age=43200;etag');

Route::get('landing', function () {
    return view('tailwind');
})->middleware('cache.headers:public;max_age=43200;etag');

Route::post('passwordreset', function (\Illuminate\Http\Request $request) {
    try {
        $response = (new Investor())->resetPassword($request->email);
        return back()->with([
                'data' => $response['detail']
        ]);
    } catch (Exception $exception) {
        return back()->with([
                'data' => "We couldn't reset your password. Kindly check if your email is correct."
        ]);
    }

})->name('reset.password');
