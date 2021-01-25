<?php

namespace App\Http\Controllers;

class VerifyInvestor extends Controller
{
    public function __invoke()
    {
        return view('auth.verifyinvestor');
    }
}
