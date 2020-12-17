<?php

namespace App\Http\Controllers;

use App\Services\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChangePasswordController extends Controller
{
    public function __invoke(Request $request)
    {

        return view('auth.resetpassword');
    }
}