<?php

use App\Services\Investor;
use Illuminate\Support\Facades\Route;

Route::get('allAssets', function () {
    return (new Investor())->getAllAssets();
});

Route::get('getAllAssets/{categoryId?}/{investorid?}', function ($categoryId = 1, $investorid = 1) {
    $response = (new Investor())->assetsByInvestment($categoryId, $investorid)['assets'];

    return collect($response);
//    return collect($response)->where('category', $categoryId);
});
Route::get('getAllAssets/{categoryId?}/{investorid?}', function ($categoryId = 1, $investorid = null) {
    $response = (new Investor())->assetsByInvestment($categoryId, $investorid)['assets'];

    return collect($response);
//    return collect($response)->where('category', $categoryId);
});
Route::get('userAssets/{userId}', function ($userId) {
    $response = (new Investor())->getUserAssets($userId);

    return collect($response);
});

Route::get('getCoordinates', function () {
    $coordinates = (new Investor())->getassetCoordinates();

    return $coordinates;
});
Route::get('invest', function () {
    return 'new server';
});
