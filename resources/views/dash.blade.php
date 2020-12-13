<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Untapped Inc - Dashboard</title>
    <!-- Favicon icon -->
    <link href="{{ asset('backend/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper" class="show menu-toggle">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="{{ route('home') }}" class="brand-logo">
            <img class="logo-abbr" src="{{ asset('favicon.ico') }}" alt="">
            <img class="logo-compact" src="{{ asset('favicon.ico') }}" alt="">
            <img class="brand-title"
                 src="https://www.untapped-inc.com/uploads/1/3/1/9/13198181/new-untapped-logo-trans.png" alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line" style="color:#ACD5E7"></span>
                <span class="line" style="color:#ACD5E7"></span>
                <span class="line" style="color:#ACD5E7">
                </span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Chat box start
    ***********************************-->

    <!--**********************************
        Chat box End
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="search_bar dropdown show">
                            <div class="dropdown-menu p-0 m-0 show">
                                {{--                                <form>--}}
                                {{--                                    <input class="form-control" type="search" placeholder="Search Here" aria-label="Search">--}}
                                {{--                                </form>--}}
                            </div>
                            {{--                            <span class="search_icon p-3 c-pointer" data-toggle="dropdown">--}}
                            {{--                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z" fill="#A4A4A4"/></svg>--}}
                            {{--                                </span>--}}
                        </div>
                    </div>

                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link dz-fullscreen primary" href="#">
                                <svg id="Capa_1" enable-background="new 0 0 482.239 482.239" height="22"
                                     viewBox="0 0 482.239 482.239" width="22" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m0 17.223v120.56h34.446v-103.337h103.337v-34.446h-120.56c-9.52 0-17.223 7.703-17.223 17.223z"
                                          fill=""/>
                                    <path d="m465.016 0h-120.56v34.446h103.337v103.337h34.446v-120.56c0-9.52-7.703-17.223-17.223-17.223z"
                                          fill=""/>
                                    <path d="m447.793 447.793h-103.337v34.446h120.56c9.52 0 17.223-7.703 17.223-17.223v-120.56h-34.446z"
                                          fill=""/>
                                    <path d="m34.446 344.456h-34.446v120.56c0 9.52 7.703 17.223 17.223 17.223h120.56v-34.446h-103.337z"
                                          fill=""/>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item dropdown header-profile">
                            <a style="background-color: #cbe4ef" class="nav-link" href="#" role="button"
                               data-toggle="dropdown">
                                <div class="header-info">
                                    <span style="color:black;">Hello,
                                        <strong style="color:black;">

                                            {{ Str::words(auth()->user()->name,1) }}
                                        </strong>
                                    </span>
                                </div>
                                <img src="https://icon-library.com/images/generic-user-icon/generic-user-icon-13.jpg"
                                     width="20" alt=""/>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                         width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span class="ml-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>

                </li>
            </ul>

            {{--            <div class="add-menu-sidebar">--}}
            {{--                <img src="images/icon1.png" alt=""/>--}}
            {{--                <p>Organize your menus through button bellow</p>--}}
            {{--                <a href="javascript:void(0);" class="btn btn-primary btn-block light">+ Add Menus</a>--}}
            {{--            </div>--}}
            {{--            <div class="copyright">--}}
            {{--                <p><strong>Davur - Restaurant Admin Dashboard</strong> © 2020 All Rights Reserved</p>--}}
            {{--                <p>Made with <i class="fa fa-heart"></i> by DexignZone</p>--}}
            {{--            </div>--}}
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-flex mb-3 align-items-start">
                <div class="mr-auto d-none d-lg-block">
                    <h2 class="text-black font-w600 mb-0">Dashboard</h2>
                    <p class="mb-0">Welcome to {{ auth()->user()->name }}!</p>
                </div>

                {{--                <div class="dropdown custom-dropdown">--}}
                {{--                    <div class="btn btn-sm btn-primary light d-flex align-items-center svg-btn" data-toggle="dropdown">--}}
                {{--                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M22.4281 2.856H21.8681V1.428C21.8681 0.56 21.2801 0 20.4401 0C19.6001 0 19.0121 0.56 19.0121 1.428V2.856H9.71606V1.428C9.71606 0.56 9.15606 0 8.28806 0C7.42006 0 6.86006 0.56 6.86006 1.428V2.856H5.57206C2.85606 2.856 0.560059 5.152 0.560059 7.868V23.016C0.560059 25.732 2.85606 28.028 5.57206 28.028H22.4281C25.1441 28.028 27.4401 25.732 27.4401 23.016V7.868C27.4401 5.152 25.1441 2.856 22.4281 2.856ZM5.57206 5.712H22.4281C23.5761 5.712 24.5841 6.72 24.5841 7.868V9.856H3.41606V7.868C3.41606 6.72 4.42406 5.712 5.57206 5.712ZM22.4281 25.144H5.57206C4.42406 25.144 3.41606 24.136 3.41606 22.988V12.712H24.5561V22.988C24.5841 24.136 23.5761 25.144 22.4281 25.144Z" fill="#2F4CDD"></path></g></svg>--}}
                {{--                        <div class="text-left ml-3">--}}
                {{--                            <span class="d-block fs-16">Filter Periode</span>--}}
                {{--                            <small class="d-block fs-13">4 June 2020 - 4 July 2020</small>--}}
                {{--                        </div>--}}
                {{--                        <i class="fa fa-angle-down scale5 ml-3"></i>--}}
                {{--                    </div>--}}
                {{--                    <div class="dropdown-menu dropdown-menu-right">--}}
                {{--                        <a class="dropdown-item" href="#">4 June 2020 - 4 July 2020</a>--}}
                {{--                        <a class="dropdown-item" href="#">5 july 2020 - 4 Aug 2020</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
									<span class="mr-3 bgl-primary text-primary">
                                        <i style="    color: #FF8377;" class="fa fa-dollar"></i>
{{--										<!-- <i class="ti-user"></i> -->--}}
                                        {{--										<svg width="36" height="28" viewBox="0 0 36 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.75 6.75H30.0064L30.2189 4.62238C30.2709 4.10111 30.2131 3.57473 30.0493 3.07716C29.8854 2.57959 29.6192 2.12186 29.2676 1.73348C28.9161 1.3451 28.4871 1.03468 28.0082 0.822231C27.5294 0.609781 27.0114 0.500013 26.4875 0.5H7.0125C6.48854 0.500041 5.9704 0.609864 5.49148 0.822391C5.01256 1.03492 4.58348 1.34543 4.23189 1.73392C3.88031 2.12241 3.61403 2.58026 3.45021 3.07795C3.28639 3.57564 3.22866 4.10214 3.28075 4.6235L5.2815 24.6224C5.31508 24.9222 5.38467 25.2168 5.48875 25.5H1.75C1.41848 25.5 1.10054 25.6317 0.866116 25.8661C0.631696 26.1005 0.5 26.4185 0.5 26.75C0.5 27.0815 0.631696 27.3995 0.866116 27.6339C1.10054 27.8683 1.41848 28 1.75 28H31.75C32.0815 28 32.3995 27.8683 32.6339 27.6339C32.8683 27.3995 33 27.0815 33 26.75C33 26.4185 32.8683 26.1005 32.6339 25.8661C32.3995 25.6317 32.0815 25.5 31.75 25.5H28.0115C28.1154 25.2172 28.1849 24.9229 28.2185 24.6235L28.881 18H31.75C32.7442 17.9989 33.6974 17.6035 34.4004 16.9004C35.1035 16.1974 35.4989 15.2442 35.5 14.25V10.5C35.4989 9.50577 35.1035 8.55258 34.4004 7.84956C33.6974 7.14653 32.7442 6.75109 31.75 6.75ZM9.0125 25.5C8.70243 25.501 8.40314 25.3862 8.17327 25.1782C7.9434 24.9701 7.79949 24.6836 7.76975 24.375L5.7685 4.37575C5.75109 4.20188 5.7703 4.0263 5.82488 3.86031C5.87946 3.69432 5.96821 3.5416 6.0854 3.412C6.2026 3.28239 6.34564 3.17877 6.50532 3.10781C6.665 3.03685 6.83777 3.00013 7.0125 3H26.4875C26.6622 3.00012 26.8349 3.03681 26.9945 3.10772C27.1541 3.17863 27.2972 3.28218 27.4143 3.4117C27.5315 3.54123 27.6203 3.69386 27.6749 3.85977C27.7295 4.02568 27.7488 4.20119 27.7315 4.375L25.7308 24.3762C25.7007 24.6848 25.5566 24.971 25.3267 25.1788C25.0967 25.3867 24.7975 25.5012 24.4875 25.5H9.0125ZM33 14.25C32.9998 14.5815 32.868 14.8993 32.6337 15.1337C32.3993 15.368 32.0815 15.4998 31.75 15.5H29.1311L29.7561 9.25H31.75C32.0815 9.2502 32.3993 9.38196 32.6337 9.61634C32.868 9.85071 32.9998 10.1685 33 10.5V14.25Z" fill="#2F4CDD"/></svg>--}}

									</span>
                                <div class="media-body">
                                    <h3 class="mb-0 text-black"><span class="counter ml-0">150,600</span></h3>
                                    <p class="mb-0">Balance</p>
                                    <small>24 MONTHS LEFT</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
									<span class="mr-3 bgl-primary text-primary">
								<i style="    color: #FF8377;" class="fa fa-percent"></i>
									</span>
                                <div class="media-body">
                                    <h3 class="mb-0 text-black">+<span class="counter ml-0">1,450</span>$</h3>
                                    <p class="mb-0">Interest</p>
                                    <small>ANNUALIZED RETURN</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-3">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
									<span class="mr-3 bgl-primary text-primary">
										 <i style="    color: #FF8377;" class="fa fa-money"></i>
									</span>
                                <div class="media-body">
                                    <h3 class="mb-0 text-black"><span class="counter ml-0">150,600</span></h3>
                                    <p class="mb-0">Revenue</p>
                                    <small>GENERATED FOR ENTREPRENEUR</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
                                <span class="mr-3 bgl-primary text-primary">
                                    <!-- <i class="ti-user"></i> -->
                                    <i style="    color: #FF8377;" class="fa fa-bar-chart"></i>
                                    </span>
                                <div class="media-body">
                                    <h3 class="mb-0 text-black"><span class="counter ml-0">2.4</span>x</h3>
                                    <p class="mb-0">Leverage</p>
                                    <small>CREATED PER DOLLAR INVESTED</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Your Assets</h4>
                        </div>
                        <div class="card-body">
                            <div id="app">
                                <map-component :categories='@json($assets)'></map-component>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent Payments Queue</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>#</strong></th>
                                        <th><strong>Asset Name</strong></th>
                                        <th><strong>Units</strong></th>
                                        <th><strong>Total Invested</strong></th>
                                        <th><strong>Balance</strong></th>
                                        <th><strong>Interest Generated</strong></th>
                                        <th><strong>Duration</strong></th>
                                        <th><strong>Impact Multiplier</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td scope="row"><img height="30px"
                                                             src="{{ asset('untapped/mobileirrigation.svg') }}"
                                                             alt="">
                                        </td>
                                        <td><a href="">Mobile
                                                Irrigation</a> <!----> <!----> <!----></td>
                                        <td>1</td>
                                        <td>1000 $</td>
                                        <td></td>
                                        <td>10%</td>
                                        <td>12 Months</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><img height="30px"
                                                             src="{{ asset('untapped/rawwateratm.svg') }}"
                                                             alt=""></td>
                                        <td><!----> <a
                                                    href="/assets/raw-water-atm">Raw Water ATM</a>
                                            <!----> <!----></td>
                                        <td>6</td>
                                        <td>1000 $</td>
                                        <td></td>
                                        <td>10%</td>
                                        <td>12 Months</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><img height="30px"
                                                             src="{{ asset('untapped/smartmeterheader.svg') }}"
                                                             alt=""></td>
                                        <td><!----> <!----> <a
                                                    href="/assets/smartmeter">Smart
                                                Meter</a> <!----></td>
                                        <td>5</td>
                                        <td>1000 $</td>
                                        <td></td>
                                        <td>10%</td>
                                        <td>12 Months</td>
                                        <td>0</td>
                                    <tr>
                                        <td scope="row"><img height="30px"
                                                             src="{{ asset('motorbike.svg') }}"
                                                             alt=""></td>
                                        <td><!----> <!----> <!----> <a
                                                    href="/assets/motorbike">Motorbike</a>
                                        </td>
                                        <td>5</td>
                                        <td>1000 $</td>
                                        <td></td>
                                        <td>10%</td>
                                        <td>12 Months</td>
                                        <td>40</td>
                                    </tr>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->

<!--**********************************
    Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © All rights reserved by <a href="https://untapped-inc.com" target="_blank">Untapped Inc</a>
            {{ date('Y') }}</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->

<!--**********************************
   Support ticket button start
***********************************-->

<!--**********************************
   Support ticket button end
***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('backend/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('backend/vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('backend/js/custom.min.js') }}"></script>
<script src="{{ asset('backend/js/deznav-init.js') }}"></script>

<!-- Counter Up -->
<script src="{{ asset('backend/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('backend/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('backend/vendor/apexchart/apexchart.js') }}"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('backend/vendor/peity/jquery.peity.min.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('backend/js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>