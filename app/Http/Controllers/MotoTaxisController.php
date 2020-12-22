<?php

namespace App\Http\Controllers;

use App\Services\Investor;
use Illuminate\Support\Str;

class MotoTaxisController extends Controller
{
    public function __invoke()
    {
        $assets['category'] = 'Moto Taxis';
        $assets['use_case'] = '
                        Moto-taxis are the haemoglobin of the urban and peri-urban economy in Africa, moving people,
                        goods, and livestock through hub cities in volumes unmatched by any other vehicle class. Faster
                        and cheaper on two wheels than four, the moto-taxi is an organic solution to local challenges,
                        and a great business opportunity for enterprising youths making their first moves in the city.
                        With their services in constant demand, young riders rent a bike and start earning immediately,
                        as the purchase cost of even a second-hand vehicle is far beyond the average budget. A
                        comfortable, safe, and reliable bike lets a determined entrepreneur make a decent living day
                        after day – The ability to access a quality machine on credit is a stepping stone between
                        dangerous, poorly compensated labour and more stable and self-directed livelihood.
                    ';
        $benefiaries = collect((new Investor())->getBeneficiary());
        $allBeneficiaries = $benefiaries->map(function ($benefiaries) {
            if ($benefiaries['firstName'] === 'MvuaPap!') {
                $benefiaries['founded'] = '2019';
                $benefiaries['Assets managed'] = 1;
                $benefiaries['Planned Q1 2021'] = 5;
                $benefiaries['Mission'] =
                        "To make high quality drinking water available on demand at scale to the Kenyan urban middle class";
            }
            return $benefiaries;
        });
        return view('mototaxis', [
                'assets'        => $assets,
                'beneficiaries' => $allBeneficiaries
        ]);
    }
}