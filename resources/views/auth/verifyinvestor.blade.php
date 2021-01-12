<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../../../">
    <meta charset="utf-8"/>
    <title>Untapped Inc &mdash; Verify Investor</title>
    <meta name="description" content="Login page example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="assets/css/pages/login/login-2.css?v=7.0.5" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css?v=7.0.5" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css?v=7.0.5" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
            <!--begin: Aside Container-->
            <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
                <!--begin::Logo-->
                <a href="#" class="text-center pt-2">
                    <img src="https://www.untapped-inc.com/uploads/1/3/1/9/13198181/new-untapped-logo-trans.png"
                         class="max-h-75px" alt=""/>
                </a>
                <!--end::Logo-->
                <!--begin::Aside body-->
                <div class="d-flex flex-column-fluid flex-column" style="margin-top: 2em">
                    <!--begin::Signin-->
                    <div class="">
                        <!--begin::Form-->
                        @if(session()->has('verified'))
                            <div class="alert alert-light" role="alert">
                                <strong style="font-size: 24px">Photo Submitted</strong>
                                <p style="font-size: 20px">KYC verification takes a few days.</p>
                                <p style="font-size: 20px">Thanks for your patience.</p>
                            </div>
                            <div class="row text-center justify-content-center">
                                <a href="/questionnaire" class="btn btn-outline-success">Continue to questionnaire</a>
                            </div>
                            <div class="row text-center justify-content-center mt-3">
                                <a href="/" class="text-muted">Return to Deals</a>
                            </div>
                        @else
                            <form class="form" novalidate="novalidate" method="post"
                                  enctype="multipart/form-data"
                                  action="{{ route('updateverification') }}">
                            @csrf
                            <!--begin::Title-->
                                <div class="text-center pb-8">
                                    <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">
                                        Verify Investor
                                    </h2>

                                </div>
                                <!--end::Title-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Verification
                                        Document</label>
                                    <select class="form-control form-control-solid h-auto py-7 px-6 rounded-lg"
                                            type="text"
                                            name="documenttype" id="documenttype" placeholder="Your old password"
                                            autocomplete="off">
                                        <option value="passport">Passport</option>
                                        <option value="driverslicence">Drivers Licence</option>
                                    </select>
                                    @error('updatepassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('updatepassword') }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <div class="d-flex justify-content-between mt-n5">
                                        <label class="font-size-h6 font-weight-bolder text-dark pt-5">Upload
                                            Document</label>

                                    </div>
                                    <input type="hidden" name="investor_id" value="{{ auth()->user()->api_id}}">
                                    <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg"
                                           type="file" name="document" autocomplete="off"/>
                                </div>

                                <!--end::Form group-->
                                <!--begin::Action-->
                                <div class="text-center pt-2">
                                    <button id="kt_login_signin_submit" style="color:white;background-color: rgb(237,127,
                                51);
                                border-color:rgb(237,127,51)"
                                            class="btn font-weight-bolder font-size-h6 px-8 py-4 my-3">
                                        Verify
                                    </button>
                                </div>
                                <!--end::Action-->
                            </form>
                    @endif

                    <!--end::Form-->
                    </div>

                </div>
                <!--end::Aside body-->
                <!--begin: Aside footer for desktop-->
                <div class="text-center">

                </div>
                <!--end: Aside footer for desktop-->
            </div>
            <!--end: Aside Container-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="background-color: #B1DCED;">
            <!--begin::Title-->
            <div class="d-flex flex-column justify-content-center text-center pt-lg-40 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
                <h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #986923;">Start Investing
                    today</h3>
                <p class="font-weight-bolder font-size-h2-md font-size-lg text-dark opacity-70">
                    For Impact at scale
                </p>
            </div>
            <!--end::Title-->
            <!--begin::Image-->
            <div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center"
                 style="background-image: url('{{ asset('analysis.svg') }}');"></div>
            <!--end::Image-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->

<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = {
        "breakpoints": {"sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200},
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#8950FC",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#F3F6F9",
                    "dark": "#212121"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1E9FF",
                    "secondary": "#ECF0F3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#212121",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121"
            }
        },
        "font-family": "Poppins"
    };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="assets/plugins/global/plugins.bundle.js?v=7.0.5"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5"></script>
<script src="assets/js/scripts.bundle.js?v=7.0.5"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/custom/login/login-general.js?v=7.0.5"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
{{--@extends('layouts.untapped')--}}

{{--@section('content')--}}
{{--    <div class="container h-100" style="height: 100vh">--}}
{{--        <div class="row h-100 justify-content-center align-items-center mb-6">--}}
{{--            <h3 style="font: Bold 50px/66px Roboto;color: #DBDCDC;text-align: left;">Login</h3>--}}
{{--        </div>--}}

{{--        <div class="row h-100 justify-content-center align-items-center">--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="card" style="border-radius: 16px">--}}
{{--                    <div class="card-body shadow-lg">--}}

{{--                        @if($errors->has('email') || $errors->has('password'))--}}
{{--                            <div class="alert alert-danger" role="alert">--}}
{{--                                <strong>Wrong credentials</strong>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        <form method="POST" action="{{ route('login') }}">--}}
{{--                            @csrf--}}
{{--                            <input required name="email" type="text" class="untapped-form" placeholder="Name, Email">--}}
{{--                            <input required name="password" type="password" class="untapped-form "--}}
{{--                                   placeholder="Password"--}}
{{--                                   style="margin-top:--}}
{{--                            19px">--}}

{{--                            <button class="login-button">--}}
{{--                                <img src="{{ asset('untapped/keyboardarrow.svg') }}" alt="">--}}
{{--                                <i class="fa fa-arrow-circle-left fa-3x"></i>--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
