@extends('layouts.front')
@section('content')
    <section id="home" style="margin-top: 5em;margin-bottom: -20em" class="hero-section bg-blue hero-default-bg
    color-white">
        <div class="container">
            <div class="row align-items-center mt-4">

                <!-- column 1 starts -->
                <div class="col-12 col-md-6 dtr-sm-mb-30px">

                    <!-- Heading -->
                    <h1 style="color:#071e55;" class="dtr-mb-4 wow fadeInUp" data-wow-delay="0.4s">
                        Unlocking Potential through opportunity and entrepreneurship.
                    </h1>

                    <!-- Text -->
                    <p style="color: #7c8595" data-wow-delay="0.6s">
                        Emerging markerts offer the strongest investor returns in the coming decades.
                        Alievating poverty and creating value for investors go hand-in-hand.
                    </p>
                    <div class="btn btn-primary btn-lg" data-wow-delay="0.8s">
                        <a href="#impactsimulation" class="text-white"> Simulate Impact
                            <span>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-right wow fadeInRight" data-wow-delay="0.4s">
                    <iframe src="https://player.vimeo.com/video/334722367" width="100%" height="338"
                            frameborder="0"
                            allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="section-grey" id="about">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center margin-bottom-10">

                    <h2 class="section-title">Three Reasons for <strong><small>UNTAPPED</small></strong> Capital</h2>

                    {{--                    <p class="section-subtitle">Dicover how our amazing team can help your business.</p>--}}

                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

        <!--begin services-wrapper -->
        <div class="services-wrapper">

            <!--begin container -->
            <div class="container">

                <!--begin row -->
                <div class="d-flex justify-content-center">

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services blue">

                            <svg height="80px" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 128
                            160" x="0px"
                                 y="0px">
                                <title>Miscellaneous 17 final</title>
                                <path d="M24.87,27.2a2,2,0,0,0,0,2.83L42.53,47.7a2,2,0,0,0,2.83-2.83L27.69,27.2A2,2,0,0,0,24.87,27.2Z"/>
                                <path d="M81.95,36.95V12.28a2,2,0,1,0-4,0V36.95a2,2,0,0,0,4,0Z"/>
                                <path d="M50.94,1.52a2,2,0,1,0-3.88,1l6,24a2,2,0,1,0,3.88-1Z"/>
                                <path d="M24.57,72.8c6.28,9,6.23,13.06,6.19,17C30.46,118.44,50.31,127.29,62.1,128c.9.05,1.77.08,2.64.08a38.56,38.56,0,0,0,29-12.63l6.55-7.22.11-.13,3.25-3.59a9.06,9.06,0,0,0-4.5-15.26A8.14,8.14,0,0,0,92.2,79a8.38,8.38,0,0,0,.5-2.8,9,9,0,0,0-7.24-8.85L96.31,56.46a9.05,9.05,0,1,0-13-12.59C71.42,56.56,56.64,71,50.81,73.37c-3.4,1.4-4.22.31-6.85-4a31.62,31.62,0,0,0-7.16-8.9c-3.46-2.81-7.53-2.89-10.9-.22C22.09,63.26,21.54,68.44,24.57,72.8ZM97.22,93.06a5,5,0,0,1,3.57,1.48,5.09,5.09,0,0,1-.07,7.22l-3.17,3.49a4.6,4.6,0,0,1-5.18-.87l-.18-.19A4.63,4.63,0,0,1,91.81,98l5-5Zm-3-8.94a4.14,4.14,0,0,1,.24,5.62,2,2,0,0,0-.23.25l0,0-5.74,5.74a4.62,4.62,0,0,1-4.78-1l-.24-.24a4.67,4.67,0,0,1-.28-6.16c.8-.62,4.15-3.27,5.93-4.8A4.17,4.17,0,0,1,94.2,84.12Zm-7-11.51a5,5,0,0,1,1.48,3.57,6.33,6.33,0,0,1-2.1,4.22c-1.22,1.06-3.85,3.17-5.79,4.69a4.8,4.8,0,0,1-4.73-1.24l-.13-.13a4.86,4.86,0,0,1,0-6.87l4.7-4.7A5,5,0,0,1,87.21,72.6ZM28.39,63.34c1.92-1.52,3.85-1.46,5.89.19a27.89,27.89,0,0,1,6.26,7.86A21.25,21.25,0,0,0,44,76.14a2,2,0,0,0,.12.16c.17.18,4,4.37.1,10.46a2,2,0,0,0,3.37,2.15,13,13,0,0,0,1.84-11,11.37,11.37,0,0,0,2.88-.79c7.87-3.23,26.32-22.38,33.9-30.47a5,5,0,0,1,3.6-1.6,5.07,5.07,0,0,1,3.66,1.48,5.05,5.05,0,0,1,0,7.15L73.11,74a8.86,8.86,0,0,0,0,12.56l.11.11a8.78,8.78,0,0,0,5.11,2.51,8.7,8.7,0,0,0,2.28,8.17l.08.07.08.08A8.63,8.63,0,0,0,86.87,100a8.59,8.59,0,0,0,2.48,7l.15.17a8.68,8.68,0,0,0,4.21,2.32l-3,3.31-.08.09A35.08,35.08,0,0,1,62.34,124a31.27,31.27,0,0,1-14.44-5c.31,0,.63,0,.95,0l.85,0c5-.32,9.57-3.35,13.65-9a2,2,0,0,0-3.25-2.33c-3.33,4.64-6.9,7.12-10.62,7.37-5.19.34-9.18-3.81-9.24-3.87a2,2,0,0,0-.29-.25c-3.13-4.94-5.28-11.72-5.18-21.09.06-5.29-.42-10.07-6.91-19.35C26.35,68.36,25.94,65.3,28.39,63.34Z"/>
                                <polygon
                                        points="59.53 40.78 55.11 41.42 58.31 44.54 57.55 48.94 61.5 46.86 65.45 48.94 64.69 44.54 67.89 41.42 63.47 40.78 61.5 36.78 59.53 40.78"/>
                                <polygon
                                        points="65.96 16.73 67.31 19.77 68.91 16.84 72.22 16.5 69.93 14.08 70.63 10.82 67.62 12.25 64.73 10.58 65.16 13.89 62.68 16.12 65.96 16.73"/>
                                <polygon
                                        points="39.35 15.39 36.94 13.1 36.58 16.41 33.65 18 36.69 19.36 37.3 22.64 39.53 20.16 42.84 20.6 41.17 17.71 42.61 14.71 39.35 15.39"/>
                            </svg>

                            <h4>Easy</h4>

                            <p>Select the deal and track your investments on our platform.</p>

                        </div>

                    </div>
                    <!--end col-md-4 -->

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services red">

                            <svg height="80px" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                 xmlns:cc="http://creativecommons.org/ns#"
                                 xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                 xmlns:svg="http://www.w3.org/2000/svg"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                 xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px"
                                 y="0px" viewBox="0 0 100 125">
                                <g transform="translate(0,-952.36218)">
                                    <path style="font-size:medium;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;text-indent:0;text-align:start;text-decoration:none;line-height:normal;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;text-anchor:start;baseline-shift:baseline;opacity:1;color:#000000;fill:#000000;fill-opacity:1;stroke:none;stroke-width:3.99999905000000000;marker:none;visibility:visible;display:inline;overflow:visible;enable-background:accumulate;font-family:Sans;-inkscape-font-specification:Sans"
                                          d="M 49.84375 6 A 2.0001996 2.0001996 0 0 0 48.84375 6.375 C 39.856496 12.83922 29.379412 18.22506 11.8125 19.84375 A 2.0001996 2.0001996 0 0 0 10 21.84375 C 10 44.6695 14.148903 60.4164 21.21875 71.625 C 28.288597 82.8336 38.248684 89.34765 49.25 93.84375 A 2.0001996 2.0001996 0 0 0 50.75 93.84375 C 61.234352 89.55895 70.758705 83.4619 77.75 73.1875 C 84.741295 62.9131 89.171968 48.59302 89.90625 28.09375 A 2.0015253 2.0015253 0 1 0 85.90625 27.9375 C 85.190067 47.93152 80.898155 61.4429 74.4375 70.9375 C 68.143191 80.1876 59.715213 85.7364 50 89.8125 C 39.793257 85.5305 31.009943 79.6227 24.625 69.5 C 18.25867 59.4067 14.309412 44.86635 14.09375 23.53125 C 30.455026 21.69239 41.225856 16.50575 50 10.375 C 59.137682 16.75976 70.27716 22.22797 87.8125 23.84375 A 2.0087698 2.0087698 0 0 0 88.1875 19.84375 C 70.620588 18.22506 60.143504 12.83922 51.15625 6.375 A 2.0001996 2.0001996 0 0 0 49.84375 6 z M 67.21875 34.65625 A 2.0001995 2.0001995 0 0 0 65.90625 35.40625 L 47.15625 57.96875 L 38.84375 49.96875 A 2.0001995 2.0001995 0 1 0 36.0625 52.84375 L 45.9375 62.34375 A 2.0001995 2.0001995 0 0 0 48.84375 62.15625 L 68.96875 37.9375 A 2.0001995 2.0001995 0 0 0 67.21875 34.65625 z "
                                          transform="translate(0,952.36218)"/>
                                </g>
                            </svg>

                            <h4>Secure</h4>

                            <p>Principal secured by technology-tracked, high performing assets.</p>

                        </div>

                    </div>
                    <!--end col-md-4 -->

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services green">
                            <svg height="80px" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 100
                            125" x="0px"
                                 y="0px">
                                <title>86</title>
                                <g data-name="Group">
                                    <path data-name="Path"
                                          d="M37.4,31.1a2,2,0,0,0-2.6.3L7.2,61a2,2,0,1,0,2.9,2.7L36.6,35.4,53.7,47a2,2,0,0,0,2.6-.3l28-30.7V35.1a2,2,0,0,0,4,0V10.8h0V9.6h-.1V9.3H62a2,2,0,1,0,0,4H81.7L54.5,42.7Z"/>
                                    <path data-name="Path"
                                          d="M94.5,87.2H88V46.5a2,2,0,1,0-4,0V87.2H76V39.5a2,2,0,1,0-4,0V87.2H64V52.5a2,2,0,0,0-4,0V87.2H52V58.5a2,2,0,0,0-4,0V87.2H40V47.5a2,2,0,0,0-4,0V87.2H28V60.5a2,2,0,0,0-4,0V87.2H16V71.5a2,2,0,0,0-4,0V87.2H5.5a2,2,0,1,0,0,4h89a2,2,0,0,0,0-4Z"/>
                                </g>
                            </svg>

                            <h4>Growth</h4>

                            <p>Grow your capital and impact by reinvesting into new deals.</p>

                        </div>

                    </div>
                    <!--end col-md-4 -->

                </div>
                <!--end row -->
                <div class="d-flex justify-content-center bd-highlight mb-3">
                    <div>
                        <a class="btn btn-primary btn-lg" href="{{ route('register') }}">Get Started</a>
                    </div>
                </div>
            </div>
            <!--end container -->

        </div>
        <!--end services-wrapper -->

    </section>
    <div style="width: 100%;padding-left: 0;padding-right: 0">
        <map-component :categories='@json($assets)'></map-component>
    </div>
    <div style="margin-top:-100px;width: 100%;padding-left: 0;padding-right: 0;padding-top:3em;padding-bottom:3em; background-color: #f2f5f7">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="https://image.made-in-china.com/202f0j00CysEiJcznHgr/125cc-150cc-off-Road-Motorbike-TM125-2.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <p>Asset of leasing of motorbikes to support mototaxis in Uganda.</p>
                                    <p>Company: Zembo</p>
                                    <p>Country: Uganda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5 owl-carousel owl-theme">
                <div class="mr-3">
                    <div class="card shadow">
                        <img class="card-img-top"
                             src="https://image.made-in-china.com/202f0j00CysEiJcznHgr/125cc-150cc-off-Road-Motorbike-TM125-2.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Motorcycles</h4>
                            <p class="card-text">Unlocking the worlds opaque markerts</p>
                            <a href="{{  route('register')  }}" class="btn btn-primary btn-block">Invest</a>
                        </div>
                    </div>
                </div>
                <div class="mr-3">
                    <div class="card shadow">
                        <img class="card-img-top"
                             src="https://www.prepayment-meter.com/photo/pl14870579-smart_gprs_remote_water_meter_reading_muti_jet_residential_water_meter.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Smart Water Meter</h4>
                            <p class="card-text">Unlocking the worlds opaque markerts</p>
                            <a href="{{  route('register')  }}" class="btn btn-primary btn-block">Invest</a>
                        </div>
                    </div>
                </div>
                <div class="mr-3">
                    <div class="card shadow">
                        <img class="card-img-top"
                             src="https://www.tankhandel.de/media/image/product/80/md/2000-liter-2-achs-anhaenger-fuer-wasser-weidefass-wassertankanhaenger-wasseranhaenger-mobiler-wassertank-bewaesserungstank-viehtraenketank.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Irrigation System</h4>
                            <p class="card-text">Unlocking the worlds opaque markerts</p>
                            <a href="{{ route('register') }}" class="btn btn-primary btn-block">Invest</a>
                        </div>
                    </div>
                </div>
                <div class="mr-3">
                    <div class="card shadow">
                        <img class="card-img-top"
                             src="https://image.made-in-china.com/202f0j00CysEiJcznHgr/125cc-150cc-off-Road-Motorbike-TM125-2.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Another</h4>
                            <p class="card-text">Unlocking the worlds opaque markerts</p>
                            <a href="{{  route('register')  }}" class="btn btn-primary btn-block">Invest</a>
                        </div>
                    </div>
                </div>
                <div class="mr-3">
                    <div class="card shadow">
                        <img class="card-img-top"
                             src="https://www.prepayment-meter.com/photo/pl14870579-smart_gprs_remote_water_meter_reading_muti_jet_residential_water_meter.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Another 2</h4>
                            <p class="card-text">Unlocking the worlds opaque markerts</p>
                            <a href="{{  route('register')  }}" class="btn btn-primary btn-block">Invest</a>
                        </div>
                    </div>
                </div>
                <div class="mr-3">
                    <div class="card shadow">
                        <img class="card-img-top"
                             src="https://www.tankhandel.de/media/image/product/80/md/2000-liter-2-achs-anhaenger-fuer-wasser-weidefass-wassertankanhaenger-wasseranhaenger-mobiler-wassertank-bewaesserungstank-viehtraenketank.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Another 3</h4>
                            <p class="card-text">Unlocking the worlds opaque markerts</p>
                            <a href="{{ route('register') }}" class="btn btn-primary btn-block">Invest</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="home-section" id="home">

        <div class="home-section-overlay"></div>

        <!--begin container -->
        <div class="container" id="impactsimulation">

            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <calculateimpact></calculateimpact>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end container -->

    </section>
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
    <canvas id="myChart" width="400" height="400"></canvas>

@endsection