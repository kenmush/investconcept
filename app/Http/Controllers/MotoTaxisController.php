<?php

namespace App\Http\Controllers;

use App\Services\Investor;
use Illuminate\Support\Str;

class MotoTaxisController extends Controller
{
    public function __invoke()
    {
        $assets = collect((new Investor())->getAssetbyId(3));

        if (Str::contains($assets['categoryName'], 'MvuaPap! Irrigation Trailer')) {
            $assets['category'] = 'Irrigation pumps';
        }

        if (Str::contains($assets['categoryName'], 'bike')) {
            $assets['category'] = 'Moto Taxis';
        }

        if (Str::contains($assets['categoryName'], 'ATM')) {
            $assets['category'] = 'ATMs';
        }
        $benefiaries = collect((new Investor())->getBeneficiary());
        $allBeneficiaries = $benefiaries->map(function ($benefiaries) {
            if ($benefiaries['firstName'] === 'MvuaPap!') {
                $benefiaries['founded'] = '2019';
                $benefiaries['Assets managed'] = 1;
                $benefiaries['Planned Q1 2021'] = 5;
                $benefiaries['Mission'] =
                        "To make high quality drinking water available on demand at scale to the Kenyan urban middle class";
            }
            if ($benefiaries['firstName'] === 'OVIVE purified') {
                $benefiaries['founded'] = '2019';
                $benefiaries['Assets managed'] = 1;
                $benefiaries['Planned Q1 2021'] = 5;
                $benefiaries['Mission'] =
                        "To make high quality drinking water available on demand at scale to the Kenyan urban middle class.";
            }
            return $benefiaries;
        });
        return view('mototaxis', [
                'assets'        => $assets,
                'beneficiaries' => $allBeneficiaries
        ]);
    }
}