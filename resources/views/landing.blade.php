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
            <span style="color: #DBDCDC" class="font-weight-bold align-items-baseline">About Us</span>
            <span style="color: #DBDCDC" class="font-weight-bold align-items-baseline">|</span>
            <span style="color: #DBDCDC" class="font-weight-bold align-items-baseline">Login</span>
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
            <div class="row">
                <img style="border-radius: 30px; z-index: 90; height:497px;"
                     src="{{ asset('untapped/videoimage.png') }}" alt="">
                <img style="position: absolute;z-index: 96;top:0;right:0"
                     src="{{ asset('untapped/overlaycirle.svg')  }}"
                     alt="">

            </div>
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
                <div class="container-fluid" style="background: #DBDCDC;height: 500px;margin-top: -2px;
                position:relative;">

                    <img style="position:absolute;top:0;right: 0px" src="{{ asset('untapped/motorbikemission.svg') }}"
                         alt="">
                    <img style="position:absolute;left: 40px;bottom:250px" src="{{ asset('untapped/mission.svg') }}"
                         alt="">
                    <div class="container ">
                        <h4 style="font: Bold 70px/92px Roboto;color: #565C59;padding-bottom: 16px">Our Mission</h4>
                        <div class="text-center col-md-8 offset-2">
                            <p style="color: #565C59;font: Bold 20px/26px Roboto;">
                                Untapped’s mission is to help entrepreneurs in frontier markets solve everyday problems
                                with
                                the right technology and access to capital.
                            </p>
                            <p style="color: #565C59;font: Bold 20px/26px Roboto;">Our innovative model combines asset
                                financing
                                with digital management to help small businesses get equipment and materials so they can
                                offer more services and grow.</p>
                            <p style="color: #565C59;font: Bold 20px/26px Roboto;"> Having these assets help them make
                                more money while offering
                                life-changing services. Everything is done with mobile money through our digital
                                platform.
                                Money and data flow back to investors who see returns and large-scale impact for their
                                investment.</p>
                        </div>
                    </div>
                </div>
                <div style="background-image: url({{ asset('untapped/btmcrner.jpg') }});
                    background-size: 1920px;
                    margin-top: -3px;
                    background-repeat: no-repeat;
                    height: 108px;">
                </div>
            </div>
        </div>

        <div class="container-fluid" style="position:relative;">

            <div style="position: absolute;bottom: 15px">
                <img src="{{ asset('untapped/ourimpact.svg') }}" alt="">
            </div>

            <div class="container">
                <h4 style="font: Bold 70px/92px Roboto;color: #FFFFFF;">Our impact</h4>
<div class="col-md-8 offset-2">
    <div class="row d-flex justify-content-center text-center"
         style="font: Bold 20px/26px Roboto; color: #FFFFFF;">
        <p class="landing-page-text">We have supported entrepreneurs and projects through East Africa, West
            Africa, and the Caribbean (Haiti), supporting over 500 entrepreneurs and small businesses.</p>
        <p class="landing-page-text">
            They
            generate over $2 million in incremental revenue each year for local communities while delivering
            essential services to over 200,000 people
        </p>
    </div>

</div>
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
                <div class="container-fluid" style="background: #DBDCDC;margin-top: -2px;
                position:relative;">

                    <img style="position:absolute;top:0;right: 0px" src="{{ asset('untapped/inthepress.svg') }}"
                         alt="">

                    <div class="container ">
                        <h4 style="font: Bold 70px/92px Roboto;color: #565C59;padding-bottom: 16px">In the Press</h4>
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{ asset('untapped/disruptafrica.png') }}" alt="">
                            </div>
                            <div class="col-md-10 mt-8">
                                <h4 style="color: #565C59;font: Bold 20px/26px Roboto;">AFRICAN STARTUPS SECURE CAPITAL
                                    THROUGH THE NEST, A
                                    DIGITAL “SHARK
                                    TANK” </h4>
                                <p style="color: #565C59;font: semi-condensed 20px/26px Roboto;">Untapped
                                    sponsors and operates The Nest to promote investments from angel investors
                                    worldwide, with a particular focus on Africa. Read more here.</p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 4rem">
                            <div class="col-md-2">
                                <img src="{{ asset('untapped/wallstreet.png') }}" alt="">
                            </div>
                            <div class="col-md-10 mt-8">
                                <h4 style="color: #565C59;font: Bold 20px/26px Roboto;">AFRICAN STARTUPS SECURE CAPITAL
                                    DLOHAITI TAPS VC FUNDING AS IT BRINGS HAITI CLEAN WATER AND JOBS </h4>
                                <p style="color: #565C59;font: semi-condensed 20px/26px Roboto;">
                                    dloHaiti was
                                    excited to be a part of Wall Street Journal’s Venture Capital blog. Read here about
                                    how our company is working to bring an innovative business model to Haiti to help
                                    address the need for clean drinking water.
                                </p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 4rem">
                            <div class="col-md-2">
                                <img src="{{ asset('untapped/markertlinks.svg') }}" alt="">
                            </div>
                            <div class="col-md-10 mt-8">
                                <h4 style="color: #565C59;font: Bold 20px/26px Roboto;">MEET THE ENTREPRENEUR WHO’S
                                    MAKING CLEAN WATER ACCESSIBLE ACROSS HAITI </h4>
                                <p style="color: #565C59;font: semi-condensed 20px/26px Roboto;">
                                    Jim Chu, the
                                    founder and CEO of dloHaiti, is bringing safe, affordable water to thousands in
                                    Haiti. Chu recently participated in diaspora engagement roadshows hosted by USAID
                                    INVEST, which encouraged members of the Haitian diaspora to invest in the country’s
                                    private sector. Read more here
                                </p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 4rem">
                            <div class="col-md-2">
                                <img src="{{ asset('untapped/devex.png') }}" alt="">
                            </div>
                            <div class="col-md-10 mt-8">
                                <h4 style="color: #565C59;font: Bold 20px/26px Roboto;">POLITICAL TURMOIL AND IMPACT ON
                                    BUSINESS IN HAITI</h4>
                                <p style="color: #565C59;font: semi-condensed 20px/26px Roboto;">
                                    Devex highlights the challenges
                                    and opportunities of working admist the political turmoil in Haiti in this article.
                                </p>
                                <p>
                                    “The idea for us is that we will take our model globally. Haiti is representative of
                                    many developing countries, with its lack of public infrastructure, its dynamic
                                    informal economy, and its heavy reliance on water trucking. And Haiti is the proving
                                    ground for a business model that can be successful in a number of developing country
                                    environments.” Jim Chu
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background-image: url({{ asset('untapped/btmcrner.jpg') }});
                    background-size: 1920px;
                    margin-top: -3px;
                    background-repeat: no-repeat;
                    height: 108px;">
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
