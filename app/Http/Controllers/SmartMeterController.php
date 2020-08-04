<?php

namespace App\Http\Controllers;

use App\SmartMeter;
use Illuminate\Http\Request;

class SmartMeterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('smartmeter');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SmartMeter  $smartMeter
     * @return \Illuminate\Http\Response
     */
    public function show(SmartMeter $smartMeter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SmartMeter  $smartMeter
     * @return \Illuminate\Http\Response
     */
    public function edit(SmartMeter $smartMeter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SmartMeter  $smartMeter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SmartMeter $smartMeter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SmartMeter  $smartMeter
     * @return \Illuminate\Http\Response
     */
    public function destroy(SmartMeter $smartMeter)
    {
        //
    }
}
