@extends('layouts.untapped')

@section('content')
    <div>
        <div class="container">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-4">
                        <p style="color: #DBDCDC;">Welcome {{ auth()->user()->name }}!</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <h3 style="font: Bold 20px/26px Roboto;color: #DBDCDC;">Balance</h3>
                    <div class="card shadow" style="background-color:#565C59;border: none ">
                        <div class="card-body">
                            <h4 class="card-title" style="font: Bold 46px/60px Roboto;color: #B0D2E3;">150.600$</h4>
                            <p class="card-text" style="color: #DBDCDC;font: Bold 30px/26px Roboto;"><span
                                        style="font: Bold 20px/26px Roboto;color: #DBDCDC">Months left</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <h3 style="font: Bold 20px/26px Roboto;color: #DBDCDC;">Interest</h3>
                    <div class="card shadow" style="background-color:#565C59;border: none ">
                        <div class="card-body">
                            <h4 class="card-title" style="font: Bold 50px/66px Roboto;color: #70D04D;">+ 1.450$</h4>
                            <p class="card-text" style="color: #DBDCDC;font: Bold 30px/26px Roboto;"><span
                                        style="font: Bold 20px/26px Roboto;color: #DBDCDC">Annualized Return</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <h3 style="font: Bold 20px/26px Roboto;color: #DBDCDC;">Revenue</h3>
                    <div class="card shadow" style="background-color:#565C59;border: none ">
                        <div class="card-body">
                            <h4 class="card-title" style="font: Bold 46px/60px Roboto;color: #FB7604;">150.600$</h4>
                            <p class="card-text" style="color: #DBDCDC;font: Bold 30px/26px Roboto;">
                                <span style="font: Bold 14px/20px Roboto;color: #DBDCDC">Generated for entreprenuar</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 style="font: Bold 20px/26px Roboto;color: #DBDCDC;">Leverage</h3>
                    <div class="card shadow" style="background-color:#565C59;border: none ">
                        <div class="card-body">
                            <h4 class="card-title" style="font: Bold 46px/60px Roboto;color: #D3BF4A;">2.4x</h4>
                            <p class="card-text" style="color: #DBDCDC;font: Bold 30px/26px Roboto;">
                                <span style="font: Bold 20px/26px Roboto;color: #DBDCDC">created per dollar invested</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 100%;padding-left: 0;padding-right: 0">
            <map-component :categories='@json($assets)'></map-component>
        </div>
        <div style="width: 100%;padding-left: 0;padding-right: 0;margin-top: -100px;">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow" style="background-color: #535956">
                        <div class="card-body">
                            <div class="container">
                                <asset-list></asset-list>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
