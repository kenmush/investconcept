<?php

namespace App\Http\Controllers;

use App\RawWateratm;
use Illuminate\Http\Request;

class RawWateratmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rawwateratm');
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
     * @param  \App\RawWateratm  $rawWateratm
     * @return \Illuminate\Http\Response
     */
    public function show(RawWateratm $rawWateratm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RawWateratm  $rawWateratm
     * @return \Illuminate\Http\Response
     */
    public function edit(RawWateratm $rawWateratm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RawWateratm  $rawWateratm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RawWateratm $rawWateratm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RawWateratm  $rawWateratm
     * @return \Illuminate\Http\Response
     */
    public function destroy(RawWateratm $rawWateratm)
    {
        //
    }
}
