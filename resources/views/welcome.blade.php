<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet'/>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">

    <div class="row">
        <div class="col-md-8 offset-2 text-center">
            <img src="{{ asset('untapped/Logo_Untapped_1.png') }}" alt="">
        </div>
        <div class="col-md-2 pt-4 float-right">
            <button class="btn-untapped"> Contact Us</button>
            <span style="color: #DBDCDC" class="font-weight-bold align-items-baseline">|</span>
            <span style="color: #DBDCDC" class="font-weight-bold align-items-baseline">Hello Vincent</span>
        </div>
    </div>

    <div class="container">
        <div style="position:relative;width:100%;height: 549px;background: white;border-radius: 20px;margin-bottom:61px"
             id="map">
            <div class="shadow" style="z-index:100;position: absolute;margin-left:26px;margin-top:36px;height: 160px;
            width:20rem;border-radius: 1.7rem">
                <div class="card" style="border-radius: 1.7rem">
                    <div class="card-body">
                        <!--Label: Type, Attributes:type -->
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select type="text" class="form-control form-control-sm" id="type"
                                    aria-describedby="type-help"
                                    required>
                                <option value="type">Type</option>
                                @foreach(\App\Asset::all() as $type)
                                    <option value="type">{{$type->type }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="type">Country</label>
                            <select type="text" disabled class="form-control form-control-sm" id="type"
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
                                @foreach(\App\ReturnType::all() as $returnType)
                                <option value="type">{{ $returnType->type }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

        </div>
        <div class="row" style="margin-top: 74px">
            <div class="col-12"
                 style="z-index:10;margin-left:-30px;margin-top:-25px;font: Bold 40px Roboto;color: #DBDCDC !important;">
                Mission
            </div>
            <div class="col-12">
                <p class="text-center" style="color: #DBDCDC;font: Bold 20px/26px Roboto;text-align: center;
                margin-top: 38px">
                    Untapped’s mission is to help entrepreneurs in frontier markets solve everyday problems with the
                    right technology and access to capital.
                </p>
            </div>
            <div class="col-12">
                <div class="row justify-content-center mt-5">
                    <img src="{{ asset('untapped/lead.svg') }}" alt="">
                    <img class="pl-5" src="{{ asset('untapped/dashboard.svg') }}" alt="">
                    <img class="pl-5" src="{{ asset('untapped/droplet.svg') }}" alt="">
                    <img class="pl-5" src="{{ asset('untapped/motorbiked.svg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 74px">

            <div class="col-12">
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
    </div>
</div>
<script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibXV0aXN5YSIsImEiOiJja2JsN21kejExNjd5MnNvNThyYmNybTNhIn0.BmObv_gTFqLmuc-VObwKYw';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v10'
    });
</script>
</body>
</html>
