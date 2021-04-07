<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class VerifyInvestor extends Controller
{
    public function __invoke()
    {
        return view('auth.verifyinvestor');
    }
}
