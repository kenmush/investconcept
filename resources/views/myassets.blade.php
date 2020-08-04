@extends('layouts.untapped')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-md-4">
                    <p style="font: Bold 50px/66px Roboto;color: #DBDCDC;">My assets</p>
                </div>
                <div class="col-md-8">
                    <div class="row align-bottom">
                        <a href="#" class="align-bottom" style="font: Bold 20px/26px Roboto; color: #DBDCDC;">
                            Maps
                        </a>
                        <a href="#" class="align-bottom pl-4" style="font: Bold 20px/26px Roboto; color: #DBDCDC;">
                            List
                            <span
                                style="position: absolute;top: 15px;width:50px;height: 15px;z-index: 999; margin-left:-40px;
                                background: 0 0 no-repeat padding-box padding-box rgba(176, 210, 227, 0.6);">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
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
                    <td>Motorbike</td>
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
                    <td>Smart Meter</td>
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
                    <td>Raw Water ATM</td>
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
                    <td>Mobile Irrigation</td>
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
