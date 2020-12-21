<?php

namespace App\Http\Controllers;

class IrrigationPumps extends Controller
{
    public function __invoke()
    {
        return view('irrigation');
    }
}