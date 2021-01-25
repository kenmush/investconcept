<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Services\Investor;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('portfolio', [
                'assets'      => (new Investor())->getAssetCategories() ?? [],
                'tableAssets' => (new Investor())->getInvestorAssets(auth()->user()->api_id)['investments'] ?? [],
                'stats'       => (new Investor())->getInvestorAssets(auth()->user()->api_id) ?? [],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     */
    public function show($id)
    {
        try {
            $assets = collect((new Investor())->getAssetbyId($id));
            $assets['carousel'] = [];
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

            if (Str::contains($assets['categoryName'], 'ATM') || Str::contains($assets['categoryName'],
                            'Maji milele')) {
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
                    $benefiaries['Planned Q1 2021'] = 50;

                    $benefiaries['Mission'] =
                            'To make high quality drinking water available on demand at scale to the Kenyan urban middle class';
                }
                if ($benefiaries['username'] === 'atm') {
                    $benefiaries['founded'] = '2019';
                    $benefiaries['Assets managed'] = 10;
                    $benefiaries['Planned Q1 2021'] = 30;
                    $benefiaries['Mission'] =
                            'To make high quality drinking water available on demand at scale to the Kenyan urban middle class.';
                }
                if ($benefiaries['firstName'] === 'Maji Milele') {
                    $benefiaries['founded'] = '2008';
                    $benefiaries['Assets managed'] = 9;
                    $benefiaries['Planned Q1 2021'] = 25;
                    $benefiaries['Mission'] =
                            'Widening base of pyramid access to safe water';
                }
                if ($benefiaries['firstName'] === 'Asaak') {
                    $benefiaries['founded'] = '';
                    $benefiaries['Assets managed'] = 40;
                    $benefiaries['Planned Q1 2021'] = round(0.4 * 40);
                    $benefiaries['Mission'] =
                            'Enabling first-time bike ownership with boda-boda financing';
                }
                if ($benefiaries['firstName'] === 'Zembo') {
                    $benefiaries['founded'] = '';
                    $benefiaries['Assets managed'] = 83;
                    $benefiaries['Planned Q1 2021'] = round(0.4 * 83);
                    $benefiaries['Mission'] =
                            '';
                }
                if ($benefiaries['firstName'] === 'Teliman') {
                    $benefiaries['founded'] = '';
                    $benefiaries['Assets managed'] = 15;
                    $benefiaries['Planned Q1 2021'] = round(0.4 * 15);
                    $benefiaries['Mission'] =
                            'The first on demand moto-taxi service in Mali, Africa’s fastest growing capital';
                }

                return $benefiaries;
            });

            return view('motorbike', [
                    'assets'        => $assets,
                    'beneficiaries' => $allBeneficiaries,
            ]);
        } catch (ClientException $exception) {
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     */
    public function edit($id)
    {
        try {
            return view('management.portfolio.update', [
                    'asset' => collect((new Investor())->getInvestorAssets(auth()->user()->api_id)['investments'])->where('id',
                            $id)->first(),
            ]);
        } catch (\Exception $exception) {
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $updated = (new Investor())->updateAssetInvestedIn([
                    'investor_id' => $request->investorid,
                    'investments' => [
                            [
                                    'id'                => $request->id,
                                    'asset_category_id' => $request->asset_category,
                                    'amount_invested'   => $request->amount_invested,
                                    'leverage'          => $request->leverage,
                                    'duration'          => $request->duration,
                                    'interest'          => $request->interest,
                                    'balance'           => $request->balance,
                                    'units'             => $request->units,
                            ],
                    ],
            ], $request->investorid);

            return redirect()->route('portfolio.index');
        } catch (\Exception $exception) {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
