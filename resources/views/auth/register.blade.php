<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../../">
    <meta charset="utf-8"/>
    <title>Untapped Inc &mdash; Sign Up</title>
    <meta name="description" content="Login page example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>

    <link href="assets/css/pages/login/login-2.css?v=7.0.5" rel="stylesheet" type="text/css"/>

    <link href="assets/plugins/global/plugins.bundle.css?v=7.0.5" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css?v=7.0.5" rel="stylesheet" type="text/css"/>

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">

<div class="d-flex flex-column flex-root" id="app">

    <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">

        <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
            <!--begin: Aside Container-->
            <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
                <!--begin::Logo-->
                <a href="#" class="text-center pt-2">
                    <img src="https://www.untapped-inc.com/uploads/1/3/1/9/13198181/new-untapped-logo-trans.png"
                         class="max-h-75px" alt=""/>
                </a>

                <div class="d-flex flex-column-fluid flex-column flex-center">

                    <div class="login-form login-signin py-11">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" method="post" action="{{ route('register') }}">
                        @csrf
                        <!--begin::Title-->
                            <div class="text-center pb-8">
                                <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign Up</h2>
                                <span class="text-muted font-weight-bold font-size-h4">Or
										<a href="{{ route('login') }}" style="color: rgb(237,127,51)"
                                           class="font-weight-bolder"
                                           id="kt_login_signup">Sign In</a></span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">First Name</label>
                                <input v-model="firstname" class="form-control form-control-solid h-auto py-7 px-6
                                rounded-lg"
                                       type="text"
                                       name="firstname" id="firstname" placeholder="First Name" autocomplete="off"/>
                            </div>
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Last Name</label>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text"
                                       v-model="lastname"
                                       name="lastname" id="lastname" placeholder="Last Name" autocomplete="off"/>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Email</label>
                                </div>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg"
                                       v-model="email"
                                       type="text" name="email" placeholder="Email" autocomplete="off"/>
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Are you an
                                        accredited investor?</label>
                                </div>
                                <div class="radio-inline mt-2">
                                    <label class="radio">
                                        <input type="radio" v-model="accredited_investor" value="Yes">
                                        <span></span>
                                        Yes
                                    </label>
                                    <label class="radio">
                                        <input type="radio" v-model="accredited_investor" value="No">
                                        <span></span>
                                        No
                                    </label>

                                </div>
                            </div>
                            <div class="form-group" v-if="accredited_investor === 'Yes'">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">
                                        What type of an investor are you?
                                    </label>
                                </div>
                                <div class="radio-inline mt-2">
                                    <label class="radio">
                                        <input type="radio" value="Individual" v-model="accredited_type">
                                        <span></span>
                                        Individual
                                    </label>
                                    <label class="radio">
                                        <input type="radio" value="Institution" v-model="accredited_type">
                                        <span></span>
                                        Institution
                                    </label>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                </div>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg"
                                       v-model="password"
                                       type="password" name="password" placeholder="Password" autocomplete="off"/>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Action-->
                            <div class="text-center pt-2">
                                <button
                                        @click.prevent="submitSignupForm"
                                        id="kt_login_signin_submit" style="color:white;background-color: #ed7f33;
                                border-color:rgb(237,127,51)"
                                        class="btn font-weight-bolder font-size-h6 px-8 py-4 my-3">Sign Up
                                </button>
                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>


                </div>

                <div class="text-center">

                </div>

            </div>

        </div>

        <div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="background-color: #B1DCED;">

            <div class="d-flex flex-column justify-content-center text-center pt-lg-40 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
                <h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #986923;">Start Investing
                    today</h3>
                <p class="font-weight-bolder font-size-h2-md font-size-lg text-dark opacity-70">
                    For Impact at scale
                </p>
            </div>

            <div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center"
                 style="background-image: url('{{ asset('analysis.svg') }}');"></div>

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

<script src="assets/plugins/global/plugins.bundle.js?v=7.0.5"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5"></script>
<script src="assets/js/scripts.bundle.js?v=7.0.5"></script>

<script src="assets/js/pages/custom/login/login-general.js?v=7.0.5"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script>
    const app = new Vue({
        'el': '#app',
        data: {
            'firstname': 'Kennedy',
            'lastname': '',
            'email': '',
            'accredited_investor': 'No',
            'accredited_type': 'Individual',
            'password': '',
        },
        methods: {
            submitSignupForm() {
                axios.post('/register',this.$data).then(resp=>{
                    window.location.href =  '/login';
                });
            }
        }
    });

</script>
</body>
<!--end::Body-->
</html>

