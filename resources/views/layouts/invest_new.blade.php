<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Untapped Invest</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/untapped.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b7fb0b123e.js" crossorigin="anonymous"></script>
</head>

<body>

<div id="app">
    <div id="header" class="header">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="welcome-text"><p>Welcome to Untapped</p></div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="user-panel">
                            <span>
                                <a href="#" class="login">Login</a>or</span><a href="#"
                                                                                                     class="btn-hyipox-small">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-lg-1 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="row">
                            <div class="col-6 d-xl-none d-lg-none d-block">
                                <button type="button" class="navbar-toggler"><span class="dag"></span> <span
                                            class="dag2"></span> <span class="dag3"></span></button>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-6 d-xl-block d-lg-block d-flex align-items-center justify-content-end">
                                <div class="logo">
                                    <a href="/">
                                        <img src="https://untapped-global.com/wp-content/themes/yootheme/cache/untapped-logo-website1-623de87f.png"
                                                alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10">
                        <div class="mainmenu">
                            <div class="d-xl-none d-lg-none d-block"></div>
                            <nav class="navbar navbar-expand-lg">
                                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item invest-btn mr-2 text-center">
                                            <a href="{{ route('register') }}" class="nav-link ">
                                                INVEST
                                                <span class="sr-only">(current)</span>
                                            </a>
                                        </li>
                                        <li class="nav-item engage-btn mr-2  text-center">
                                            <a href="https://untapped-global.com/engage" class="nav-link">
                                                ENGAGE
                                                <span class="sr-only">(current)</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link ">Home
                                                <span class="sr-only">(current)</span>
{{--                                                <span style="color: #B8DAE9" class="ml-2">|</span>--}}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://untapped-global.com" class="nav-link">
                                                About
{{--                                                <span style="color: #B8DAE9" class="ml-2">|</span>--}}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://untapped-global.com" class="nav-link">
                                                How it Works
{{--                                                <span style="color: #B8DAE9" class="ml-2">|</span>--}}
                                            </a>
                                        </li>
                                        <li class="nav-item join-now-btn">
                                            <a href="https://untapped-global.com" class="nav-link">
                                                Blog
{{--                                                <span style="color: #B8DAE9" class="ml-2">|</span>--}}
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="https://untapped-global.com" class="nav-link">Contact</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="{{ route('login') }}" class="nav-link">Log In</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                                        </li>
                                        <li class="nav-item text-white items-baseline">
                                            <i class="fa fa-twitter mr-1"></i>
                                            <i class="fa fa-linkedin mr-1"></i>
                                            <i class="fa fa-youtube"></i>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cta">
        <div class="container mb-5">
            <div class="cta-bg">

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('register') }}" class="cta-link">
                        <div class="cta-invest d-flex justify-content-center align-items-end mb-0 pb-0"
                             style="position:relative;">
                            <div style="position: absolute;top: -1rem;z-index: 99">
                                <svg height="48" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70.6 90.83">
                                    <g data-name="Layer 2">
                                        <g
                                                data-name="Layer 1">
                                            <path d="M69.71 57.69L55.35 30.63 41 3.58a6.32 6.32 0 00-11.39 0L15.25 30.63.89 57.69c-2.53 4.77.63 10.73 5.7 10.73H64c5.08 0 8.24-5.96 5.71-10.73zM35.3 41.75H22.21l6.55-12.92 6.54-12.91 6.54 12.91 6.55 12.92z"
                                                  fill="#f2f2f2"/>
                                            <path d="M53.69 90.83H14.84c-1.84 0-3.32-1.14-3.32-2.55s1.48-2.55 3.32-2.55h38.85c1.84 0 3.32 1.14 3.32 2.55s-1.48 2.55-3.32 2.55z"
                                                  fill="#b8dae9"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <p>INVEST NOW!</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 pt-5 pb-5">
                <div class="d-flex justify-content-center align-items-center">
                    <h3 class="untapped-title pt-5">Your Impact in real time</h3>
                </div>
                <div class="d-flex justify-content-center align-items-center">

                    <div style="border-bottom: 6px solid #B8DAE9;width: 20%">

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid m-0 p-0">
        <div style="width: 100%;margin-right: 100px;">
            <googlemap></googlemap>
            {{--            <map-component :categories='@json($assets)'></map-component>--}}
        </div>
    </div>
    <div class="container-fluid p-0 m-0" style="background-color: #F2F2F2">

        <div class="d-flex justify-content-center align-items-center pt-5">
            <div>
                <h3 class="untapped-title">Assets</h3>
                <div style="border-bottom: 6px solid #B8DAE9;width: 100%">

                </div>
            </div>
        </div>
        <showassets></showassets>
    </div>
    <div class="container-fluid bg-cta-section">
        <div class="row">
            <div class="col-md-3">
{{--                <div style="background-color: #0bab64">--}}
{{--                    <svg height="32" class="text-untapped" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.08 29--}}
{{--                    .33">--}}
{{--                        <defs>--}}
{{--                            <style>--}}
{{--                                .cls-1 {--}}
{{--                                    fill: #B8DAE9;--}}
{{--                                }</style>--}}
{{--                        </defs>--}}
{{--                        <g id="Layer_2" data-name="Layer 2">--}}
{{--                            <g id="Layer_1-2" data-name="Layer 1">--}}
{{--                                <path id="Twitter" class="cls-1"--}}
{{--                                      d="M36.08,3.47a14.7,14.7,0,0,1-4.25,1.17A7.43,7.43,0,0,0,35.09.54a14.79,14.79,0,0,1-4.7,1.8A7.41,7.41,0,0,0,17.58,7.4a7.81,7.81,0,0,0,.19,1.69A21,21,0,0,1,2.51,1.35,7.43,7.43,0,0,0,4.8,11.24a7.33,7.33,0,0,1-3.35-.93v.1a7.41,7.41,0,0,0,5.94,7.26,7.84,7.84,0,0,1-1.95.26A7.23,7.23,0,0,1,4,17.79,7.42,7.42,0,0,0,11,22.93,14.83,14.83,0,0,1,1.77,26.1,14.76,14.76,0,0,1,0,26a21,21,0,0,0,11.35,3.33C25,29.33,32.41,18,32.41,8.26c0-.32,0-.64,0-1A14.77,14.77,0,0,0,36.08,3.47Z"/>--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                    <svg height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.08 36.02">--}}
{{--                        <defs>--}}
{{--                            <style>.cls-1 {--}}
{{--                                    fill: #b8dae9;--}}
{{--                                }</style>--}}
{{--                        </defs>--}}
{{--                        <g id="Layer_2" data-name="Layer 2">--}}
{{--                            <g id="Layer_1-2" data-name="Layer 1">--}}
{{--                                <g id="Linkedin">--}}
{{--                                    <path class="cls-1"--}}
{{--                                          d="M.59,12H8.08V36H.59ZM4.34,0A4.34,4.34,0,1,1,0,4.34,4.33,4.33,0,0,1,4.34,0"/>--}}
{{--                                    <path class="cls-1"--}}
{{--                                          d="M12.77,12h7.17v3.29H20a7.87,7.87,0,0,1,7.07-3.89c7.58,0,9,5,9,11.46V36H28.61V24.32c0-2.79-.05-6.38-3.89-6.38s-4.48,3-4.48,6.18V36H12.77Z"/>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                    <svg height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46.29 31.74">--}}
{{--                        <defs>--}}
{{--                            <style>--}}
{{--                                .cls-1 {--}}
{{--                                    fill: #b8dae9;--}}
{{--                                }</style>--}}
{{--                        </defs>--}}
{{--                        <g id="Layer_2" data-name="Layer 2">--}}
{{--                            <g id="Layer_1-2" data-name="Layer 1">--}}
{{--                                <g id="YouTube">--}}
{{--                                    <path id="youtube-2" data-name="youtube" class="cls-1"--}}
{{--                                          d="M46.29,25.13a6.64,6.64,0,0,1-6.62,6.61H6.61A6.64,6.64,0,0,1,0,25.13V6.61A6.64,6.64,0,0,1,6.61,0H39.67a6.64,6.64,0,0,1,6.62,6.61ZM18.36,21.55l12.51-6.48L18.36,8.54Z"/>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                </div>--}}
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="invest-btn">
                            <a class="text-center" href="{{ route('register') }}">
                                INVEST
                                <span class="sr-only">(current)</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="engage-btn">
                            <a class="text-center" href="https://untapped-global.com/engage">
                                ENGAGE
                                <span class="sr-only">(current)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row ml-5">
                    <span class="mr-4">
                        <div>
                            <span class="mr-2">ABOUT</span> <span style="color: #B8DAE9">|</span>
                        </div>
                    </span>
                    <span class="mr-4">
                        <div>
                            <span class="mr-2">HOW IT WORKS</span> <span style="color: #B8DAE9">|</span>
                        </div>
                    </span>
                    <span class="mr-4">
                        <div>CONTACT</div>
                    </span>
                </div>
            </div>
        </div>

        <div class="abovefooter"></div>

    </div>
    <div class="container-fluid pt-5" style="background-color: #CCCCCC;color: black">

        <footer>
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex justify-center align-middle justify-content-center">
                        <img src="./assets/img/footericon.png" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <p>USA</p>
                    <p>353 Sacramento Str.</p>
                    <p>Suite 1800</p>
                    <p>San Francisco | CA 94111</p>
                </div>
                <div class="col-md-2">
                    <p>Kenya</p>
                    <p>iHub</p>
                    <p>Senteu Plaza | Kilimani</p>
                    <p>Nairobi</p>
                </div>
                <div class="col-md-2">
                    <p>Mali</p>
                    <p>Hamdallay AC200</p>
                    <p>Immeuble ABK2 | #102</p>
                    <p>Bamako</p>
                </div>
                <div class="col-md-2">
                    <p>South Africa</p>
                    <p>Workshop 17</p>
                    <p>32 Kloof Street</p>
                    <p>Cape Town | 8001</p>
                </div>
            </div>
        </footer>
    </div>

</div>
<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
