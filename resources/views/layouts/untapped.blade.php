<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth()
        <meta name="user_id" content="{{ auth()->user()->id }}">
    @endauth
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">
    <!-- Styles -->
    <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet"
          href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.0/mapbox-gl-geocoder.css"
          type="text/css"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="container-fluid">

    <div class="row">
        <div class="col-md-7 offset-2 text-center">
            <a href="/">
                <img src="{{ asset('untapped/Logo_Untapped_1.png') }}" alt="">
            </a>

            <p style="font: Bold 20px/26px Roboto; letter-spacing: 0px; color: #DBDCDC; opacity: 1;">
                A BETTER FUTURE THROUGH ENTREPRENEURSHIP
            </p>

        </div>
        <div class="col-md-3 pt-2 float-right">
            <div class="row">
                <a href="{{ route('contactus') }}" class="btn-untapped mr-3"> Contact Us</a>
                <span style="color: #DBDCDC" class="font-weight-bold align-items-baseline">|</span>
                @guest()
                    <a href="{{ route('login') }}" style="color: #DBDCDC" class="font-weight-bold align-items-baseline">
                        Login</a>
                @else()
                    <div class="dropdown pl-3" style="color: grey">
                        <a class=" dropdown-toggle font-weight-bolder" type="button" id="dropdownMenu2"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a style="color: grey" href="{{ route('myassets.index') }}"
                               class="font-weight-bolder dropdown-item"
                               type="button">My
                                Assets</a>
                            <a style="color: grey" href="{{ route('portfolio.index') }}"
                               class="font-weight-bolder dropdown-item"
                               type="button">My
                                Portfolio</a>
                            <a style="color: grey" class="font-weight-bolder dropdown-item"
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
    </div>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>

{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlfzb8gc99EhL-TVPGjZLhw84nzt85KEc&callback=initMap"--}}
{{--        async defer></script>--}}

{{--<script>--}}
{{--    function initMap() {--}}

{{--        var map = new google.maps.Map(document.getElementById('map'), {--}}
{{--            zoom: 15,--}}
{{--            center: {lat: -1.3032051, lng: 36.7073093}--}}
{{--        });--}}


{{--        map.addListener('click', function (e) {--}}
{{--            addListing(e.latLng, map);--}}
{{--        });--}}
{{--    }--}}

{{--    function initSearchMap() {--}}
{{--        var map = new google.maps.Map(document.getElementById('mapsearch'), {--}}
{{--            zoom: 15,--}}
{{--            center: {lat: -1.3032051, lng: 36.7073093}--}}
{{--        });--}}

{{--        map.addListener('click', function (e) {--}}
{{--            addListing(e.latLng, map);--}}
{{--        });--}}
{{--    }--}}

{{--    var i = 1;--}}

{{--    function addListing(location, map) {--}}

{{--        var addMarker;--}}
{{--        var iMax = 1;--}}

{{--        if (i <= iMax) {--}}
{{--            addMarker = new google.maps.Marker({--}}
{{--                draggable: true,--}}
{{--                position: location,--}}
{{--                map: map--}}
{{--            });--}}
{{--            Event.$emit('updateCoordinates', location.toString());--}}
{{--            google.maps.event.addListener(addMarker, 'dblclick', function () {--}}
{{--                addMarker.setMap(null);--}}
{{--                i = 1;--}}
{{--            });--}}

{{--            i++;--}}

{{--        } else {--}}
{{--            console.log('you can only post', i - 1, 'markers');--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}
{{--<script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
{{--<script>--}}
{{--    mapboxgl.accessToken = 'pk.eyJ1IjoibXV0aXN5YSIsImEiOiJja2JsN21kejExNjd5MnNvNThyYmNybTNhIn0.BmObv_gTFqLmuc-VObwKYw';--}}
{{--    var map = new mapboxgl.Map({--}}
{{--        container: 'maps',--}}
{{--        style: 'mapbox://styles/mapbox/streets-v11'--}}
{{--    });--}}
{{--    $('#maps').show();--}}

{{--    // detect the map's new width and height and resize it--}}
{{--    map.resize();--}}
{{--</script>--}}
</body>
</html>
