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
     *
     */
    public function index()
    {

        $assets = (new Investor())->getAssetCategories() ?? [];
        $tableAssets = (new Investor())->getInvestorAssets(auth()->user()->api_id)['investments'] ?? [];
        $stats = (new Investor())->getInvestorAssets(auth()->user()->api_id) ?? [];
        return view('portfolio', compact('assets', 'tableAssets', 'stats'));
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
            $beneficiaries = collect((new Investor())->getAssetbyId($id));

            if (Str::contains($beneficiaries['categoryName'], 'pump')) {
                $beneficiaries['category'] = 'Irrigation pumps';
            }

            if (Str::contains($beneficiaries['categoryName'], 'bike')) {
                $beneficiaries['category'] = 'Moto Taxis';
            }

            if (Str::contains($beneficiaries['categoryName'], 'ATM')) {
                $beneficiaries['category'] = 'ATMs';
            }

            return view('motorbike', [
                    'assets'        => $beneficiaries,
                    'beneficiaries' => (new Investor())->getBeneficiary()
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
                    'asset' => collect((new Investor())->getInvestorAssets(auth()->user()->api_id)['investments'])->where
                    ('id',
                            $id)->first()
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
                    "investor_id" => $request->investorid,
                    'investments' => [
                            [
                                    "id"                => $request->id,
                                    "asset_category_id" => $request->asset_category,
                                    "amount_invested"   => $request->amount_invested,
                                    "leverage"          => $request->leverage,
                                    "duration"          => $request->duration,
                                    "interest"          => $request->interest,
                                    "balance"           => $request->balance,
                                    "units"             => $request->units
                            ]
                    ]
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
