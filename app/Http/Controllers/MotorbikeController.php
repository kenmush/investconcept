<?php

namespace App\Http\Controllers;

use App\Motorbike;
use Illuminate\Http\Request;

class MotorbikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('motorbike');
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
     * @param  \App\Motorbike  $motorbike
     * @return \Illuminate\Http\Response
     */
    public function show(Motorbike $motorbike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Motorbike  $motorbike
     * @return \Illuminate\Http\Response
     */
    public function edit(Motorbike $motorbike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Motorbike  $motorbike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motorbike $motorbike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Motorbike  $motorbike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motorbike $motorbike)
    {
        //
    }
}
