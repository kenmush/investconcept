<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/meanmenu.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/fonts/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/nice-select.min.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.min.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css') }}">
    <title>Untapped Invest</title>
    <script src="https://unpkg.com/d3@6/dist/d3.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/d3-sunburst@5/sunburst.js" type="text/javascript"></script>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>
<body>


<div class="navbar-area sticky-top">

    <div class="mobile-nav">
        <a href="#" class="logo">
            <img src="https://untapped-global.com/wp-content/themes/yootheme/cache/untapped-logo-website1-623de87f.png"
                 alt="Logo">
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="https://untapped-global.com/wp-content/themes/yootheme/cache/untapped-logo-website1-623de87f.png"
                         alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav pull-right">
                        <li class="nav-item">
                            <a href="#" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">How It Works</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Engage</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <div class="side-nav">
                        <a class="consultant-btn" href="{{ route('login') }}">
                            Login
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


<div class="banner-area ">
    <div class="banner-shape">
        <img src="{{ asset('background.png') }}" alt="Shape" style="background: #C33764;">
    </div>
    <div class="banner-slider owl-theme owl-carousel">
        <div class="banner-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <h1 style="font-family: Arial, Baskerville, monospace">Start building where it counts.</h1>
                            <p style="font-size: 24px">Over $1m deployed, trackable in real time, 100% transparent.</p>
                            <p style="font-size: 22px">The world’s most sophisticated community of frontier market
                                investors.</p>
                            <div class="banner-btn-area">
                                <a class="banner-btn common-btn" href="#">
                                    Get Started
                                    <span></span>
                                </a>

                            </div>
                        </div>
                        {{--                        <div class="banner-slider-img">--}}
                        {{--                            <img src="assets/img/banner/banner-main1.png" alt="Banner">--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="works-area pt-100 pb-70">
    <div class="container">

        <div class="section-title">
            {{--            <span class="sub-title"></span>--}}
            <h2 style="font-family: 'Times New Roman'">How It Works</h2>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <p>
                    <span class="font-weight-bold">
                        <strong>We’re a little different.</strong>
                    </span>
                    When we bring a company into our portfolio, we’re only interested in financing the assets that drive
                    their business. It could be an electric motorcycle on the streets of
                    Kampala, an industrial cooling unit at a Bamako dairy,
                </p>
                <p>
                    or an irrigation pump in Kenya’s Rift Valley.
                    These machines are digitally connected
                </p>
                <p>
                    – we watch them making money day after day, and so can
                    you!
                </p>
                <p>Frontier market investing has never been so safe, nor so easy.</p>

                <p>Untapped invests exclusively in Small to Medium Enterprises (SMEs) that have been vetted by our
                    Investment Team and assessed in the field to exacting standards of transparency, social impact, and
                    scale-readiness. By selecting the most dynamic, viable, and capital-hungry businesses to work with,
                    we ensure that resources are going to the right places and allow you, the investor, to participate
                    in a new world of exciting opportunities.
                </p>
                <p>
                    We create wealth with the doers and the makers of tomorrow’s world for a more equitable future.
                    Entrepreneurs and their businesses are the lifeblood of any economy – even more so in frontier
                    markets. We – you – are building new business where it matters most.
                </p>
                <p class="float-left">
                    <span class="font-weight-bold">
                        <strong>Be a little different.</strong>
                    </span>

                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('maneno.png') }}" alt="">

            </div>
        </div>
    </div>

</section>
<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="#">
                            <img src="https://untapped-global.com/wp-content/themes/yootheme/cache/untapped-logo-website1-623de87f.png"
                                 alt="Logo">
                        </a>
                        <p></p>
                        <ul>
                            <li>
                                <i class='bx bx-current-location'></i>
                                <span>Address:</span>
                                <a href="#">iHub, Senteu Plaza, Kilimani, Nairobi.</a>
                            </li>
                            <li>
                                <i class='bx bx-current-location'></i>
                                <span>Address:</span>
                                <a href="#">353 Sacramento St., San Francisco.</a>
                            </li>
                            <li>
                                <i class='bx bx-current-location'></i>
                                <span>Address:</span>
                                <a href="#">Hamdallay,Bamako.</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <a href="#">Untapped Global</a>
                            </li>
                            <li>
                                <a href="#">Untapped Engage</a>
                            </li>
                            <li>
                                <a href="#">The Nest</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <h3>Newsletter</h3>
                    <div class="footer-newsletter">
                        <p>Join our newsletter for the latest in frontier markerts</p>
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter email address" name="EMAIL"
                                   required autocomplete="off">
                            <button class="btn common-btn" type="submit">
                                Subscribe
                                <span></span>
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>What We Do</h3>
                        <ul>
                            <li>
                                <a href="#">The Nest</a>
                            </li>
                            <li>
                                <a href="#">Smart Asset Financing</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="copyright-area">
    <div class="container">
        <div class="copyright-item">
            <p>Copyright ©{{ date('Y') }} Untapped.</p>
        </div>
    </div>
</div>


<div class="go-top">
    <i class='bx bxs-up-arrow'></i>
    <i class='bx bxs-up-arrow'></i>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('front/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('front/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('front/assets/js/form-validator.min.js') }}"></script>

<script src="{{ asset('front/assets/js/contact-form-script.js') }}"></script>

<script src="{{ asset('front/assets/js/jquery.ajaxchimp.min.js') }}"></script>

<script src="{{ asset('front/assets/js/jquery.meanmenu.js') }}"></script>

<script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('front/assets/js/wow.min.js') }}"></script>

<script src="{{ asset('front/assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.appear.min.js') }}"></script>

<script src="{{ asset('front/assets/js/jquery.nice-select.min.js') }}"></script>

<script src="{{ asset('front/assets/js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('front/assets/js/custom.js') }}"></script>

<script type="text/javascript">
    (function () {
        var sunburst = new Sunburst({
            colors: {
                "home": "#5687d1",
                "product": "#7b615c",
                "search": "#de783b",
                "account": "#6ab975",
                "other": "#a173d1",
                "end": "#bbbbbb"
            }
        });
        sunburst.setData([
            ["account-account-end", 31],
        ]);
    })();
</script>
</body>

</html>