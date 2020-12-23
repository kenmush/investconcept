<?php

namespace App\Http\Controllers;

use App\Services\Investor;
use Illuminate\Support\Str;

class WaterAtms extends Controller
{
    public function __invoke()
    {
        $assets = collect((new Investor())->getAssetbyId(2));

        if (Str::contains($assets['categoryName'], 'MvuaPap! Irrigation Trailer')) {
            $assets['category'] = 'Irrigation pumps';
            $assets['carousel'] = [
                    'mvua/mvua1.jpg',
                    'mvua/mvua2.jpg',
                    'mvua/mvua3.jpg',
                    'mvua/mvua4.jpg',
            ];
        }

        if (Str::contains($assets['categoryName'], 'bike')) {
            $assets['category'] = 'Moto Taxis';
            $assets['carousel'] = [
                    'mototaxis/zembo2.PNG',
                    'mototaxis/asaak1.jpg',
                    'mototaxis/asaak2.jpg',
                    'mototaxis/asaak3.jpg',
                    'mototaxis/zembo1.PNG',
                    'mototaxis/zembo3.PNG',
            ];
        }

        if (Str::contains($assets['categoryName'], 'ATM')||Str::contains($assets['categoryName'], 'Maji milele')) {
            $assets['category'] = 'ATMs';
            $assets['carousel'] = [
                    'atm/atm1.jpg',
                    'atm/atm2.jpg',
                    'atm/atm3.jpg',
                    'atm/ovive1.jpg',
            ];
        }
        $benefiaries = collect((new Investor())->getBeneficiary());
        $allBeneficiaries = $benefiaries->map(function ($benefiaries) {
            if ($benefiaries['firstName'] === 'MvuaPap!') {
                $benefiaries['founded'] = '2019';
                $benefiaries['Assets managed'] = 8;
                $benefiaries['Planned Q1 2021'] = 45;

                $benefiaries['Mission'] =
                        "To make high quality drinking water available on demand at scale to the Kenyan urban middle class";
            }
            if ($benefiaries['firstName'] === 'Ovive Purified') {
                $benefiaries['founded'] = '2019';
                $benefiaries['Assets managed'] = 1;
                $benefiaries['Planned Q1 2021'] = 5;
                $benefiaries['Mission'] =
                        "To make high quality drinking water available on demand at scale to the Kenyan urban middle class.";
            }
            if ($benefiaries['firstName'] === 'Maji Milele') {
                $benefiaries['founded'] = '2008';
                $benefiaries['Assets managed'] = 9;
                $benefiaries['Planned Q1 2021'] = 25;
                $benefiaries['Mission'] =
                        "Widening base of pyramid access to safe water";
            }
            if ($benefiaries['firstName'] === 'Asaak') {
                $benefiaries['founded'] = '';
                $benefiaries['Assets managed'] = 40;
                $benefiaries['Planned Q1 2021'] = round(0.4 * 40);
                $benefiaries['Mission'] =
                        "Enabling first-time bike ownership with boda-boda financing";
            }
            if ($benefiaries['firstName'] === 'Zembo') {
                $benefiaries['founded'] = '';
                $benefiaries['Assets managed'] = 83;
                $benefiaries['Planned Q1 2021'] = round(0.4 * 83);
                $benefiaries['Mission'] =
                        "Zembo, the Zero Emission Motorcycle Boda";
            }
            if ($benefiaries['firstName'] === 'Teliman') {
                $benefiaries['founded'] = '';
                $benefiaries['Assets managed'] = 15;
                $benefiaries['Planned Q1 2021'] = round(0.4 * 15);
                $benefiaries['Mission'] =
                        "The first on demand moto-taxi service in Mali, Africa’s fastest growing capital";
            }
            return $benefiaries;
        });
        return view('wateratms', [
                'assets'        => $assets,
                'beneficiaries' => $allBeneficiaries
        ]);
    }
}