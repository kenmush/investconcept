<?php

namespace App\Http\Controllers;

use App\MobileIrrigation;
use Illuminate\Http\Request;

class MobileIrrigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mobileirrigation');
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
     * @param  \App\MobileIrrigation  $mobileIrrigation
     * @return \Illuminate\Http\Response
     */
    public function show(MobileIrrigation $mobileIrrigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MobileIrrigation  $mobileIrrigation
     * @return \Illuminate\Http\Response
     */
    public function edit(MobileIrrigation $mobileIrrigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MobileIrrigation  $mobileIrrigation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MobileIrrigation $mobileIrrigation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MobileIrrigation  $mobileIrrigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(MobileIrrigation $mobileIrrigation)
    {
        //
    }
}
