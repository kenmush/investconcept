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
            <p style="font: Bold 20px/26px Roboto; letter-spacing: 0px; color: #DBDCDC; opacity: 1;">
                A BETTER FUTURE THROUGH ENTREPRENEURSHIP
            </p>
        </div>
        <div class="col-md-2 pt-4 ">
            <button class="btn-untapped"> Contact Us</button>
            <span style="color: #DBDCDC" class="font-weight-bold align-items-baseline">|</span>
            @guest()
                <a href="{{ route('login') }}" style="color: #DBDCDC" class="font-weight-bold align-items-baseline">
                    Login</a>
            @else()
                <div class="dropdown pl-3" style="color: #DBDCDC">
                    <a class=" dropdown-toggle font-weight-bolder" type="button" id="dropdownMenu2"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a href="{{ route('myassets.index') }}" class="font-weight-bolder dropdown-item" type="button">My
                            Assets</a>
                        <a href="{{ route('portfolio.index') }}" class="font-weight-bolder dropdown-item" type="button">My
                            Portfolio</a>
                        <a href="{{ route('portfolio.index') }}" class="font-weight-bolder dropdown-item"
                           type="button" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        {{--                        <a href="{{ route('user-profile.index') }}" class="dropdown-item" type="button">User Profile</a>--}}
                    </div>
                </div>
            @endguest
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="shadow" style="z-index:9999 ;position: absolute;margin-top:80px;
                            margin-left:26px;height:
                            160px;
            width:20rem;">
                <div class="card">
                    <div class="card-body">
                        <!--Label: Type, Attributes:type -->
                        <div class="form-group">
                            {{--                                                <label for="type">Type</label>--}}
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
                            {{--                                                <label for="type">Country</label>--}}
                            <select type="text" class="form-control form-control-sm" id="type"
                                    aria-describedby="type-help"
                                    required>
                                <option value="type">-- Select Country --</option>
                                @foreach(\App\Country::all() as $country)
                                    <option value="type">{{ $country->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            {{--                                                <label for="type">Type</label>--}}
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
            <div
                    style="width:100%;height: 549px;background: white;border-radius: 20px;margin-bottom:61px"
                    id="map">

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
                                <th>User</th>
                                <th>Operator</th>
                                <th>Use Case</th>
                                <th>Ticket</th>
                                <th>Return</th>
                                <th>Duration</th>
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
                                <td>Moto-taxi</td>
                                <td>Ride Hailing</td>
                                <td>Transport passenger goods</td>
                                <td>100$</td>
                                <td>10%</td>
                                <td>24 months</td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <img src="{{ asset('untapped/smartmeter.svg') }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('smartmeter.index') }}">Smart Meter</a>
                                </td>
                                <td>Low income households</td>
                                <td>Water Services</td>
                                <td>Bring running water access</td>
                                <td>200$</td>
                                <td>8%</td>
                                <td>18 months</td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <img src="{{ asset('untapped/rawmeter.svg') }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('raw-water-atm.index') }}">Raw Water ATM</a>
                                </td>
                                <td>Low income households</td>
                                <td>3000$</td>
                                <td>Water Services</td>
                                <td>Communal water kiosks</td>
                                <td>3000$</td>
                                <td>36 months</td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <img src="{{ asset('untapped/irrigation.svg') }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('mobile-irrigation.index') }}">Mobile Irrigation</a>
                                </td>
                                <td>Farmers</td>
                                <td>Extension Farming</td>
                                <td>Irrigate, Increase harvest</td>
                                <td>1000$</td>
                                <td>10%</td>
                                <td>18 months</td>
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
