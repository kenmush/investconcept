<?php

namespace App\Http\Controllers;

class WaterAtms extends Controller
{
    public function __invoke()
    {
        return view('wateratms');
    }
}