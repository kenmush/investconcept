<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class ChangePasswordController extends Controller
{
    public function __invoke()
    {
        return view('auth.resetpassword');
    }
}