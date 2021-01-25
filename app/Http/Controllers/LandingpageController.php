<?php

namespace App\Http\Controllers;

use App\Http\Requests\LandingPageRequest;
use App\Landingpage;
use App\Services\Investor;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('management.landingpage.index', [
                'contents' => (new Investor())->getLandingPageData(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.landingpage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $store = (new Investor())->createLandingPageData($request->all());

            return redirect()->route('herosection.index');
        } catch (\Exception $exception) {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Landingpage  $landingpage
     * @return \Illuminate\Http\Response
     */
    public function show(Landingpage $landingpage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Landingpage  $landingpage
     * @return \Illuminate\Http\Response
     */
    public function edit($landingpage)
    {
        return view('management.landingpage.edit', [
                'contents' => collect((new Investor())->getLandingPageData())->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Landingpage  $landingpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $landingpage)
    {
        try {
            (new Investor())->updateLandingPageData($request->all(), $landingpage);

            return redirect()->route('herosection.index');
        } catch (\Exception $exception) {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Landingpage  $landingpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landingpage $landingpage)
    {
        //
    }
}
