<?php

namespace App\Http\Controllers;

use App\Services\Investor;
use function redirect;

class WelcomePageController extends Controller
{
    public function __invoke()
    {
        return redirect()->to('register');
    }
}
