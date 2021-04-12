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
                                                <input type="radio" name="invested_in_frontier" value="Yes" checked="">
                                                <span></span>
                                                Yes
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="invested_in_frontier" value="No">
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

                                                Are you interested in earning fixed income for your investment?
                                            </label>
                                        </div>
                                        <div class="radio-inline mt-2">
                                            <label class="radio">
                                                <input type="radio" name="accredited_investor" value="Yes" checked="">
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
                                                Which investment instruments interest you?
                                            </label>
                                        </div>
                                        <div class="checkbox-list">
                                            <label class="checkbox">
                                                <input type="checkbox" name="Checkboxes1">
                                                <span></span>6 month maturity with 5-6% annual interest</label>

                                            <label class="checkbox">
                                                <input type="checkbox" name="Checkboxes1">
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
                                                <input type="checkbox" name="Checkboxes1">
                                                <span></span>Off grid with Refrigeration</label>

                                            <label class="checkbox">
                                                <input type="checkbox" name="Checkboxes1">
                                                <span></span>Capital Infractructure </label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="Checkboxes1">
                                                <span></span>MedTech </label>

                                            <label class="checkbox">
                                                <input type="checkbox" name="Checkboxes1">
                                                <span></span>AgTech </label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="Checkboxes1">
                                                <span></span>Mobility </label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="Checkboxes1">
                                                <span></span>Electric Mobility </label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="Checkboxes1">
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
                                                <input type="checkbox" name="Checkboxes1">
                                                <span></span>East Africa</label>

                                            <label class="checkbox">
                                                <input type="checkbox" name="Checkboxes1">
                                                <span></span>West Africa </label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="Checkboxes1">
                                                <span></span>Southern Africa </label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="Checkboxes1">
                                                <span></span>North Africa </label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="Checkboxes1">
                                                <span></span>Latin America </label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="Checkboxes1">
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
                                        </label>
                                    </div>
                                    <div class="radio-inline mt-2">
                                        <label class="radio">
                                            <input type="radio" name="accredited_investor" value="Yes" checked="">
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
                                            What amounts would you consider placing in these types of 6-18 month maturity instruments earning 5-9% annual return?
                                        </label>
                                    </div>
                                    <div class="checkbox-list">
                                        <label class="checkbox">
                                            <input type="checkbox" name="Checkboxes1">
                                            <span></span>
                                            $2,000 &mdash; 10,000
                                        </label>

                                        <label class="checkbox">
                                            <input type="checkbox" name="Checkboxes1">
                                            <span></span>
                                            $10,000 &mdash; 50,000
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="Checkboxes1">
                                            <span></span>
                                            $50,000 &mdash; 100,000
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="Checkboxes1">
                                            <span></span>
                                            $100,000 &mdash; 250,000
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="Checkboxes1">
                                            <span></span>
                                             $250,000+
                                        </label>
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
<script src="assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
<script src="assets/js/scripts.bundle.js?v=7.0.6"></script>


<script src="assets/js/pages/custom/login/login-3.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('dropzone/dropzone.js') }}"></script>
<script>
    // Dropzone.autoDiscover = false;

    // var myDropzone = new Dropzone("div#uploadpassport", {
    //     autoProcessQueue: false,
    //     parallelUploads: 10 // Number of files process at a time (default 2)
    // });
    // var uploadw9 = new Dropzone("div#uploadw9form", {
    //     autoProcessQueue: false,
    //     parallelUploads: 10 // Number of files process at a time (default 2)
    // });
    //
    // $('#uploadfiles').click(function(){
    //     myDropzone.processQueue();
    // });
    let formData = new FormData();

    function submitForm() {
        let signup = document.getElementById('kt_login_signup_form_submit_button');
        signup.innerText = "Submitting ..."
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
                window.location.href = '/login'
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
