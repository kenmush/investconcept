<?php

use App\Asset;
use App\Events\UploadInvestorDocuments;
use App\Http\Controllers\AllassetController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\MotoTaxisController;
use App\Http\Controllers\QuestinnareController;
use App\Services\Investor;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Route;


Route::get('/', 'WelcomePageController');

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

Route::get('update-your-password', 'ChangePasswordController')
        ->name('changepassword');

Route::get('investor-verification', 'VerifyInvestor')
        ->name('verifyinvestor');

Route::post('resetpassword', 'ResetPassword')->name('resetpassword');

Route::post('updateverification', 'Verification')->name('updateverification');

Auth::routes();

Route::get('moto-taxis', 'MotoTaxisController');
Route::get('water-atms', 'WaterAtms');
Route::get('irrigation-pumps', 'IrrigationPumps');
Route::get('questionnaire', 'QuestinnareController')->name('questionarre');
Route::post('questionnaire', 'UploadQuestionaire')->name('uploadquestionaire');

Route::post('registeraninvestor', function (\Illuminate\Http\Request $request) {
    try {
        $investor = (new Investor())->registerInvestor([
                'phoneNumber'  => 'NA',
                'firstName'    => $request->firstname,
                'middleName'   => "",
                'lastName'     => $request->lastname,
                'username'     => $request->firstname,
                'language'     => "English",
                'email'        => $request->investoremail,
                'organization' => 'NA',
                'password'     => $request->investorpassword,
                'avatar'       => $request->passport,

        ]);

        if ($request->hasFile('passport')) {
            $document = $request->file('passport')->store('documents', 'public');
        }
        if ($request->hasFile('passport')) {
            $w9Form = $request->file('w9form')->store('w9s', 'public');
        }
        UploadInvestorDocuments::dispatch($investor, $request->except('passport', 'w9form'), $document, $w9Form);

    } catch (ClientException $e) {
        $response = $e->getResponse();
        $responseBodyAsString = $response->getBody()->getContents();
        $errors = collect(json_decode($responseBodyAsString));
        $validator = \Validator::make($request->all(), [
                "firstname"   => 'required',
                "secondname"  => 'required',
                "lastname"    => 'required',
                "phonenumber" => 'required',
                "username"    => 'required',
                "email"       => 'required',
                "language"    => 'required',
                "password"    => 'required',
        ]);
        foreach ($errors as $key => $error) {
            $validator->errors()->add($key, $error[0] ?? '');
        }
    }

})->name('registeraninvestor');

Route::get('successfully/unsubscribed', function () {
    return redirect('/');
});
