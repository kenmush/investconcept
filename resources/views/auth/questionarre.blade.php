<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../../../">
    <meta charset="utf-8"/>
    <title>Untapped Inc &mdash; Questionnaire</title>
    <meta name="description" content="Login page example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="assets/css/pages/login/login-2.css?v=7.0.5" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages/wizard/wizard-1.css?v=7.0.6" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css?v=7.0.5" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css?v=7.0.5" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading"
      style="background-color: white">
<!--begin::Main-->
<div class="d-flex flex-column ">
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

                <!--end::Aside body-->
                <!--begin: Aside footer for desktop-->
                <div class="text-center">

                </div>
                <!--end: Aside footer for desktop-->
            </div>
            <!--end: Aside Container-->
        </div>

    </div>
    <!--end::Login-->
</div>
<!--end::Main-->
<div class=" container">
    <div class="card card-custom">
        <div class="card-body p-3">
            @if(session()->has('verified'))
                <div class="alert alert-light" role="alert">
                    <strong style="font-size: 24px">W-9 Submitted!</strong>
                    <p style="font-size: 20px">Be on the look out for subscription documents
                    will be sent to you through SignNow in the next few days.</p>
                    <p style="font-size: 20px">Thanks for your patience.</p>
                </div>
{{--                <div class="row text-center justify-content-center">--}}
{{--                    <a href="#" class="btn btn-outline-success">Link Bank Account</a>--}}
{{--                </div>--}}
                <div class="row text-center justify-content-center mt-3">
                    <a href="/" class="text-muted">Return to Deals</a>
                </div>
            @else
                <form action="{{ route('uploadquestionaire') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="row">
                        <input type="hidden" name="investor" value="{{ auth()->user()->api_id }}">
                        <div class="col-md-6">
                            <!--Label: Legal Name of Individual, Attributes:legal_name -->
                            <div class="form-group">
                                <label for="legal_name">Legal Name of Individual</label>
                                <input type="text" id="legal_name"
                                       aria-describedby="legal_name-help"
                                       name="legal_name" value="{{ old('legal_name') }}"
                                       class="form-control @error('legal_name') is-invalid @enderror"
                                       placeholder="Legal Name of Individual" required>
                                @error('legal_name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--Label: Where are you considered an accredited investor?, Attributes:investor_location -->
                            <div class="form-group">
                                <label for="investor_location">Where are you considered an accredited investor?</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="investor_location" name="investor_location"
                                           class="custom-control-input" value="Employment">
                                    <label class="custom-control-label" for="investor_location">Europe</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="investor_location1" name="investor_location"
                                           class="custom-control-input" value="USA Taxable">
                                    <label class="custom-control-label" for="investor_location1">USA (Taxable)</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="investor_location2" name="investor_location"
                                           class="custom-control-input" value="USA (Tax exempt)">
                                    <label class="custom-control-label" for="investor_location2">USA (Tax
                                        exempt)</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="investor_location3" name="investor_location"
                                           class="custom-control-input" value="USA Taxable">
                                    <label class="custom-control-label" for="investor_location3">Other</label>
                                </div>

                                @error('investor_location')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--Label: Nationality, Attributes:nationality -->
                            <div class="form-group">
                                <label for="nationality">Nationality</label>

                                <select name="nationality" id="nationality" class="form-control select
@error('nationality') is-invalid @enderror">
                                    @foreach($coutries as $country=>$key)
                                        <option value=""> {{ $key['name']['common'] ?? '' }}</option>
                                    @endforeach
                                </select>

                                @error('nationality')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--Label: Confirm your source of wealth, Attributes:source_of_wealth -->
                            <div class="form-group">
                                <label for="source_of_wealth">Confirm your source of wealth</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="source_of_wealth1" name="source_of_wealth"
                                           class="custom-control-input" value="Employment">
                                    <label class="custom-control-label" for="source_of_wealth1">Employment</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="source_of_wealth2" name="source_of_wealth"
                                           class="custom-control-input" value="Investments">
                                    <label class="custom-control-label" for="source_of_wealth2">Investments</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="source_of_wealth3" name="source_of_wealth"
                                           class="custom-control-input" value="Sales of Business">
                                    <label class="custom-control-label" for="source_of_wealth3">Sales of
                                        Business</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="source_of_wealth4" name="source_of_wealth"
                                           class="custom-control-input" value="other">
                                    <label class="custom-control-label" for="source_of_wealth4">Other</label>
                                </div>

                                @error('source_of_wealth')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--Label: Tax Identification Number, Attributes:tax_identification_number -->
                            <div class="form-group">
                                <label for="tax_identification_number">Tax Identification Number</label>
                                <input type="text" id="tax_identification_number"
                                       aria-describedby="tax_identification_number-help"
                                       name="tax_identification_number" value="{{ old('tax_identification_number') }}"
                                       class="form-control @error('tax_identification_number') is-invalid @enderror"
                                       placeholder="Tax Identification Number" required>
                                @error('tax_identification_number')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--Label: Authorizing, Attributes:authorization -->
                            <div class="form-group">
                                <label for="authorization">Authorization</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="authorization"
                                           class="custom-control-input" value="10% or more shareholder">
                                    <label class="custom-control-label" for="customRadio1">10% or more
                                        shareholder</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="authorization"
                                           class="custom-control-input"
                                           value="Controlling person">
                                    <label class="custom-control-label" for="customRadio2">Controlling person</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="authorization"
                                           class="custom-control-input"
                                           value="Authorized Signatory">
                                    <label class="custom-control-label" for="customRadio3">Authorized Signatory</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="authorization"
                                           class="custom-control-input"
                                           value="Director or Officer">
                                    <label class="custom-control-label" for="customRadio4">Director or Officer</label>
                                </div>

                                @error('authorization')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--Label: Address of individual/Entity, Attributes:address -->
                            <div class="form-group">
                                <label for="address">Address of individual/Entity</label>
                                <input type="text" id="address"
                                       aria-describedby="address-help"
                                       name="address" value="{{ old('address') }}"
                                       class="form-control @error('address') is-invalid @enderror"
                                       placeholder="Address of individual/Entity" required>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--Label: Date of Birth, Attributes:date_of_birth -->
                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth</label>
                                <input type="date" id="date_of_birth"
                                       aria-describedby="date_of_birth-help"
                                       name="date_of_birth" value="{{ old('date_of_birth') }}"
                                       class="form-control @error('date_of_birth') is-invalid @enderror"
                                       placeholder="Date of Birth" required>
                                @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 float-right">
                            <button class="btn btn-primary float-right">Submit</button>
                        </div>
                    </div>
                </form>
            @endif
        </div>
        <!--end::Wizard-->
    </div>
</div>
<!--begin::Global Config(global config for global JS scripts)-->
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
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="assets/plugins/global/plugins.bundle.js?v=7.0.5"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5"></script>
<script src="assets/js/scripts.bundle.js?v=7.0.5"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/custom/wizard/wizard-1.js?v=7.0.6"></script>
<script>

    $(document).ready(function() {
        $('.select').select2();
    });
</script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>

