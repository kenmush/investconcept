<?php

namespace App\Http\Controllers;

class MotoTaxisController extends Controller
{
    public function __invoke()
    {
        return view('mototaxis');
    }
}