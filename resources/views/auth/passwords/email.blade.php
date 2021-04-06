<!DOCTYPE html>
<html lang="en">
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
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
<div class="d-flex flex-column flex-root">
    <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
            <!--begin: Aside Container-->
            <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
                <div class="d-flex flex-column-fluid flex-column flex-center">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="login-form login-signin">
                        <form class="form" novalidate="novalidate" method="post" action="{{ route('reset.password') }}">
                        @csrf
                        <!--begin::Title-->
                            <div class="text-center pb-8" style="margin-bottom: 3rem">
                                <img src="{{ asset('untappedlogo.png') }}" alt="Untapped Logo">
                            </div>
                            @if(session('data'))
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success" role="alert">
                                            <strong>{{ session('data') }}</strong>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">{{ __('E-Mail Address') }}</label>
                                    <input class="form-control
                                @error('email') is-invalid @enderror
                                            form-control-solid h-auto py-7 px-6 rounded-lg" type="text"
                                           name="email" id="email"
                                           value="{{ old('email') }}"
                                           placeholder="Example@untapped-global.com"
                                           autocomplete="off"/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="text-center pt-2">
                                    <button id="kt_login_signin_submit" style="color:white;background-color: #98A3A9;
                                 border-color:#98A3A9;border-radius: 4rem;
" class="btn font-weight-bolder font-size-h6 px-8 py-4 my-3 shadow">
                                    <span style="padding-right: 50px;padding-left: 50px;">
                                    {{ __('Send Password Reset Link') }}
                                    </span>
                                    </button>
                                </div>
                                <!--end::Action-->
                            @endif

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
<script>
    var KTAppSettings = {
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
    };
</script>
<script src="assets/plugins/global/plugins.bundle.js?v=7.0.5"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5"></script>
<script src="assets/js/scripts.bundle.js?v=7.0.5"></script>
<script src="assets/js/pages/custom/login/login-general.js?v=7.0.5"></script>
</body>
</html>
