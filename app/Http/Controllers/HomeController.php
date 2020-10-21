<?php

namespace App\Http\Controllers;

use App\Services\Investor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $assets = (new Investor())->getAssetCategories();
        return view('portfolio', [
                'assets' => collect($assets)->toArray()
        ]);
    }
}
