<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet'/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet'/>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="container-fluid">

    <div class="row">
        <div class="col-md-7 text-center">
            <img src="{{ asset('untapped/Logo_Untapped_1.png') }}" alt="">
            @if(request()->segment(1) === 'signin')
                <p style="font: Bold 20px/26px Roboto; letter-spacing: 0px; color: #DBDCDC; opacity: 1;">
                    A BETTER FUTURE THROUGH ENTREPRENEURSHIP
                </p>
            @endif
        </div>
        <div class="col-md-5 pt-4 float-right">
         <div class="row">
             <button class="btn-untapped mr-3"> Contact Us</button>
             <span style="color: #DBDCDC" class="font-weight-bold align-items-baseline">|</span>
             @guest()
                 <a href="{{ route('login') }}" style="color: #DBDCDC" class="font-weight-bold align-items-baseline">
                     Login</a>
             @else()
                 <div class="dropdown pl-3" style="color: #DBDCDC">
                     <a class=" dropdown-toggle" type="button" id="dropdownMenu2"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         {{ auth()->user()->name }}
                     </a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                         <a href="{{ route('myassets.index') }}" class="dropdown-item" type="button">My Assets</a>
                         <a href="{{ route('portfolio.index') }}" class="dropdown-item" type="button">My Portfolio</a>
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
