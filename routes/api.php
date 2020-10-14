<?php

use App\Services\Investor;
use Illuminate\Support\Facades\Route;

Route::get('getAllAssets/{categoryId?}', function ($categoryId = 1) {
    $response = (new Investor())->getAssetsbyCategory();
    return collect($response);
//    return collect($response)->where('category', $categoryId);
});
Route::get('userAssets/{userId}', function ($userId) {
    $response = (new Investor())->getUserAssets($userId);
    return collect($response);
});
