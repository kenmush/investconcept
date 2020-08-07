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
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link align-bottom"
                                   style="font: Bold 20px/26px Roboto; color: #DBDCDC;"
                                   data-toggle="tab" href="#home" role="tab"
                                   aria-controls="home" aria-selected="true">
                                    Maps
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active align-bottom pl-4" style="font: Bold 20px/26px Roboto; color:
                        #DBDCDC;"
                                   data-toggle="tab" href="#profile" role="tab" aria-controls="home"
                                   aria-selected="true">
                                    List
                                    {{--                                    <span--}}
                                    {{--                                        style="position: absolute;top: 15px;width:50px;height: 15px;z-index: 999; margin-left:-40px;--}}
                                    {{--                                background: 0 0 no-repeat padding-box padding-box rgba(176, 210, 227, 0.6);">--}}
                                    </span>
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade " id="home" role="tabpanel"
                 aria-labelledby="home-tab">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <div
                                style="position:relative;width:100%;height: 549px;background: white;border-radius: 20px;margin-bottom:61px"
                                id="map">
                                <div class="shadow" style="z-index:100;position: absolute;margin-left:26px;margin-top:36px;height: 160px;
            width:20rem;">
                                    <div class="card">
                                        <div class="card-body">
                                            <!--Label: Type, Attributes:type -->
                                            <div class="form-group">
                                                <label for="type">Type</label>
                                                <select type="text" class="form-control form-control-sm" id="type"
                                                        aria-describedby="type-help"
                                                        required>
                                                    <option value="type">Type</option>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="type">Type</label>
                                                <select type="text" class="form-control form-control-sm" id="type"
                                                        aria-describedby="type-help"
                                                        required>
                                                    <option value="type">Kenya</option>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="type">Type</label>
                                                <select type="text" class="form-control form-control-sm" id="type"
                                                        aria-describedby="type-help"
                                                        required>
                                                    <option value="type">Return 10%</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card shadow" style="height: 549px;margin-left: -50px">
                                <div class="card-body">
                                    <div style="border-top: 57px">
                                        <h3 style="font: Bold 16px/24px Roboto;color: #A2A2A2;">Asset</h3>
                                        <p style="font: Bold 20px/24px Roboto;color: #565C59;">Motorbike</p>
                                    </div>
                                    <div style="border-top: 57px">
                                        <h3 style="font: Bold 16px/24px Roboto;color: #A2A2A2;">Country</h3>
                                        <p style="font: Bold 20px/24px Roboto;color: #565C59;">Kenya</p>
                                    </div>
                                    <div style="border-top: 57px">
                                        <h3 style="font: Bold 16px/24px Roboto;color: #A2A2A2;">Return</h3>
                                        <p style="font: Bold 20px/24px Roboto;color: #565C59;">10%</p>
                                    </div>
                                    <div style="border-top: 57px">
                                        <h3 style="font: Bold 16px/24px Roboto;color: #A2A2A2;">Innovator</h3>
                                        <p style="font: Bold 20px/24px Roboto;color: #565C59;">Joroh</p>
                                        <img class=" rounded-circle" src="{{ asset('untapped/joroh.png') }}"
                                             height="75px" width="75px">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
        </div>

    </div>
@endsection
