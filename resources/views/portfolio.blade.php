@extends('layouts.untapped')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-md-4">
                    <p style="font: Bold 50px/66px Roboto;color: #DBDCDC;">My Portfolio</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <h3 style="font: Bold 20px/26px Roboto;color: #DBDCDC;">Amount Invested</h3>
                <div class="card shadow" style="background-color:#565C59;border: none ">
                    <div class="card-body">
                        <h4 class="card-title" style="font: Bold 46px/60px Roboto;color: #B0D2E3;">150.600$</h4>
                        <p class="card-text" style="color: #DBDCDC;font: Bold 30px/26px Roboto;">50.000$
                            <span style="font: Bold 20px/26px Roboto;color: #DBDCDC">repaid</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <h3 style="font: Bold 20px/26px Roboto;color: #DBDCDC;">Benefit</h3>
                <div class="card shadow" style="background-color:#565C59;border: none ">
                    <div class="card-body">
                        <h4 class="card-title" style="font: Bold 50px/66px Roboto;color: #70D04D;">+ 1.450$</h4>
                        <p class="card-text" style="color: #DBDCDC;font: Bold 30px/26px Roboto;">10%
                            <span style="font: Bold 20px/26px Roboto;color: #DBDCDC">Return</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <h3 style="font: Bold 20px/26px Roboto;color: #DBDCDC;">Social impact</h3>
                <div class="card shadow" style="background-color:#565C59;border: none ">
                    <div class="card-body">
                        <h4 class="card-title" style="font: Bold 46px/60px Roboto;color: #FB7604;">150.600$</h4>
                        <p class="card-text" style="color: #DBDCDC;font: Bold 30px/26px Roboto;">
                            <span style="font: Bold 14px/20px Roboto;color: #DBDCDC">created for entreprenuars</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h3 style="font: Bold 20px/26px Roboto;color: #DBDCDC;">Leverage</h3>
                <div class="card shadow" style="background-color:#565C59;border: none ">
                    <div class="card-body">
                        <h4 class="card-title" style="font: Bold 46px/60px Roboto;color: #D3BF4A;">2.4x</h4>
                        <p class="card-text" style="color: #DBDCDC;font: Bold 30px/26px Roboto;">
                            <span style="font: Bold 20px/26px Roboto;color: #DBDCDC">on capital invested</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4" style="border-radius:15px;background-color: #1F2A46;height: 20em">

        </div>
        <div class="row" style="padding-top: 13px">
            <asset-list></asset-list>
        </div>
    </div>
@endsection
