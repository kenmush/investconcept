<?php

namespace App\Http\Controllers;

use App\Services\Investor;

class WelcomePageController extends Controller
{
    public function __invoke()
    {
        return view('index', [
                'assets'          => (new Investor())->getAssetCategories(),
                'landingPageData' => collect((new Investor())->getLandingPageData())
        ]);
    }
}