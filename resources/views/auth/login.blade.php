<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../../../">
    <meta charset="utf-8"/>
    <title>Untapped Inc &mdash; Login</title>
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
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Untapped Invest",
        "item": "https://invest.untapped-global.com"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Untapped Invest - Login",
        "item": "https://invest.untapped-global.com/login"
      }]
    }


    </script>
</head>
<!--end::Head-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
<div class="d-flex flex-column flex-root">
    <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
            <!--begin: Aside Container-->
            <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
                <div class="d-flex flex-column-fluid flex-column flex-center">
                    <div class="login-form login-signin">
                        <form class="form" novalidate="novalidate" method="post" action="{{ route('login') }}">
                        @csrf
                        <!--begin::Title-->
                            <div class="text-center pb-8" style="margin-bottom: 3rem">
                                <img src="{{ asset('untappedlogo.png') }}" alt="Untapped Logo">
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                <input class="form-control

                                        form-control-solid h-auto py-7 px-6 rounded-lg" type="text"
                                       name="email" id="email"
                                       value="{{ old('email') }}"
                                       placeholder="Example@untapped-global.com.com"
                                       autocomplete="off"/>

                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                    <a href="javascript:;" style="color: rgb(237,127,51)"
                                       class=" font-size-h6 font-weight-bolder text-hover-primary pt-5"
                                       id="kt_login_forgot">Forgot Password ?</a>
                                </div>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       type="password" name="password" autocomplete="off"/>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!--end::Form group-->
                            <!--begin::Action-->
                            <div class="text-center pt-2">
                                <button id="kt_login_signin_submit" style="color:white;background-color: #98A3A9;
                                 border-color:#98A3A9;border-radius: 4rem;
" class="btn font-weight-bolder font-size-h6 px-8 py-4 my-3 shadow">
                                    <span style="padding-right: 50px;padding-left: 50px;">
                                    SIGN IN
                                    </span>
                                </button>
                            </div>
                            <!--end::Action-->
                        </form>
                    </div>

                </div>
                <div>
                    <a href="/" class="text-muted">
                        <i class="fa fa-arrow-left"></i>
                        BACK
                    </a>
                </div>
            </div>
        </div>
        <div class="order-lg-2 w-100 pb-0" style="background-image: url('{{ asset('1x/login.png') }}');
                background-repeat: no-repeat;background-size: cover">
            <div class="d-flex flex-row justify-content-end" style="margin-top: 5rem;margin-right: 5rem;">
                <img src="{{ asset('1x/Asset 4.png') }}" alt="">
            </div>
            <div class="d-flex align-items-center justify-content-center" style="margin-top: 10rem">
                <h3 style="color: #ffffff;font-size: 42px">
                    START INVESTING TODAY!
                    <p style="color: #ffffff;font-size: 30px">
                        for impact at scale
                    <div class="d-flex" style="border-top: 4px solid #EE852D;width: 30%"></div>
                    </p>
                </h3>

            </div>
        </div>
    </div>
</div>
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
