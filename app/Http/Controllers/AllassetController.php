<?php

namespace App\Http\Controllers;

use App\Allasset;
use App\Services\Investor;
use Illuminate\Http\Request;

class AllassetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('management.assets.manageindex', [
                'assets' => (new Investor())->getAllAssets(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.assets.managecreate', [
                'investmentId'  => 1,
                'investor'      => 1,
                'beneficiaries' => (new Investor())->getBeneficiary(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        try {
            $path = '';
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('tmp');
            }
            (new Investor())->createAssetForInvestor([
                    [
                            'name'     => 'investment',
                            'contents' => $request->investment,
                    ], [
                            'name'     => 'investor_id',
                            'contents' => $request->investor,
                    ], [
                            'name'     => 'beneficiary',
                            'contents' => $request->beneficiary,
                    ], [
                            'name'     => 'brand',
                            'contents' => $request->brand,
                    ], [
                            'name'     => 'model',
                            'contents' => $request->model,
                    ],
                    [
                            'name'     => 'serial_number',
                            'contents' => $request->serial_number,
                    ],
                    [
                            'name'     => 'location',
                            'contents' => $request->location,
                    ],
                    [
                            'name'     => 'latitude',
                            'contents' => $request->latitude,
                    ],
                    [
                            'name'     => 'longitude',
                            'contents' => $request->longitude,
                    ],
                    [
                            'name'     => 'asset_cost',
                            'contents' => $request->asset_cost,
                    ],
                    [
                            'name'     => 'revenue',
                            'contents' => $request->revenue,
                    ],
                    [
                            'name'     => 'revenue_returned',
                            'contents' => $request->revenue_returned,
                    ],
                    [
                            'name'     => 'image',
                            'contents' => fopen(storage_path('app\\'.$path), 'r'),
                            'filename' => $request->file('image')->getClientOriginalName(),
//                        'contents' => file_get_contents(storage_path('app\\'.$data['avatar']))
                    ],

            ]);

            return redirect()->route('manageassets.index');
        } catch (\Exception $exception) {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Allasset  $allasset
     */
    public function show($allasset, $investor)
    {
        return view('management.assets.managecreate', [
                'investmentId'  => $allasset,
                'investor'      => $investor,
                'beneficiaries' => (new Investor())->getBeneficiary(),
        ]);
    }

    public function showforUse($allasset, $investor)
    {
        return view('management.assets.managecreate', [
                'investmentId'  => $allasset,
                'investor'      => $investor,
                'beneficiaries' => (new Investor())->getBeneficiary(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Allasset  $allasset
     * @return \Illuminate\Http\Response
     */
    public function edit(Allasset $allasset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Allasset  $allasset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Allasset $allasset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Allasset  $allasset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allasset $allasset)
    {
        //
    }
}
