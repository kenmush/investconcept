@extends('layouts.landing')
@section('content')

    <!-- banner begin -->
    <div class="cta">
        <div class="container mb-5">
            <div class="cta-bg">
                <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-xl-flex d-lg-flex d-block
                        align-items-center">
                        <div class="cta-text">
                            <h2>Grow your wealth with others. </h2>
                            <p>Contribute to emerging markets development while making a healthy return</p>
                            <p class="marked">Emerging markets offer the strongest investor returns in the coming
                                decades. Alleviating poverty and creating value for investors go hand-in-hand.</p>
                            <a href="#simulateimpact" class="btn-hyipox-medium cta-btn">Simulate your Impact</a>
                        </div>
                    </div>
                    <div class="col-xl-6 shadow col-lg-6 d-xl-flex d-lg-flex justify-content-end d-block
                        align-items-center">
                        <video style="border-radius: 10px" poster="{{asset('trialimae.jpg')}}" autoplay width="100%"
                               height="100%"
                               controls>
                            <source src="" type="video/mp4">
                            <source src="" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>

                    </div>
                </div>
            </div>
        </div>
    </div>        <!-- banner end -->

    <!-- about begin -->
    <div class="about" style="margin-top: 10px">
        <div class="container">
            <div class="how-to-works">
                <div class="row justify-content-center justify-content-sm-center justify-content-md-start">
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-system">
                            <div class="part-icon">
                                <img src="{{ asset('impact.svg') }}" alt="">
                            </div>
                            <div class="part-text">
                                <h4 class="title">Impactful</h4>
                                <p>Support emerging market entrepreneurs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-system">
                            <div class="part-icon">
                                <img src="{{ asset('transparent.svg') }}" alt="">
                            </div>
                            <div class="part-text">
                                <h4 class="title">Transparent</h4>
                                <p>Keep track of your impact</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-system">
                            <div class="part-icon">
                                <img src="{{ asset('attractive.svg') }}" alt="">
                            </div>
                            <div class="part-text">
                                <h4 class="title">Attractive</h4>
                                <p>Build wealth</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center justify-content-sm-center">
                    <a href="{{ route('register') }}" class="btn-hyipox-medium cta-btn">Get Started</a>
                </div>
            </div>
        </div>
        <div style="width: 100%;padding-left: 10px;padding-right: 10px;margin-top: -50px">
            <div class="part-text text-center">
                <h2>Your <span class="special">impact</span> in realtime</h2>
            </div>
            <map-component :categories='@json($assets)'></map-component>
        </div>
    </div>
    <div class="cta" style="margin-top: -140px" id="assets">
        <div class="container">
            <div class="cta-bg">
                <div class="row text-center justify-content-center mb-4">
                    <a href="/register" class="btn-hyipox-medium cta-btn">Get Started</a>
                </div>
                <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">

                    <div class="col-12 d-xl-flex d-lg-flex justify-content-end d-block align-items-center">
                        <showassets></showassets>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner" style="padding-bottom: 253.5px;padding-top: 0 !important;" id="simulateimpact">
        <div class="container">
            <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-center justify-content-sm-center">

                <div class="col-xl-12 ">
                    <div class="profit-calculator">
                        <div class="calc-header">
                            <h3 class="title text-center">Calculate <span class="special"> your return and
                                        impact</span></h3>
                        </div>
                        <calculateimpact></calculateimpact>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pricing-plan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title">
                        {{--                                <span class="sub-title">--}}
                        {{--                                    Untapped Capital--}}
                        {{--                                </span>--}}
                        <h2>
                            <span class="special">Our Assets</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="thead-dark">
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

    <!-- blog begin -->
    <div class="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title">
                                <span class="sub-title">
                                    Untapped Capital News
                                </span>
                        <h2>
                            Read the<span class="special"> News</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                    <div class="single-news">
                        <div class="part-img">
                            <img src="https://i1.wp.com/techpoint.africa/wp-content/uploads/2020/09/WhatsApp-Image-2020-09-28-at-8.53.59-AM.jpeg?resize=1024%2C576&ssl=1"
                                 alt="">
                        </div>
                        <div class="part-text">
                            <a href="https://techpoint.africa/2020/09/28/the-nest-a-zoom-shark-tank-facilitates-more-than-2m-in-commitments-for-more-than-20-startups-in-africa-and-asia/"
                               class="title">The Nest, A Zoom Shark Tank facilitates more than $2M in
                                commitments for more than 20 Startups in Africa and Asia
                            </a>
                            <p>
                                {{ \Illuminate\Support\Str::words("When the worldwide COVID19 lockdown went into effect in February 2020 the challenges of
                                fundraising increased exponentially. Entrepreneurs, especially in emerging markets could
                                not meet investors due to travel restrictions. Amid this uncertainty, The Nest, an
                                online Zoom based shark tank, was born.",28) }}
                            </p>
                            <a href="https://techpoint.africa/2020/09/28/the-nest-a-zoom-shark-tank-facilitates-more-than-2m-in-commitments-for-more-than-20-startups-in-africa-and-asia/"
                               class="read-more-btn">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                    <div class="single-news">
                        <div class="part-img">
                            <img src="https://miro.medium.com/max/563/1*6pnTRlxJEPgZwc4G0hJhsQ.jpeg"
                                 style="object-fit: cover" height="200px"
                                 alt="">
                        </div>
                        <div class="part-text">
                            <a href="https://medium.com/@findthenest/trailblazers-in-emerging-markets-haresh-aswani-50b747bc2856"
                               class="title">Trailblazers In Emerging Markets- Haresh Aswani</a>
                            <p>Haresh Aswani is the Managing Director — Africa for the Tolaram group. The Tolaram Group
                                is a family-owned Singaporean conglomerate that started out in Indonesia in 1948 before
                                eventually setting up in Africa where it has gone on to make it’s over $1 Bn revenue in
                                cereals, noodles, and infrastructure and most recently fintech.</p>
                            <a href="https://medium.com/@findthenest/trailblazers-in-emerging-markets-haresh-aswani-50b747bc2856"
                               class="read-more-btn">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                    <div class="single-news">
                        <div class="part-img">
                            <img src="https://miro.medium.com/max/499/1*ObqRCcBi5oN40lh6fGZ6YQ.png" alt="" style="object-fit: cover"
                                 height="200px">
                        </div>
                        <div class="part-text">
                            <a href="https://medium.com/@findthenest/impact-investing-a-conversation-with-kanini-mutooni-205157f2142"
                               class="title">Impact Investing: A Conversation With Kanini Mutooni.
                            </a>
                            <p>Kanini Mutooni is a Managing Director at Draper Richards Kaplan, a Venture Philanthropy
                                institution focused on investing in global early stage entrepreneurs creating impact.
                                She is also a Senior Adviser for Toniic, the global action network for impact investors
                                with over 300 asset owners representing over $16b in investible wealth. </p>
                            <a href="https://medium.com/@findthenest/impact-investing-a-conversation-with-kanini-mutooni-205157f2142"
                               class="read-more-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->

@endsection