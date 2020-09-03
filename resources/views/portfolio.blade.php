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
            <table class="table">
                <thead style="padding-bottom: 0;margin-bottom: 0">
                <tr class="table-header-untapped">
                    <th></th>
                    <th>Asset Name</th>
                    <th>Numbers</th>
                    <th>Ticket</th>
                    <th>Return</th>
                    <th>Duration</th>
                    <th>Social Gain</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="row">
                        <img src="{{ asset('untapped/twowheeler.svg') }}" alt="">
                    </td>
                    <td>
                        <a href="{{ route('motorbike.index') }}">Motorbike</a>
                    </td>
                    <td>10</td>
                    <td>1000$</td>
                    <td>10%</td>
                    <td>24 Months</td>
                    <td>20000$</td>
                </tr>
                <tr>
                    <td scope="row">
                        <img src="{{ asset('untapped/smartmeter.svg') }}" alt="">
                    </td>
                    <td>
                        <a href="{{ route('smartmeter.index') }}">Smart Meter</a>
                    </td>
                    <td>0</td>
                    <td>200$</td>
                    <td>8%</td>
                    <td>18 Months</td>
                    <td></td>
                </tr>
                <tr>
                    <td scope="row">
                        <img src="{{ asset('untapped/rawmeter.svg') }}" alt="">
                    </td>
                    <td>
                        <a href="{{ route('raw-water-atm.index') }}">Raw Water ATM</a>
                    </td>
                    <td>0</td>
                    <td>3000$</td>
                    <td>5%</td>
                    <td>36 Months</td>
                    <td></td>
                </tr>
                <tr>
                    <td scope="row">
                        <img src="{{ asset('untapped/irrigation.svg') }}" alt="">
                    </td>
                    <td>
                        <a href="{{ route('mobile-irrigation.index') }}">Mobile Irrigation</a>
                    </td>
                    <td>0</td>
                    <td>1000$</td>
                    <td>10%</td>
                    <td>18 Months</td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
