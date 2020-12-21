<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Untapped Inc - Dashboard</title>
    <!-- Favicon icon -->
    <link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
        <a href="{{ url('/') }}" class="brand-logo">
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
                                    <span style="color:black;">
                                        <strong style="color:black;">

                                            {{ Str::words(auth()->user()->name,2) }}
                                        </strong>
                                    </span>
                                </div>
                                @if(!is_null(auth()->user()->avatar))
                                    <img src="{{ "https://investorapis.untapped-inc.com/".auth()->user()->avatar }}"
                                         width="20" alt=""/>
                                @else
                                    <img src="https://icon-library.com/images/generic-user-icon/generic-user-icon-13.jpg"
                                         width="20" alt=""/>
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{ route('changepassword') }}"
                                   class="dropdown-item ai-icon">

                                    <span class="ml-2">Change Password </span>
                                </a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                   class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                         width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span class="ml-2">Logout </span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li>
                    <a class="has-arrow ai-icon active" href="{{ route('portfolio.index') }}" aria-expanded="false">
                        <i class="fa fa-tachometer"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>

                </li>
                @if((int)Auth::user()->api_id === 3)
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-pagelines"></i>
                            <span class="nav-text">Page Management</span>
                        </a>
                        <ul aria-expanded="false" class="mm-collapse">
                            <li><a href="{{ route('herosection.create') }}">Landing Page </a></li>
                            <li><a href="{{ route('myassets.index') }}">View Asset category</a></li>
                            <li><a href="{{ route('myassets.create') }}">Add Asset category</a></li>
                            <li><a href="{{ route('manageassets.index') }}">View Asset</a></li>
                            <li><a href="{{ route('manageassets.create') }}">Add Asset</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-users"></i>
                            <span class="nav-text">Investors</span>
                        </a>
                        <ul aria-expanded="false" class="mm-collapse">
                            <li><a href="{{ route('investors.index') }}">View Investors</a></li>
                            <li><a href="{{ route('investors.create') }}">Add Investors</a></li>
                            <li><a href="{{ route('beneficiary.create') }}">Add Beneficiary</a></li>
                            <li><a href="{{ route('beneficiary.index') }}">View Beneficiary</a></li>
                            {{--                        <li><a href="./app-profile.html">Ambassadors</a></li>--}}
                        </ul>
                    </li>
                @endif
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
    <div class="content-body" id="app">
        <!-- row -->
        @yield('content')
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
<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script>
    (function ($) {

        var table = $('#investorsTable').DataTable({
            searching: true,
            paging: true,
            select: false,
            //info: false,
            "order": [[3, "desc"]],
            lengthChange: false

        });
        var newt = $('#assetsTable').DataTable({
            searching: true,
            paging: true,
            select: false,
            //info: false,
            "order": [[3, "desc"]],
            lengthChange: false

        });
    })(jQuery);
</script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>