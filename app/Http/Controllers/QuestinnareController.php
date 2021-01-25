<?php

namespace App\Http\Controllers;

use PragmaRX\Countries\Package\Countries;

class QuestinnareController extends Controller
{
    public function __invoke()
    {
        $countries = new Countries();

        return view('auth.questionarre', [
                'coutries' => $countries->all(),
        ]);
    }
}
