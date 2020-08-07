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
<div class="">

    <div class="row">
        <div class="col-md-8 offset-2 text-center">
            <img src="{{ asset('untapped/Logo_Untapped_1.png') }}" alt="">
        </div>
        <div class="col-md-2 pt-4 float-right">
            <button class="btn-untapped"> Contact Us</button>
            <span style="color: #DBDCDC" class="font-weight-bold align-items-baseline">|</span>
            <span style="color: #DBDCDC" class="font-weight-bold align-items-baseline">Hello Vincent</span>
        </div>
        <div class="flex d-flex text-center justify-content-center align-content-center">
            <p class="text-center"
               style="font: Bold 20px/26px Roboto; letter-spacing: 0px; color: #DBDCDC; opacity: 1;">
                A BETTER FUTURE THROUGH ENTREPRENEURSHIP
            </p>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row"
                 style="font: Bold 20px/26px Roboto; letter-spacing: 0px; color: #DBDCDC;">
                <p class="landing-page-text">Untapped helps entrepreneurs in frontier markets meet the needs of their
                    growing
                    communities. Unlike
                    small
                    businesses in rich countries, entrepreneurs in developing markets have limited access to financing.
                    This
                    makes essential services such as clean water, affordable healthcare, a safe motorcycle ride, or
                    healthy
                    food more expensive and harder to find. It impacts everyone, but especially the poorest.</p>
            </div>

        </div>
        <div class="row">
            <div class="container-fluid" style="padding-left: 0 !important;padding-right: 0 !important;">
                <div style="background-image: url({{ asset('untapped/bgnew.jpg') }});
                    background-size: 1920px;
                    background-repeat: no-repeat;
                    height: 108px;
                    ">

                </div>
                <div class="container-fluid" style="background: #DBDCDC;height: 600px">
                    <h4 style="font: Bold 70px/92px Roboto;color: #FFFFFF;">Our Mission</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="position:relative;">
            <h4 style="font: Bold 70px/92px Roboto;color: #FFFFFF;">Our impact</h4>
            <div style="position: absolute;top: 95px">
                <img src="{{ asset('untapped/ourimpact.svg') }}" alt="">
            </div>

            <div class="container">
                <div class="row d-flex justify-content-center text-center"
                     style="font: Bold 20px/26px Roboto; color: #FFFFFF;">
                    <p class="landing-page-text">We have supported entrepreneurs and projects through East Africa, West
                        Africa, and the Caribbean (Haiti), supporting over 500 entrepreneurs and small businesses. They
                        generate over $2 million in incremental revenue each year for local communities while delivering
                        essential services to over 200,000 people</p>
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
