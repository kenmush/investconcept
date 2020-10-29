<?php

namespace App\Http\Controllers;

use App\Http\Requests\LandingPageRequest;
use App\Landingpage;
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
        //
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
    public function store(LandingPageRequest $request, Landingpage $landingpage)
    {
        $landingpage->tagline = $request->tagline;
        $landingpage->tagdescription = $request->tagdescription;
        $landingpage->calltoactionone = $request->calltoactionone;
        $landingpage->calltoactiononedescription = $request->calltoactiononedescription;
        $landingpage->calltoactiontwo = $request->calltoactiontwo;
        $landingpage->calltoactiontwodescription = $request->calltoactiontwodescription;
        $landingpage->calltoactionthree = $request->calltoactionthree;
        $landingpage->calltoactionthreedescription = $request->calltoactionthreedescription;
        $landingpage->save();
        return response($landingpage,200);
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
    public function edit(Landingpage $landingpage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Landingpage  $landingpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Landingpage $landingpage)
    {
        //
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
