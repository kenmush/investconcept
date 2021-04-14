<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<head>
    <base href="../../../">
    <meta charset="utf-8"/>
    <title>Untapped Inc | Sign Up</title>
    <meta name="description" content="Sign Up to Untapped Invest"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="assets/css/pages/login/login-3.css?v=7.0.6" rel="stylesheet" type="text/css"/>

    <link href="assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="{{ asset('dropzone/basic.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body"
      class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

<!--begin::Main-->
<div class="d-flex flex-column flex-root">

    <div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">

        <div class="d-flex flex-column flex-row-auto justify-content-center login-aside"
             style="background-image: url({{ asset('1x/login.png') }});
                     background-repeat: no-repeat;background-size: cover">

            <div class="d-flex flex-column-auto flex-column pt-15 px-30 justify-content-center">

                <a href="/" class="login-logo py-6">
                    <img src="{{ asset('untappedlogo.png') }}" width="90%" class="max-h-70px" alt=""/>
                </a>


                <div class="wizard-nav pt-5 pt-lg-30">

                    <div class="wizard-steps">

                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                            <div class="wizard-wrapper">
                                {{--                                <div class="wizard-icon">--}}
                                {{--                                    <i class="wizard-check ki ki-check"></i>--}}
                                {{--                                    <span class="wizard-number"></span>--}}
                                {{--                                </div>--}}
                                <div class="wizard-label">
                                    <h3 class="wizard-title">

                                    </h3>
                                    <div class="wizard-desc">

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wizard-step" data-wizard-type="step">
                            <div class="wizard-wrapper">
                                {{--                                <div class="wizard-icon">--}}
                                {{--                                    <i class="wizard-check ki ki-check"></i>--}}
                                {{--                                    <span class="wizard-number"></span>--}}
                                {{--                                </div>--}}
                                <div class="wizard-label">
                                    <h3 class="wizard-title">

                                    </h3>
                                    <div class="wizard-desc">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wizard-step" data-wizard-type="step">
                            <div class="wizard-wrapper">
                                {{--                                <div class="wizard-icon">--}}
                                {{--                                    <i class="wizard-check ki ki-check"></i>--}}
                                {{--                                    <span class="wizard-number"></span>--}}
                                {{--                                </div>--}}
                                <div class="wizard-label">
                                    <h3 class="wizard-title">

                                    </h3>
                                    <div class="wizard-desc">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-step" data-wizard-type="step">
                            <div class="wizard-wrapper">
                                {{--                                <div class="wizard-icon">--}}
                                {{--                                    <i class="wizard-check ki ki-check"></i>--}}
                                {{--                                    <span class="wizard-number"></span>--}}
                                {{--                                </div>--}}
                                <div class="wizard-label">
                                    <h3 class="wizard-title">

                                    </h3>
                                    <div class="wizard-desc">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-step" data-wizard-type="step">
                            <div class="wizard-wrapper">
                                {{--                                <div class="wizard-icon">--}}
                                {{--                                    <i class="wizard-check ki ki-check"></i>--}}
                                {{--                                    <span class="wizard-number"></span>--}}
                                {{--                                </div>--}}
                                <div class="wizard-label">
                                    <h3 class="wizard-title">

                                    </h3>
                                    <div class="wizard-desc">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-step" data-wizard-type="step">
                            <div class="wizard-wrapper">
                                {{--                                <div class="wizard-icon">--}}
                                {{--                                    <i class="wizard-check ki ki-check"></i>--}}
                                {{--                                    <span class="wizard-number"></span>--}}
                                {{--                                </div>--}}
                                <div class="wizard-label">
                                    <h3 class="wizard-title">

                                    </h3>
                                    <div class="wizard-desc">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="login-content flex-column-fluid d-flex flex-column p-10">

            <div class="text-right d-flex justify-content-center">
                <div class="top-signup text-right d-flex justify-content-end pt-5 pb-lg-0 pb-10">
                    {{--                    <span class="font-weight-bold text-muted font-size-h4">Having issues?</span>--}}
                    {{--                    <a href="javascript:;" class="font-weight-bolder text-primary font-size-h4 ml-2"--}}
                    {{--                       id="kt_login_signup">Get Help</a>--}}
                </div>
            </div>


            <div class="d-flex flex-row-fluid flex-center">

                <div class="login-form login-form-signup">

                    <form action="{{ route('registeraninvestor') }}" class="form" novalidate="novalidate"
                          id="kt_login_signup_form"
                          enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                            <div class="row">
                                <div class="pb-10 pb-lg-15">
                                    <h3 class="font-weight-bolder text-dark display5">Welcome to Untapped</h3>
                                    <div class="text-muted font-weight-bold font-size-h4">
                                        Join a sophisticated community of investors engaged in frontier markets. We’re
                                        excited to have you on board.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between mt-n5">
                                            <label class="font-size-h6 font-weight-bolder text-dark pt-5">
                                                Have you invested in frontier markets before?
                                            </label>
                                        </div>
                                        <div class="radio-inline mt-2">
                                            <label class="radio">
                                                <input type="radio" name="invested_in_markerts" value="Yes"
                                                       id="invested_in_markerts">
                                                <span></span>
                                                Yes
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="invested_in_markerts" value="No">
                                                <span></span>
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between mt-n5">
                                            <label class="font-size-h6 font-weight-bolder text-dark pt-5">
                                                Are you interested in earning fixed income on your investment?
                                            </label>
                                        </div>
                                        <div class="radio-inline mt-2">
                                            <label class="radio">
                                                <input type="radio" name="interested_in_earning_fixed_income"
                                                       id="interested_in_earning_fixed_income"
                                                       value="Yes">
                                                <span></span>
                                                Yes
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="interested_in_earning_fixed_income"
                                                       value="No">
                                                <span></span>
                                                No
                                            </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between mt-n5">
                                            <label class="font-size-h6 font-weight-bolder text-dark pt-5">
                                                Which investment instruments interest you?
                                            </label>
                                        </div>
                                        <div class="checkbox-list">
                                            <label class="checkbox">
                                                <input type="checkbox" name="investment_instruments[]"
                                                       id="investment_instruments" value="6 month maturity with 5-6% annual interest">
                                                <span></span>6 month maturity with 5-6% annual interest</label>

                                            <label class="checkbox">
                                                <input type="checkbox" name="investment_instruments[]" value="12 month maturity with 7-9% annual interest, paid quarterly">
                                                <span></span>12 month maturity with 7-9% annual interest, paid quarterly</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="pb-5" data-wizard-type="step-content">

                            <div class="pt-lg-0 pt-5 pb-15">
                                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">

                                </h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="legal_name" class="font-size-h6 font-weight-bolder text-dark">Which
                                            of the asset classes that are financed by Untapped interest you
                                            most?</label>
                                        <div class="checkbox-list">
                                            <label class="checkbox">
                                                <input class="assetclasses" type="checkbox" name="asset_classes[]"
                                                       id="asset_classes"
                                                       value="Off grid with Refrigeration">
                                                <span></span>Off grid with Refrigeration</label>

                                            <label class="checkbox">
                                                <input class="assetclasses" type="checkbox" name="asset_classes[]"
                                                       value="Capital
                                                Infractructure">
                                                <span></span>Capital Infractructure </label>
                                            <label class="checkbox">
                                                <input class="assetclasses" type="checkbox" name="asset_classes[]"
                                                       value="MedTech">
                                                <span></span>MedTech </label>

                                            <label class="checkbox">
                                                <input class="assetclasses" type="checkbox" name="asset_classes[]"
                                                       value="AgTech">
                                                <span></span>AgTech </label>
                                            <label class="checkbox">
                                                <input class="assetclasses" type="checkbox" name="asset_classes[]"
                                                       value="Mobility">
                                                <span></span>Mobility </label>
                                            <label class="checkbox">
                                                <input class="assetclasses" type="checkbox" name="asset_classes[]"
                                                       value="Electric
                                                Mobility">
                                                <span></span>Electric Mobility </label>
                                            <label class="checkbox">
                                                <input class="assetclasses" type="checkbox" name="asset_classes[]"
                                                       value="Water
                                                infrastructure">
                                                <span></span>Water infrastructure </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="legal_name" class="font-size-h6 font-weight-bolder text-dark">
                                            Which geographies are particulary interesting to you?
                                        </label>
                                        <div class="checkbox-list">
                                            <label class="checkbox">
                                                <input type="checkbox" name="geographies_interested[]" value="East Africa">
                                                <span></span>East Africa</label>

                                            <label class="checkbox">
                                                <input type="checkbox" name="geographies_interested[]" value="West Africa">
                                                <span></span>West Africa </label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="geographies_interested[]" value="Southern Africa">
                                                <span></span>Southern Africa </label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="geographies_interested[]" value="North Africa">
                                                <span></span>North Africa </label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="geographies_interested[]" value="Latin America">
                                                <span></span>Latin America </label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="geographies_interested[]" value="South East Asia">
                                                <span></span>South East Asia </label>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                        <div class="pb-5" data-wizard-type="step-content">

                            <div class="pt-lg-0 pt-5 pb-15">
                                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">

                                </h3>

                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="d-flex justify-content-between mt-n5">
                                        <label class="font-size-h6 font-weight-bolder text-dark pt-5">
                                            Are you an accredited investor?
                                            <i id="accredited_investor" class="fa fa-info-circle" data-toggle="tooltip"
                                               data-theme="dark"></i>

                                        </label>
                                    </div>
                                    <div class="radio-inline mt-2">
                                        <label class="radio">
                                            <input type="radio" name="accredited_investor" value="Yes">
                                            <span></span>
                                            Yes
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="accredited_investor" value="No">
                                            <span></span>
                                            No
                                        </label>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="d-flex justify-content-between mt-n5">
                                        <label class="font-size-h6 font-weight-bolder text-dark pt-5">
                                            Are you a qualified purchaser?

                                            <i id="myButton" class="fa fa-info-circle" data-toggle="tooltip" data-theme="dark"></i>
                                        </label>
                                    </div>
                                    <div class="radio-inline mt-2">
                                        <label class="radio">
                                            <input type="radio" name="qualified_investor" value="Yes" checked="">
                                            <span></span>
                                            Yes
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="qualified_investor" value="No">
                                            <span></span>
                                            No
                                        </label>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="d-flex justify-content-between mt-n5">
                                        <label class="font-size-h6 font-weight-bolder text-dark pt-5">
                                            What amounts would you consider placing in these types of 6-18 month
                                            maturity instruments earning 5-9% annual return?
                                        </label>
                                    </div>
                                    <div class="checkbox-list">
                                        <label class="checkbox">
                                            <input type="checkbox" name="amounts_placed">
                                            <span></span>
                                            $2,000 &mdash; 10,000
                                        </label>

                                        <label class="checkbox">
                                            <input type="checkbox" name="amounts_placed">
                                            <span></span>
                                            $10,000 &mdash; 50,000
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="amounts_placed">
                                            <span></span>
                                            $50,000 &mdash; 100,000
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="amounts_placed">
                                            <span></span>
                                            $100,000 &mdash; 250,000
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="amounts_placed">
                                            <span></span>
                                            $250,000+
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-5" data-wizard-type="step-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">First Name</label>
                                        <input type="text"
                                               class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                               name="fname" id="fname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">Last Name</label>
                                        <input type="text"
                                               class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                               id="lname" name="lname" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                        <input type="text" id="email" autocomplete="off"
                                               class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                               name="email" placeholder="Your email">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">Password</label>
                                        <input type="password" id="password" autocomplete="off"
                                               class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                               name="password" placeholder="Your password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">Confirm
                                            Password</label>
                                        <input type="password" id="passwordconfirm" autocomplete="off"
                                               class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                               name="passwordconfirm" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">
                                        What type of an investor will you be investing as?
                                    </label>
                                </div>
                                <div class="radio-inline mt-2">
                                    <label class="radio">
                                        <input type="radio" value="Individual" name="accredited_type" checked="">
                                        <span></span>
                                        Individual
                                    </label>
                                    <label class="radio">
                                        <input type="radio" value="Institution" name="accredited_type">
                                        <span></span>
                                        Institution
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline m-0 font-size-h6 font-weight-bolder text-muted
                                pt-5">
                                        <input type="checkbox" name="agree" id="agree">
                                        <span></span>
                                        I agree to the &nbsp;<a target="_blank" href="/terms">Terms of service </a>&nbsp;and
                                        Privacy
                                        Policy
                                    </label>
                                </div>
                            </div>


                        </div>
                        <div class="pb-5" data-wizard-type="step-content">

                            <div class="pt-lg-0 pt-5 pb-15">
                                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">
                                    Questionnaire
                                </h3>
                            </div>
                            <div class="row">
                                <input type="hidden" name="investor" value="">
                                <div class="col-md-6">
                                    <!--Label: Legal Name of Individual, Attributes:legal_name -->
                                    <div class="form-group">
                                        <label for="legal_name" class="font-size-h6 font-weight-bolder text-dark">Legal
                                            Name of Individual</label>
                                        <input type="text" id="legal_name" aria-describedby="legal_name-help"
                                               name="legal_name" value="" class="form-control "
                                               placeholder="Legal Name of Individual" required="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!--Label: Nationality, Attributes:nationality -->
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark" for="nationality">Nationality</label>

                                        <select name="nationality" id="nationality" class="form-control select
">
                                            <option value="Aruba"> Aruba</option>
                                            <option value="Afghanistan"> Afghanistan</option>
                                            <option value="Angola"> Angola</option>
                                            <option value="Anguilla"> Anguilla</option>
                                            <option value="Åland Islands"> Åland Islands</option>
                                            <option value="Albania"> Albania</option>
                                            <option value="Andorra"> Andorra</option>
                                            <option value="United Arab Emirates"> United Arab Emirates</option>
                                            <option value="Argentina"> Argentina</option>
                                            <option value="Armenia"> Armenia</option>
                                            <option value="American Samoa"> American Samoa</option>
                                            <option value="Antarctica"> Antarctica</option>
                                            <option value="French Southern and Antarctic Lands"> French Southern and
                                                Antarctic Lands
                                            </option>
                                            <option value="Antigua and Barbuda"> Antigua and Barbuda</option>
                                            <option value="Australia"> Australia</option>
                                            <option value="Austria"> Austria</option>
                                            <option value="Azerbaijan"> Azerbaijan</option>
                                            <option value="Burundi"> Burundi</option>
                                            <option value="Belgium"> Belgium</option>
                                            <option value="Benin"> Benin</option>
                                            <option value="Burkina Faso"> Burkina Faso</option>
                                            <option value="Bangladesh"> Bangladesh</option>
                                            <option value="Bulgaria"> Bulgaria</option>
                                            <option value="Bahrain"> Bahrain</option>
                                            <option value="Bahamas"> Bahamas</option>
                                            <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina</option>
                                            <option value="Saint Barthélemy"> Saint Barthélemy</option>
                                            <option value="Saint Helena, Ascension and Tristan da Cunha"> Saint Helena,
                                                Ascension and Tristan da Cunha
                                            </option>
                                            <option value="Belarus"> Belarus</option>
                                            <option value="Belize"> Belize</option>
                                            <option value="Bermuda"> Bermuda</option>
                                            <option value="Bolivia"> Bolivia</option>
                                            <option value="Caribbean Netherlands"> Caribbean Netherlands</option>
                                            <option value="Brazil"> Brazil</option>
                                            <option value="Barbados"> Barbados</option>
                                            <option value="Brunei"> Brunei</option>
                                            <option value="Bhutan"> Bhutan</option>
                                            <option value="Bouvet Island"> Bouvet Island</option>
                                            <option value="Botswana"> Botswana</option>
                                            <option value="Central African Republic"> Central African Republic</option>
                                            <option value="Canada"> Canada</option>
                                            <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands</option>
                                            <option value="Switzerland"> Switzerland</option>
                                            <option value="Chile"> Chile</option>
                                            <option value="China"> China</option>
                                            <option value="Ivory Coast"> Ivory Coast</option>
                                            <option value="Cameroon"> Cameroon</option>
                                            <option value="DR Congo"> DR Congo</option>
                                            <option value="Republic of the Congo"> Republic of the Congo</option>
                                            <option value="Cook Islands"> Cook Islands</option>
                                            <option value="Colombia"> Colombia</option>
                                            <option value="Comoros"> Comoros</option>
                                            <option value="Cape Verde"> Cape Verde</option>
                                            <option value="Costa Rica"> Costa Rica</option>
                                            <option value="Cuba"> Cuba</option>
                                            <option value="Curaçao"> Curaçao</option>
                                            <option value="Christmas Island"> Christmas Island</option>
                                            <option value="Cayman Islands"> Cayman Islands</option>
                                            <option value="Cyprus"> Cyprus</option>
                                            <option value="Czechia"> Czechia</option>
                                            <option value="Germany"> Germany</option>
                                            <option value="Djibouti"> Djibouti</option>
                                            <option value="Dominica"> Dominica</option>
                                            <option value="Denmark"> Denmark</option>
                                            <option value="Dominican Republic"> Dominican Republic</option>
                                            <option value="Algeria"> Algeria</option>
                                            <option value="Ecuador"> Ecuador</option>
                                            <option value="Egypt"> Egypt</option>
                                            <option value="Eritrea"> Eritrea</option>
                                            <option value="Western Sahara"> Western Sahara</option>
                                            <option value="Spain"> Spain</option>
                                            <option value="Estonia"> Estonia</option>
                                            <option value="Ethiopia"> Ethiopia</option>
                                            <option value="Finland"> Finland</option>
                                            <option value="Fiji"> Fiji</option>
                                            <option value="Falkland Islands"> Falkland Islands</option>
                                            <option value="France"> France</option>
                                            <option value="Faroe Islands"> Faroe Islands</option>
                                            <option value="Micronesia"> Micronesia</option>
                                            <option value="Gabon"> Gabon</option>
                                            <option value="United Kingdom"> United Kingdom</option>
                                            <option value="Georgia"> Georgia</option>
                                            <option value="Guernsey"> Guernsey</option>
                                            <option value="Ghana"> Ghana</option>
                                            <option value="Gibraltar"> Gibraltar</option>
                                            <option value="Guinea"> Guinea</option>
                                            <option value="Guadeloupe"> Guadeloupe</option>
                                            <option value="Gambia"> Gambia</option>
                                            <option value="Guinea-Bissau"> Guinea-Bissau</option>
                                            <option value="Equatorial Guinea"> Equatorial Guinea</option>
                                            <option value="Greece"> Greece</option>
                                            <option value="Grenada"> Grenada</option>
                                            <option value="Greenland"> Greenland</option>
                                            <option value="Guatemala"> Guatemala</option>
                                            <option value="French Guiana"> French Guiana</option>
                                            <option value="Guam"> Guam</option>
                                            <option value="Guyana"> Guyana</option>
                                            <option value="Hong Kong"> Hong Kong</option>
                                            <option value="Heard Island and McDonald Islands"> Heard Island and McDonald
                                                Islands
                                            </option>
                                            <option value="Honduras"> Honduras</option>
                                            <option value="Croatia"> Croatia</option>
                                            <option value="Haiti"> Haiti</option>
                                            <option value="Hungary"> Hungary</option>
                                            <option value="Indonesia"> Indonesia</option>
                                            <option value="Isle of Man"> Isle of Man</option>
                                            <option value="India"> India</option>
                                            <option value="British Indian Ocean Territory"> British Indian Ocean
                                                Territory
                                            </option>
                                            <option value="Ireland"> Ireland</option>
                                            <option value="Iran"> Iran</option>
                                            <option value="Iraq"> Iraq</option>
                                            <option value="Iceland"> Iceland</option>
                                            <option value="Israel"> Israel</option>
                                            <option value="Italy"> Italy</option>
                                            <option value="Jamaica"> Jamaica</option>
                                            <option value="Jersey"> Jersey</option>
                                            <option value="Jordan"> Jordan</option>
                                            <option value="Japan"> Japan</option>
                                            <option value="Kazakhstan"> Kazakhstan</option>
                                            <option value="Kenya"> Kenya</option>
                                            <option value="Kyrgyzstan"> Kyrgyzstan</option>
                                            <option value="Cambodia"> Cambodia</option>
                                            <option value="Kiribati"> Kiribati</option>
                                            <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis</option>
                                            <option value="South Korea"> South Korea</option>
                                            <option value="Kosovo"> Kosovo</option>
                                            <option value="Kuwait"> Kuwait</option>
                                            <option value="Laos"> Laos</option>
                                            <option value="Lebanon"> Lebanon</option>
                                            <option value="Liberia"> Liberia</option>
                                            <option value="Libya"> Libya</option>
                                            <option value="Saint Lucia"> Saint Lucia</option>
                                            <option value="Liechtenstein"> Liechtenstein</option>
                                            <option value="Sri Lanka"> Sri Lanka</option>
                                            <option value="Lesotho"> Lesotho</option>
                                            <option value="Lithuania"> Lithuania</option>
                                            <option value="Luxembourg"> Luxembourg</option>
                                            <option value="Latvia"> Latvia</option>
                                            <option value="Macau"> Macau</option>
                                            <option value="Saint Martin"> Saint Martin</option>
                                            <option value="Morocco"> Morocco</option>
                                            <option value="Monaco"> Monaco</option>
                                            <option value="Moldova"> Moldova</option>
                                            <option value="Madagascar"> Madagascar</option>
                                            <option value="Maldives"> Maldives</option>
                                            <option value="Mexico"> Mexico</option>
                                            <option value="Marshall Islands"> Marshall Islands</option>
                                            <option value="North Macedonia"> North Macedonia</option>
                                            <option value="Mali"> Mali</option>
                                            <option value="Malta"> Malta</option>
                                            <option value="Myanmar"> Myanmar</option>
                                            <option value="Montenegro"> Montenegro</option>
                                            <option value="Mongolia"> Mongolia</option>
                                            <option value="Northern Mariana Islands"> Northern Mariana Islands</option>
                                            <option value="Mozambique"> Mozambique</option>
                                            <option value="Mauritania"> Mauritania</option>
                                            <option value="Montserrat"> Montserrat</option>
                                            <option value="Martinique"> Martinique</option>
                                            <option value="Mauritius"> Mauritius</option>
                                            <option value="Malawi"> Malawi</option>
                                            <option value="Malaysia"> Malaysia</option>
                                            <option value="Mayotte"> Mayotte</option>
                                            <option value="Namibia"> Namibia</option>
                                            <option value="New Caledonia"> New Caledonia</option>
                                            <option value="Niger"> Niger</option>
                                            <option value="Norfolk Island"> Norfolk Island</option>
                                            <option value="Nigeria"> Nigeria</option>
                                            <option value="Nicaragua"> Nicaragua</option>
                                            <option value="Niue"> Niue</option>
                                            <option value="Netherlands"> Netherlands</option>
                                            <option value="Norway"> Norway</option>
                                            <option value="Nepal"> Nepal</option>
                                            <option value="Nauru"> Nauru</option>
                                            <option value="New Zealand"> New Zealand</option>
                                            <option value="Oman"> Oman</option>
                                            <option value="Pakistan"> Pakistan</option>
                                            <option value="Panama"> Panama</option>
                                            <option value="Pitcairn Islands"> Pitcairn Islands</option>
                                            <option value="Peru"> Peru</option>
                                            <option value="Philippines"> Philippines</option>
                                            <option value="Palau"> Palau</option>
                                            <option value="Papua New Guinea"> Papua New Guinea</option>
                                            <option value="Poland"> Poland</option>
                                            <option value="Puerto Rico"> Puerto Rico</option>
                                            <option value="North Korea"> North Korea</option>
                                            <option value="Portugal"> Portugal</option>
                                            <option value="Paraguay"> Paraguay</option>
                                            <option value="Palestine"> Palestine</option>
                                            <option value="French Polynesia"> French Polynesia</option>
                                            <option value="Qatar"> Qatar</option>
                                            <option value="Réunion"> Réunion</option>
                                            <option value="Romania"> Romania</option>
                                            <option value="Russia"> Russia</option>
                                            <option value="Rwanda"> Rwanda</option>
                                            <option value="Saudi Arabia"> Saudi Arabia</option>
                                            <option value="Sudan"> Sudan</option>
                                            <option value="Senegal"> Senegal</option>
                                            <option value="Singapore"> Singapore</option>
                                            <option value="South Georgia"> South Georgia</option>
                                            <option value="Svalbard and Jan Mayen"> Svalbard and Jan Mayen</option>
                                            <option value="Solomon Islands"> Solomon Islands</option>
                                            <option value="Sierra Leone"> Sierra Leone</option>
                                            <option value="El Salvador"> El Salvador</option>
                                            <option value="San Marino"> San Marino</option>
                                            <option value="Somalia"> Somalia</option>
                                            <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon
                                            </option>
                                            <option value="Serbia"> Serbia</option>
                                            <option value="South Sudan"> South Sudan</option>
                                            <option value="São Tomé and Príncipe"> São Tomé and Príncipe</option>
                                            <option value="Suriname"> Suriname</option>
                                            <option value="Slovakia"> Slovakia</option>
                                            <option value="Slovenia"> Slovenia</option>
                                            <option value="Sweden"> Sweden</option>
                                            <option value="Eswatini"> Eswatini</option>
                                            <option value="Sint Maarten"> Sint Maarten</option>
                                            <option value="Seychelles"> Seychelles</option>
                                            <option value="Syria"> Syria</option>
                                            <option value="Turks and Caicos Islands"> Turks and Caicos Islands</option>
                                            <option value="Chad"> Chad</option>
                                            <option value="Togo"> Togo</option>
                                            <option value="Thailand"> Thailand</option>
                                            <option value="Tajikistan"> Tajikistan</option>
                                            <option value="Tokelau"> Tokelau</option>
                                            <option value="Turkmenistan"> Turkmenistan</option>
                                            <option value="Timor-Leste"> Timor-Leste</option>
                                            <option value="Tonga"> Tonga</option>
                                            <option value="Trinidad and Tobago"> Trinidad and Tobago</option>
                                            <option value="Tunisia"> Tunisia</option>
                                            <option value="Turkey"> Turkey</option>
                                            <option value="Tuvalu"> Tuvalu</option>
                                            <option value="Taiwan"> Taiwan</option>
                                            <option value="Tanzania"> Tanzania</option>
                                            <option value="Uganda"> Uganda</option>
                                            <option value="Ukraine"> Ukraine</option>
                                            <option value="United States Minor Outlying Islands"> United States Minor
                                                Outlying Islands
                                            </option>
                                            <option value="Uruguay"> Uruguay</option>
                                            <option value="United States"> United States</option>
                                            <option value="Uzbekistan"> Uzbekistan</option>
                                            <option value="Vatican City"> Vatican City</option>
                                            <option value="Saint Vincent and the Grenadines"> Saint Vincent and the
                                                Grenadines
                                            </option>
                                            <option value="Venezuela"> Venezuela</option>
                                            <option value="British Virgin Islands"> British Virgin Islands</option>
                                            <option value="United States Virgin Islands"> United States Virgin Islands
                                            </option>
                                            <option value="Vietnam"> Vietnam</option>
                                            <option value="Vanuatu"> Vanuatu</option>
                                            <option value="Wallis and Futuna"> Wallis and Futuna</option>
                                            <option value="Samoa"> Samoa</option>
                                            <option value="Yemen"> Yemen</option>
                                            <option value="South Africa"> South Africa</option>
                                            <option value="Zambia"> Zambia</option>
                                            <option value="Zimbabwe"> Zimbabwe</option>
                                            <option value="Dhekelia"> Dhekelia</option>
                                            <option value="Somaliland"> Somaliland</option>
                                            <option value="USNB Guantanamo Bay"> USNB Guantanamo Bay</option>
                                            <option value="N. Cyprus"> N. Cyprus</option>
                                            <option value="Cyprus U.N. Buffer Zone"> Cyprus U.N. Buffer Zone</option>
                                            <option value="Siachen Glacier"> Siachen Glacier</option>
                                            <option value="Baikonur"> Baikonur</option>
                                            <option value="Akrotiri"> Akrotiri</option>
                                            <option value="Indian Ocean Ter."> Indian Ocean Ter.</option>
                                            <option value="Coral Sea Is."> Coral Sea Is.</option>
                                            <option value="Spratly Is."> Spratly Is.</option>
                                            <option value="Clipperton I."> Clipperton I.</option>
                                            <option value="Ashmore and Cartier Is."> Ashmore and Cartier Is.</option>
                                            <option value="Bajo Nuevo Bank"> Bajo Nuevo Bank</option>
                                            <option value="Serranilla Bank"> Serranilla Bank</option>
                                            <option value="Scarborough Reef"> Scarborough Reef</option>
                                            <option value="Europe Union"> Europe Union</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Date of Birth, Attributes:date_of_birth -->
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark" for="date_of_birth">Date
                                            of Birth</label>
                                        <input type="date" id="date_of_birth" aria-describedby="date_of_birth-help"
                                               name="date_of_birth" value="" class="form-control "
                                               placeholder="Date of Birth" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Authorizing, Attributes:authorization -->
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark" for="authorization">Authorization</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="authorization"
                                                   class="custom-control-input" value="10% or more shareholder">
                                            <label class="custom-control-label" for="customRadio1">10% or more
                                                shareholder</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="authorization"
                                                   class="custom-control-input" value="Controlling person">
                                            <label class="custom-control-label" for="customRadio2">Controlling
                                                person</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="authorization"
                                                   class="custom-control-input" value="Authorized Signatory">
                                            <label class="custom-control-label" for="customRadio3">Authorized
                                                Signatory</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="authorization"
                                                   class="custom-control-input" value="Director or Officer">
                                            <label class="custom-control-label" for="customRadio4">Director or
                                                Officer</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- address-line1 input-->
                                    <div class="control-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">Address Line 1</label>
                                        <div class="controls">
                                            <input id="address-line1" name="address-line1" type="text"
                                                   placeholder="address line 1" class="form-control ">
                                            <p class="help-block">Street address, P.O. box, company name, c/o</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- address-line2 input-->
                                    <div class="control-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">Address Line 2</label>
                                        <div class="controls">
                                            <input id="address-line2" name="address-line2" type="text"
                                                   placeholder="address line 2" class="form-control ">
                                            <p class="help-block">Apartment, suite , unit, building, floor, etc.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- city input-->
                                    <div class="control-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">City / Town</label>
                                        <div class="controls">
                                            <input id="city" name="city" type="text" placeholder="city"
                                                   class="form-control ">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">State / Province /
                                            Region</label>
                                        <div class="controls">
                                            <input id="region" name="region" type="text"
                                                   placeholder="state / province / region" class="form-control ">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">Zip / Postal
                                            Code</label>
                                        <div class="controls">
                                            <input id="postal-code" name="postal-code" type="text"
                                                   placeholder="zip or postal code" class=" form-control ">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="pb-5" data-wizard-type="step-content">

                            <div class="pt-lg-0 pt-5 pb-15">
                                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">
                                    Upload a Verification Document
                                </h3>

                            </div>


                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Verification
                                    Document</label>
                                <select class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                        type="text" name="documenttype" id="documenttype"
                                        placeholder="Your old password" autocomplete="off">
                                    <option value="passport">Passport</option>
                                    <option value="driverslicence">Drivers Licence</option>
                                </select>

                            </div>


                            <div class="row">
                                <div class="col-xl-12 dropzone">
                                    <div class="dz-message dz-clickable" id="uploadpassport">
                                        Drop files here or click to upload.
                                        <br>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="d-flex justify-content-between pt-3">
                            <div class="mr-2">
                                <button type="button"
                                        class="btn btn-light-primary font-weight-bolder font-size-h6 pl-6 pr-8 py-4 my-3 mr-3"
                                        data-wizard-type="action-prev">
                                <span class="svg-icon svg-icon-md mr-1"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3"
              transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
              x="14" y="7" width="2" height="10" rx="1"/>
        <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
              fill="#000000" fill-rule="nonzero"
              transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span> Previous
                                </button>
                            </div>
                            <div>
                                <button type="button"
                                        class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3"
                                        data-wizard-type="action-submit" type="submit"
                                        onclick="submitForm()"
                                        id="kt_login_signup_form_submit_button">
                                    Submit
                                    <span class="svg-icon svg-icon-md ml-2"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3"
              transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5"
              y="7.5" width="2" height="9" rx="1"/>
        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
              fill="#000000" fill-rule="nonzero"
              transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span></button>
                                <button type="button"
                                        class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3"
                                        data-wizard-type="action-next">
                                    Next Step
                                    <span class="svg-icon svg-icon-md ml-1"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3"
              transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5"
              y="7.5" width="2" height="9" rx="1"/>
        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
              fill="#000000" fill-rule="nonzero"
              transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span></button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script src="assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
<script src="assets/js/scripts.bundle.js?v=7.0.6"></script>


<script src="assets/js/pages/custom/login/login-3.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('dropzone/dropzone.js') }}"></script>
<script>
    tippy('#myButton', {
        content: "For individuals and family-owned businesses, $5 million in investments normally confers Qualified Purchaser status. Other entities must manage at least $25 million in investments for other qualified purchasers or be exclusively owned by qualified purchasers. Other provisions, conditions, and exception may apply to your particular situation. Always seek qualified financial advice.",
    });
    tippy('#accredited_investor', {
        content: "Accredited Investor must have an annual income that exceeds $200,000 ($300,000 for joint incomes) for the last two years. The individual must also expect the same or higher revenue in the current financial year. A person must have a net worth of $1 million or higher, either as an individual or jointly (if married), at the time of purchase. The net worth calculation excludes the value of the individual’s primary residence. A general partner, director, or executive officer for the issuer of the unregistered securities may also be an accredited investor.",
    });
</script>
<script>
    let formData = new FormData();

    function submitForm() {
        let signup = document.getElementById('kt_login_signup_form_submit_button');
        signup.innerText = "Submitting ..."
        var investmentinstrument = document.getElementsByName('investment_instruments[]');
        var invesmentlength = investmentinstrument.length;
        let investments = [];
        for (var q = 0; q < invesmentlength; q++) {
            investments[q] = investmentinstrument[q].value
        }

        var assetclasses = document.getElementsByName('asset_classes[]');
        var len = assetclasses.length;
        let assets = [];
        for (var i = 0; i < len; i++) {
            assets[i] = assetclasses[i].value
        }

        var geographies = document.getElementsByName('geographies_interested[]');
        var geo = geographies.length;
        let geography = [];
        for (var g = 0; g < geo; g++) {
            geography[g] = geographies[g].value
        }
        formData.append('invested_in_markerts', document.querySelector('input[name="invested_in_markerts"]:checked').value)
        formData.append('interested_in_earning_fixed_income', document.querySelector('input[name="interested_in_earning_fixed_income"]:checked').value)
        formData.append('investment_instruments', investments)
        formData.append('asset_classes', assets)
        formData.append('geographies_interested', geography)
        formData.append('accredited_investor', document.querySelector('input[name="accredited_investor"]:checked').value)
        formData.append('qualified_investor', document.querySelector('input[name="qualified_investor"]:checked').value)
        formData.append('amounts_placed', document.querySelector('input[name="amounts_placed"]:checked').value)
        formData.append('firstname', document.getElementById('fname').value)
        formData.append('lastname', document.getElementById('lname').value)
        formData.append('investoremail', document.getElementById('email').value)
        formData.append('investorpassword', document.getElementById('password').value)
        formData.append('investorpassword-confirm', document.getElementById('passwordconfirm').value)
        formData.append('legal_name', document.getElementById('legal_name').value)
        formData.append('investor_location', document.querySelector('input[name="investor_location"]:checked').value)
        formData.append('nationality', document.getElementById('nationality').value)
        formData.append('source_of_wealth', document.querySelector('input[name="source_of_wealth"]:checked').value)
        formData.append('authorization', document.querySelector('input[name="authorization"]:checked').value)
        formData.append('address-line1', document.getElementById('address-line1').value)
        formData.append('address-line2', document.getElementById('address-line2').value)
        formData.append('city', document.getElementById('city').value)
        formData.append('region', document.getElementById('region').value)
        formData.append('postal-code', document.getElementById('postal-code').value)
        formData.append('date_of_birth', document.getElementById('date_of_birth').value)
        formData.append('documenttype', document.getElementById('documenttype').value)
        axios.post('/registeraninvestor',
            formData,
            {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
        ).then(data => {
            Swal.fire({
                text: "You're good to go! Thank you for your patience as we complete KYC (Know Your Customer) " +
                    "verification. This process is required by law. Once this is competed you will receive a confirmation email as well " +
                    "as legal documents for your review and signature." +
                    ". All of your data and documentation is encrypted" +
                    " and secured",
                icon: "info",
                buttonsStyling: false,
                confirmButtonText: "Ok",
                customClass: {
                    confirmButton: "btn font-weight-bold btn-light-primary"
                }
            });
            setTimeout(function () {
                // window.location.href = '/login'
            }, 11000);
        })
            .catch(err => {
                signup.innerText = "Submit";
                let errors = err.response.data;
                let string = "<ul>"
                for (displayerror in errors) {
                    string += `<li>${errors[displayerror]}</li>`;
                }
                string += "</ol>"
                Swal.fire({
                    title: "Kindly correct the following errors.",
                    html: string,
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-danger"
                    }
                })
            });
        // document.querySelector('#kt_login_signup_form').submit();
    }

    function changeEvent(element, event) {
        if (event.type === 'click') {

            Swal.fire({
                text: "Sorry, Untapped Invest is only available to accredited investors at this time.",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok",
                customClass: {
                    confirmButton: "btn font-weight-bold btn-light-primary"
                }
            });
            window.location.href = '/';
        } else {
            console.log();
            //alert("keyboard event");

        }


    }

    var uploadpassport = new Dropzone("div#uploadpassport", {
        url: "/file/post",
        maxFiles: 1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
        autoProcessQueue: false,
    }).on('addedfile', function (file) {
        formData.append('passport', file)
    });
    var uploadw9 = new Dropzone("div#uploadw9form", {
        url: "/file/post",
        maxFiles: 1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
        autoProcessQueue: false,
    }).on('addedfile', function (file) {
        formData.append('w9form', file)
    });
</script>
</body>
</html>
