<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('front/assets/css/ayad.css') }}">

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
    <style>
        .newmenu span {
            display: block;
            background: #fff;
            height: 4px;
            margin-top: 30px;
            position: relative;
            top: -10px;
            border-radius: 3px;
        }

        .hidemenu {
            visibility: hidden
        }
        .showmenu{
            visibility: visible;
        }
    </style>
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
                    <ul class="navbar-nav pull-right hidemenu" id="togglemenuitems">
                        <li class="nav-item">
                            <a href="https://untapped-global.com/mission/#mission" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://untapped-global.com/process/" class="nav-link">How It Works</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://untapped-global.com/engage/" class="nav-link">Engage</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://untapped-global.com/the-5-2-trillion-vc-blindspot/" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <div class="side-nav" style="display:flex">
                        <a class="consultant-btn" href="{{ route('login') }}">
                            Login
                        </a>
                        <div style="width: 35px;height: 30px;margin-top: 10px;margin-left: 10px" onclick="toggleMenu()">
                            <a  class="pl-2 newmenu" id="toggleMenu">
                                <span><span><span></span></span></span>
                            </a>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="banner-area ">
    <div class="banner-shape">
        <img src="https://untapped-global.com/wp-content/themes/yootheme/cache/header12-scaled-c1b91296.jpeg"
             alt="Shape">
    </div>
    <div class="banner-slider owl-theme owl-carousel">
        <div class="banner-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <h1 style="font-family: Arial, Baskerville, monospace" class="pt-10">Start building where
                                it counts.</h1>
                            <p style="font-size: 24px" class="mt-5">
                                Over $1M invested, all trackable in real time and
                                100% transparent.
                            </p>
                            <p style="font-size: 22px" class="mt-3">Join the world’s most sophisticated community of
                                investors
                                supporting frontier market entrepreneurs.</p>
                            <div class="banner-btn-area mt-5">
                                <a class="banner-btn common-btn" href="#">
                                    Get Started
                                    <span></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="works-area pt-100">
    <div class="container-fluid">
        <div class="section-title">
            <h2 style="font-family: 'Times New Roman'">How It Works</h2>
        </div>
        <div class="row">
            <div class="col-md-12  ">
                <div class="row">
                    <div class="col-md-8 text-center">
                        <div class="col-md-9 offset-2 ">
                            <p>
                    <span class="font-weight-bold text-justify">
                        <strong>We’re a little different.</strong>
                    </span>
                                When we bring a company into our portfolio, we are only interested in financing the
                                assets that drive their business. It could be an electric motorcycle delivering goods on
                                the streets of Kampala, an industrial cooling unit at a Bamako dairy, or an irrigation
                                pump in Kenya’s Rift Valley. With our Smart Asset Financing technology(&trade;) , we track
                                these assets and only make returns as their operators do. For you, the investor, this
                                means unparalleled insight into how your money is working on the ground as you access
                                our curated private offering. Frontier market investing has never been so safe, nor so
                                easy.
                            </p>
                            <p>
                                By selecting the most dynamic, viable, and capital-hungry businesses across Africa, the
                                Caribbean, and Southeast Asia, we ensure that resources are reaching those with the
                                local knowledge to drive real change. Untapped invests exclusively in Small to Medium
                                Enterprises (SMEs) that show real, substantive innovation. Our team assesses prospects
                                quantitatively and in the field to exacting standards of transparency, social impact,
                                and scale-readiness. Creating wealth with the makers and the do-ers of tomorrow’s world,
                                each new dollar counts towards a more equitable future for all. Untapped Global helps
                                you make it count - in real time.
                            </p>

                            <p class="float-left">
                    <span class="font-weight-bold">
                        <strong>Be a little different.</strong>
                    </span>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 m-0 p-0">
                        <img src="{{ asset('maneno.png') }}" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="works-area pt-100 " style="overflow: hidden">
    <div class="container-fluid">
        <div class="uk-section-secondary uk-section uk-padding-remove-bottom">


            <div class="uk-container">

                <div class="tm-grid-expand uk-child-width-1-1 uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                    <div class="uk-first-column">


                        <div class="uk-margin uk-text-center">
                            <img class="el-image" alt=""
                                 data-src="https://untapped-global.com/wp-content/themes/yootheme/cache/UNTAPPED-INVESTERS-LOGO-21b594eb.png"
                                 data-srcset="/wp-content/themes/yootheme/cache/UNTAPPED-INVESTERS-LOGO-21b594eb.png 356w, /wp-content/themes/yootheme/cache/UNTAPPED-INVESTERS-LOGO-2f043955.png 594w"
                                 data-sizes="(min-width: 356px) 356px" data-width="356" data-height="100" uk-img=""
                                 sizes="(min-width: 356px) 356px"
                                 srcset="/wp-content/themes/yootheme/cache/UNTAPPED-INVESTERS-LOGO-21b594eb.png 356w, /wp-content/themes/yootheme/cache/UNTAPPED-INVESTERS-LOGO-2f043955.png 594w"
                                 src="https://untapped-global.com/wp-content/themes/yootheme/cache/UNTAPPED-INVESTERS-LOGO-21b594eb.png">

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section-secondary uk-section uk-padding-remove-top">
            <div class="uk-container">

                <div class="tm-grid-expand uk-child-width-1-1 uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                    <div class="uk-first-column">


                        <div class="uk-margin uk-text-center">
                            <div class="uk-child-width-1-3 uk-child-width-1-3@m uk-child-width-1-4@l uk-grid uk-flex-top uk-flex-wrap-top"
                                 uk-grid="masonry: 1; parallax: 390;" style="padding-bottom: 390px; height: 663px;">
                                <div class="uk-first-column" style="transform: translateY(18.922px);">
                                    <div class="uk-light">
                                        <a class="el-item uk-inline-clip uk-transition-toggle uk-link-toggle" tabindex="0"
                                           href="https://untappedglobal.medium.com/angel-investor-spotlight-eric-klose-e68daeb4809"
                                           target="_blank">

                                            <img class="el-image" alt=""
                                                 data-src="/wp-content/themes/yootheme/cache/Artboard-55-copy-3-9acb97a3.png"
                                                 data-srcset="/wp-content/themes/yootheme/cache/Artboard-55-copy-3-8e5efd98.png 768w, /wp-content/themes/yootheme/cache/Artboard-55-copy-3-9acb97a3.png 800w"
                                                 data-sizes="(min-width: 800px) 800px" data-width="800" data-height="706"
                                                 uk-img="" sizes="(min-width: 800px) 800px"
                                                 srcset="/wp-content/themes/yootheme/cache/Artboard-55-copy-3-8e5efd98.png 768w, /wp-content/themes/yootheme/cache/Artboard-55-copy-3-9acb97a3.png 800w"
                                                 src="https://untapped-global.com/wp-content/themes/yootheme/cache/Artboard-55-copy-3-9acb97a3.png">
                                            <div class="uk-overlay-primary uk-transition-fade uk-position-cover"></div>

                                            <div class="uk-position-center">
                                                <div class="uk-overlay uk-transition-fade uk-margin-remove-first-child">


                                                    <div class="el-content uk-panel uk-transition-fade uk-margin-top"><p
                                                                style="color: #ffffff; text-align: center;font-size:14px">
                                                            Impact investors like <span
                                                                    style="color: #ee852d;">Eric Klose </span>who, after
                                                            success at Wayfair, dedicate<br>their second careers to making
                                                            an impact in Africa</p>

                                                        <span style="font-size:12px; color:#B8DAE9; text-decoration:none;">read more</span>
                                                    </div>

                                                </div>
                                            </div>


                                        </a>
                                    </div>
                                </div>
                                <div style="transform: translateY(151.376px);">
                                    <div class="uk-light">
                                        <a class="el-item uk-inline-clip uk-transition-toggle uk-link-toggle" tabindex="0"
                                           href="https://www.youtube.com/watch?v=15Xu-lZz6zU&amp;feature=youtu.be"
                                           target="_blank">

                                            <img class="el-image" alt=""
                                                 data-src="/wp-content/themes/yootheme/cache/Artboard-55-copy-04a64ae9.png"
                                                 data-srcset="/wp-content/themes/yootheme/cache/Artboard-55-copy-01541a2b.png 768w, /wp-content/themes/yootheme/cache/Artboard-55-copy-04a64ae9.png 800w"
                                                 data-sizes="(min-width: 800px) 800px" data-width="800" data-height="707"
                                                 uk-img="" sizes="(min-width: 800px) 800px"
                                                 srcset="/wp-content/themes/yootheme/cache/Artboard-55-copy-01541a2b.png 768w, /wp-content/themes/yootheme/cache/Artboard-55-copy-04a64ae9.png 800w"
                                                 src="https://untapped-global.com/wp-content/themes/yootheme/cache/Artboard-55-copy-04a64ae9.png">
                                            <div class="uk-overlay-primary uk-transition-fade uk-position-cover"></div>

                                            <div class="uk-position-center">
                                                <div class="uk-overlay uk-transition-fade uk-margin-remove-first-child">


                                                    <div class="el-content uk-panel uk-transition-fade uk-margin-top"><p
                                                                style="color: #ffffff; text-align: center;font-size:14px">
                                                            Smallholder farmers in Kenya like <span style="color: #ee852d;">Nicholas Mutisya</span>
                                                            afford to grow more through mechanized, solar-powered irrigation
                                                            paid for as he makes more from his crops</p>
                                                        <span style="font-size:12px; color:#B8DAE9; text-decoration:none;">
                                                        read more
                                                    </span>
                                                    </div>

                                                </div>
                                            </div>


                                        </a>
                                    </div>
                                </div>
                                <div style="transform: translateY(18.922px);">
                                    <div class="uk-light">
                                        <a class="el-item uk-inline-clip uk-transition-toggle uk-link-toggle" tabindex="0"
                                           href="https://untappedglobal.medium.com/meet-the-entrepreneur-kimberly-mwende-transforming-access-to-purified-water-in-kenya-a50dc672bfa2"
                                           target="_blank">

                                            <img class="el-image" alt=""
                                                 data-src="/wp-content/themes/yootheme/cache/Artboard-55-a59a4a2c.png"
                                                 data-srcset="/wp-content/themes/yootheme/cache/Artboard-55-9a4db539.png 768w, /wp-content/themes/yootheme/cache/Artboard-55-a59a4a2c.png 800w"
                                                 data-sizes="(min-width: 800px) 800px" data-width="800" data-height="707"
                                                 uk-img="" sizes="(min-width: 800px) 800px"
                                                 srcset="/wp-content/themes/yootheme/cache/Artboard-55-9a4db539.png 768w, /wp-content/themes/yootheme/cache/Artboard-55-a59a4a2c.png 800w"
                                                 src="https://untapped-global.com/wp-content/themes/yootheme/cache/Artboard-55-a59a4a2c.png">
                                            <div class="uk-overlay-primary uk-transition-fade uk-position-cover"></div>

                                            <div class="uk-position-center">
                                                <div class="uk-overlay uk-transition-fade uk-margin-remove-first-child">


                                                    <div class="el-content uk-panel uk-transition-fade uk-margin-top"><p
                                                                style="color: #ffffff; text-align: center;font-size:14px">
                                                            Local entrepreneurs like <span style="color: #ee852d;">Kimberley Mwende </span>who
                                                            take the initiative to start a safe drinking water business to
                                                            serve her community.</p>
                                                        <span style="font-size:12px; color:#B8DAE9">read more</span></div>

                                                </div>
                                            </div>


                                        </a>
                                    </div>
                                </div>
                                <div class="uk-grid-margin uk-first-column" style="transform: translateY(17.922px);">
                                    <div class="uk-light">
                                        <a class="el-item uk-inline-clip uk-transition-toggle uk-link-toggle" tabindex="0"
                                           href="http://www.teliman.ml" target="_blank">

                                            <img class="el-image" alt=""
                                                 data-src="/wp-content/themes/yootheme/cache/Artboard-55-copy-4-800094c1.png"
                                                 data-srcset="/wp-content/themes/yootheme/cache/Artboard-55-copy-4-1cb84701.png 768w, /wp-content/themes/yootheme/cache/Artboard-55-copy-4-800094c1.png 800w"
                                                 data-sizes="(min-width: 800px) 800px" data-width="800" data-height="707"
                                                 uk-img="" sizes="(min-width: 800px) 800px"
                                                 srcset="/wp-content/themes/yootheme/cache/Artboard-55-copy-4-1cb84701.png 768w, /wp-content/themes/yootheme/cache/Artboard-55-copy-4-800094c1.png 800w"
                                                 src="https://untapped-global.com/wp-content/themes/yootheme/cache/Artboard-55-copy-4-800094c1.png">
                                            <div class="uk-overlay-primary uk-transition-fade uk-position-cover"></div>

                                            <div class="uk-position-center">
                                                <div class="uk-overlay uk-transition-fade uk-margin-remove-first-child">


                                                    <div class="el-content uk-panel uk-transition-fade uk-margin-top"><p
                                                                style="text-align: center;font-size:14px;color:#ffffff;">
                                                            <span style="color: #ee852d;">Adama Kourouma </span>From unpaid
                                                            security guard to top driver, Adama is now able to supply for
                                                            his family and well on his way to owning his own bike.</p>
                                                        <p><span style="font-size: 12px; color: #b8dae9;">read more</span>
                                                        </p></div>

                                                </div>
                                            </div>


                                        </a>
                                    </div>
                                </div>
                                <div class="uk-grid-margin" style="transform: translateY(151.376px);">
                                    <div class="uk-light">
                                        <a class="el-item uk-inline-clip uk-transition-toggle uk-link-toggle" tabindex="0"
                                           href="https://mecolalu.medium.com/" target="_blank">

                                            <img class="el-image" alt=""
                                                 data-src="/wp-content/themes/yootheme/cache/Artboard-55-copy-2-d579f5d1.png"
                                                 data-srcset="/wp-content/themes/yootheme/cache/Artboard-55-copy-2-a827a5d7.png 768w, /wp-content/themes/yootheme/cache/Artboard-55-copy-2-d579f5d1.png 800w"
                                                 data-sizes="(min-width: 800px) 800px" data-width="800" data-height="707"
                                                 uk-img="" sizes="(min-width: 800px) 800px"
                                                 srcset="/wp-content/themes/yootheme/cache/Artboard-55-copy-2-a827a5d7.png 768w, /wp-content/themes/yootheme/cache/Artboard-55-copy-2-d579f5d1.png 800w"
                                                 src="https://untapped-global.com/wp-content/themes/yootheme/cache/Artboard-55-copy-2-d579f5d1.png">
                                            <div class="uk-overlay-primary uk-transition-fade uk-position-cover"></div>

                                            <div class="uk-position-center">
                                                <div class="uk-overlay uk-transition-fade uk-margin-remove-first-child">


                                                    <div class="el-content uk-panel uk-transition-fade uk-margin-top"><p
                                                                style="color: #fff; text-align: center;font-size:14px">
                                                            Successful entrepreneurs <span style="color: #ee852d;">Murtaza Hussain</span>
                                                            who, after three successful startups of his own, give back by
                                                            investing in frontier markets to create opportunity for all.</p>
                                                        <span style="font-size:12px; color:#B8DAE9">read more</span></div>

                                                </div>
                                            </div>


                                        </a>
                                    </div>
                                </div>
                                <div class="uk-grid-margin" style="transform: translateY(18.922px);">
                                    <div class="uk-light">
                                        <a class="el-item uk-inline-clip uk-transition-toggle uk-link-toggle" tabindex="0"
                                           href="https://untappedglobal.medium.com/meet-the-entrepreneur-benson-mbalanya-digitizing-access-to-water-cc9a63fe8d20"
                                           target="_blank">

                                            <img class="el-image" alt=""
                                                 data-src="/wp-content/themes/yootheme/cache/Benson-Water-ATM-961d3acc.jpeg"
                                                 data-srcset="/wp-content/themes/yootheme/cache/Benson-Water-ATM-1eee6306.jpeg 768w, /wp-content/themes/yootheme/cache/Benson-Water-ATM-a6346a59.jpeg 1024w, /wp-content/themes/yootheme/cache/Benson-Water-ATM-961d3acc.jpeg 1280w"
                                                 data-sizes="(min-width: 1280px) 1280px" data-width="1280"
                                                 data-height="1086" uk-img="" sizes="(min-width: 1280px) 1280px"
                                                 srcset="/wp-content/themes/yootheme/cache/Benson-Water-ATM-1eee6306.jpeg 768w, /wp-content/themes/yootheme/cache/Benson-Water-ATM-a6346a59.jpeg 1024w, /wp-content/themes/yootheme/cache/Benson-Water-ATM-961d3acc.jpeg 1280w"
                                                 src="https://untapped-global.com/wp-content/themes/yootheme/cache/Benson-Water-ATM-a6346a59.jpeg">
                                            <div class="uk-overlay-primary uk-transition-fade uk-position-cover"></div>

                                            <div class="uk-position-center">
                                                <div class="uk-overlay uk-transition-fade uk-margin-remove-first-child">


                                                    <div class="el-content uk-panel uk-transition-fade uk-margin-top"><p
                                                                style="color: #ffffff; text-align: center;font-size:14px">
                                                            Local entrepreneurs like <br><span style="color: #ee852d;">Benson Mbalanya&nbsp;</span>who
                                                            are digitizing access to water&nbsp;<br>for his community.</p>
                                                        <p><span style="font-size: 12px; color: #b8dae9;">read more</span>
                                                        </p></div>

                                                </div>
                                            </div>


                                        </a>
                                    </div>
                                </div>
                                <div class="uk-grid-margin uk-first-column" style="transform: translateY(17.922px);">
                                    <div class="uk-light">
                                        <a class="el-item uk-inline-clip uk-transition-toggle uk-link-toggle" tabindex="0"
                                           href="https://untappedglobal.medium.com/meet-the-entrepreneur-geoffrey-ndhogezi-ugandan-electric-motorcycle-pioneer-29c3885f7445"
                                           target="_blank">

                                            <img class="el-image" alt=""
                                                 data-src="/wp-content/themes/yootheme/cache/Artboard-56-abc5d87f.jpeg"
                                                 data-srcset="/wp-content/themes/yootheme/cache/Artboard-56-d16e1468.jpeg 768w, /wp-content/themes/yootheme/cache/Artboard-56-abc5d87f.jpeg 926w"
                                                 data-sizes="(min-width: 926px) 926px" data-width="926" data-height="818"
                                                 uk-img="" sizes="(min-width: 926px) 926px"
                                                 srcset="/wp-content/themes/yootheme/cache/Artboard-56-d16e1468.jpeg 768w, /wp-content/themes/yootheme/cache/Artboard-56-abc5d87f.jpeg 926w"
                                                 src="https://untapped-global.com/wp-content/themes/yootheme/cache/Artboard-56-abc5d87f.jpeg">
                                            <div class="uk-overlay-primary uk-transition-fade uk-position-cover"></div>

                                            <div class="uk-position-center">
                                                <div class="uk-overlay uk-transition-fade uk-margin-remove-first-child">


                                                    <div class="el-content uk-panel uk-transition-fade uk-margin-top"><p
                                                                style="color: #ffffff; text-align: center;font-size:14px">
                                                            Local entrepreneurs like <br><span style="color: #ee852d;">Geoffrey Ndhogezi&nbsp;</span>who
                                                            are pioneering electric motorcycles in Uganda.</p>
                                                        <p style="color: #ffffff;"><span
                                                                    style="font-size: 12px; color: #b8dae9;">read more</span>
                                                        </p></div>

                                                </div>
                                            </div>


                                        </a>
                                    </div>
                                </div>
                                <div class="uk-grid-margin" style="transform: translateY(151.376px);">
                                    <div class="uk-light">
                                        <div class="el-item uk-inline-clip uk-transition-toggle" tabindex="0">

                                            <img class="el-image" alt=""
                                                 data-src="/wp-content/themes/yootheme/cache/Artboard-57-04814a38.jpeg"
                                                 data-srcset="/wp-content/themes/yootheme/cache/Artboard-57-5184468e.jpeg 768w, /wp-content/themes/yootheme/cache/Artboard-57-04814a38.jpeg 926w"
                                                 data-sizes="(min-width: 926px) 926px" data-width="926" data-height="818"
                                                 uk-img="" sizes="(min-width: 926px) 926px"
                                                 srcset="/wp-content/themes/yootheme/cache/Artboard-57-5184468e.jpeg 768w, /wp-content/themes/yootheme/cache/Artboard-57-04814a38.jpeg 926w"
                                                 src="https://untapped-global.com/wp-content/themes/yootheme/cache/Artboard-57-04814a38.jpeg">
                                            <div class="uk-overlay-primary uk-transition-fade uk-position-cover"></div>

                                            <div class="uk-position-center">
                                                <div class="uk-overlay uk-transition-fade uk-margin-remove-first-child">


                                                    <div class="el-content uk-panel uk-transition-fade uk-margin-top"><p
                                                                style="color: #fff; text-align: center;font-size:14px">
                                                            “Through the Community water ATM, we’re able to provide clean
                                                            water for the community and generate additional income for our
                                                            school”- <span style="color: #ee852d;">Peter </span>( Water
                                                            entrepreneur &amp; teacher at Emmanuel Primary School in
                                                            Naivasha, Kenya)<span class="c-message__edited_label" dir="ltr"
                                                                                  data-sk="tooltip_parent">&nbsp;</span></p>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
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
                                <span>Our Addresses:</span>
                            </li>
                            <li>
                                {{--                                <i class='bx bx-current-location'></i>--}}
                                <span>Kenya:</span>
                                <a href="#">iHub, Senteu Plaza, Kilimani, Nairobi.</a>
                            </li>
                            <li>
                                {{--                                <i class='bx bx-current-location'></i>--}}
                                <span>USA:</span>
                                <a href="#">353 Sacramento St., San Francisco.</a>
                            </li>
                            <li>
                                {{--                                <i class='bx bx-current-location'></i>--}}
                                <span>Mali:</span>
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
<script type="text/javascript">
    function toggleMenu(){
        let toggle = document.getElementById("togglemenuitems");
        if (toggle.classList.contains("hidemenu")) {
            toggle.classList.remove("hidemenu");
        }else {
            toggle.classList.add("hidemenu");
        }
    }

    // toggle.classList.add("showmenu");
</script>
</body>
</html>