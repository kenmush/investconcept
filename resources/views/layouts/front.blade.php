<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Untapped Capital') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('owl.carousel.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet'/>
    <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b7fb0b123e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #34495e">
    <a class="navbar-brand" href="#">
        <img style="max-width: 250px;
    max-height: 50px;" src="https://www.untapped-inc.com/uploads/1/3/1/9/13198181/new-untapped-logo-trans.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto text-white">
            <li class="nav-item active">
                <a class="navbar-text nav-link text-white" href="#">Invest <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="navbar-text nav-link text-white" href="#">Simulate Impact</a>
            </li>
        </ul>
        <a class="navbar-text nav-link text-white" href="{{ route('login') }}"> <i class="fa fa-lock"></i> Login</a>
        <a href="{{ route('register') }}" class="btn btn-primary my-2 my-sm-0" type="submit">Get Started</a>
    </div>
</nav>

<div id="app">
    @yield('content')

</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('owl.carousel.js') }}"></script>
<script src="https://cdnjs.com/libraries/Chart.js"></script>
{{--<script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>--}}
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
<script>
    $(document).ready(function () {
        var owl = $(".owl-carousel").owlCarousel();
        owl.owlCarousel({
            items: 6,
            loop: true,
            margin: 10,
            autoplay: true,
            autoWidth:true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });
        owl.trigger('play.owl.autoplay',[1000])
    });
</script>
</body>
</html>
