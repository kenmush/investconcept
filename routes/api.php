<?php

use App\Services\Investor;
use Illuminate\Support\Facades\Route;

Route::get('getAllAssets/{categoryId?}/{investorid}', function ($categoryId = 1,$investorid) {
    $response = (new Investor())->assetsByInvestment($categoryId,$investorid)['assets'];
    return collect($response);
//    return collect($response)->where('category', $categoryId);
});
Route::get('userAssets/{userId}', function ($userId) {
    $response = (new Investor())->getUserAssets($userId);
    return collect($response);
});
