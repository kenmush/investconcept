@extends('layouts.landing')
@section('content')

    <!-- banner begin -->
    <div class="cta">
        <div class="container mb-5">
            <div class="cta-bg">
                <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 d-xl-flex d-lg-flex d-block
                        align-items-center">
                        <div class="cta-text">
                            <h2>{{$landingPageData['tag_line'] ?? ''}}</h2>
                            <p>{{$landingPageData['tag_line_description_one'] ?? ''}}</p>
                            <p class="marked">{{$landingPageData['tag_line_description_two'] ?? ''}}</p>
                            <a href="#simulateimpact" class="btn-hyipox-medium cta-btn">Simulate your Impact</a>
                        </div>
                    </div>
                    <div class="col-xl-6 shadow col-lg-6 d-xl-flex d-lg-flex justify-content-end d-block
                        align-items-center">
                        {{--                        <video style="border-radius: 10px" poster="{{asset('trialimae.jpg')}}" autoplay width="100%"--}}
                        {{--                               height="100%"--}}
                        {{--                               controls>--}}
                        {{--                            <source src="" type="video/mp4">--}}
                        {{--                            <source src="" type="video/ogg">--}}
                        {{--                            Your browser does not support the video tag.--}}
                        {{--                        </video>--}}

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
                                <h4 class="title">{{$landingPageData['keyword_one'] ?? ''}}</h4>
                                <p>{{$landingPageData['keyword_one_description'] ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-system">
                            <div class="part-icon">
                                <img src="{{ asset('transparent.svg') }}" alt="">
                            </div>
                            <div class="part-text">
                                <h4 class="title">{{$landingPageData['keyword_two'] ?? ''}}</h4>
                                <p>{{$landingPageData['keyword_two_description'] ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-system">
                            <div class="part-icon">
                                <img src="{{ asset('attractive.svg') }}" alt="">
                            </div>
                            <div class="part-text">
                                <h4 class="title">{{$landingPageData['keyword_three'] ?? ''}}</h4>
                                <p>{{$landingPageData['keyword_three_description'] ?? ''}}</p>
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
                <h2>Your <span class="special">impact</span> in real-time</h2>
            </div>
            <map-component :categories='@json($assets)'></map-component>
        </div>
    </div>
    <div class="cta-assets" style="margin-top: -140px" id="assets">
        <div class="container">
            <div class="cta-assets-bg">
                <div class="row text-center justify-content-center mb-4">
                    <a style="margin-top: -100px" href="/register" class="btn-hyipox-medium cta-btn">Get Started</a>
                </div>

            </div>
        </div>
        <div class="container-fluid">
            <div class="d-flex justify-content-center">
                <h2 class="asset-title-new">Assets</h2>
            </div>
            <div class="row">
                <div class="col-12 d-xl-flex d-lg-flex justify-content-end d-block align-items-center">
                    <showassets></showassets>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div id="simulateimpact">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title mt-5">
                        <h2>
                            Calculate your<span class="special" > impact</span>
                        </h2>
                        <hr>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <impactcalculation></impactcalculation>
            </div>
        </div>
    </div>

    <!-- blog begin -->
    <div class="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title">
                        {{--                                <span class="sub-title">--}}
                        {{--                                    Untapped Inc News--}}
                        {{--                                </span>--}}
                        <h2>
                            <span class="special">Untapped Inc News</span>
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
                            <img src="https://miro.medium.com/max/499/1*ObqRCcBi5oN40lh6fGZ6YQ.png" alt=""
                                 style="object-fit: cover"
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