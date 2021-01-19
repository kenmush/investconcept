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

        <div class="login-aside d-flex flex-column flex-row-auto">

            <div class="d-flex flex-column-auto flex-column pt-15 px-30">

                <a href="#" class="login-logo py-6">
                    <img src="{{ asset('untappedlogo.png') }}" width="90%" class="max-h-70px" alt=""/>
                </a>


                <div class="wizard-nav pt-5 pt-lg-30">

                    <div class="wizard-steps">

                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                            <div class="wizard-wrapper">
                                <div class="wizard-icon">
                                    <i class="wizard-check ki ki-check"></i>
                                    <span class="wizard-number">1</span>
                                </div>
                                <div class="wizard-label">
                                    <h3 class="wizard-title">
                                        About You
                                    </h3>
                                    <div class="wizard-desc">
                                        Tell us about you
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wizard-step" data-wizard-type="step">
                            <div class="wizard-wrapper">
                                <div class="wizard-icon">
                                    <i class="wizard-check ki ki-check"></i>
                                    <span class="wizard-number">2</span>
                                </div>
                                <div class="wizard-label">
                                    <h3 class="wizard-title">
                                        Upload your documents
                                    </h3>
                                    <div class="wizard-desc">
                                        Upload your drivers licence or passport
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wizard-step" data-wizard-type="step">
                            <div class="wizard-wrapper">
                                <div class="wizard-icon">
                                    <i class="wizard-check ki ki-check"></i>
                                    <span class="wizard-number">3</span>
                                </div>
                                <div class="wizard-label">
                                    <h3 class="wizard-title">
                                        W-9 Verification
                                    </h3>
                                    <div class="wizard-desc">
                                        Provide a completed W-9 Verifcation
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
                    <span class="font-weight-bold text-muted font-size-h4">Having issues?</span>
                    <a href="javascript:;" class="font-weight-bolder text-primary font-size-h4 ml-2"
                       id="kt_login_signup">Get Help</a>
                </div>
            </div>


            <div class="d-flex flex-row-fluid flex-center">

                <div class="login-form login-form-signup">

                    <form action="{{ route('sample') }}" class="form" novalidate="novalidate" id="kt_login_signup_form"
                          enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">First Name</label>
                                        <input type="text"
                                               class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                               name="fname" id="fname" placeholder="First Name"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">Last Name</label>
                                        <input type="text"
                                               class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                               id="lname"
                                               name="lname" placeholder="Last Name"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                        <input type="text"
                                               id="email"
                                               class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                               name="email" placeholder="Your email"/>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">Password</label>
                                        <input type="password"
                                               id="password"
                                               class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                               name="password" placeholder="Your password"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">Confirm
                                            Password</label>
                                        <input type="password"
                                               id="password-confirm"
                                               class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                               name="password-confirm" placeholder="Confirm Password"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Are you an
                                        accredited investor?</label>
                                </div>
                                <div class="radio-inline mt-2">
                                    <label class="radio">
                                        <input type="radio" name="accredited_investor" value="Yes" checked>
                                        <span></span>
                                        Yes
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="accredited_investor" value="No"
                                               onkeydown="changeEvent(this,event)" onclick="changeEvent(this, event)">
                                        <span></span>
                                        No
                                    </label>

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
                                        <input type="radio" value="Individual" name="accredited_type" checked>
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

                        </div>


                        <div class="pb-5" data-wizard-type="step-content">

                            <div class="pt-lg-0 pt-5 pb-15">
                                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">
                                    Upload your documents
                                </h3>

                            </div>


                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Verification
                                    Document</label>
                                <select class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
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


                            <div class="row">
                                <div class="col-xl-12 dropzone">
                                    <div class="dz-message" id="uploadpassport">
                                        Drop files here or click to upload.
                                        <br>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="pb-5" data-wizard-type="step-content">

                            <div class="pt-lg-0 pt-5 pb-15">
                                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">W-9
                                    Verification</h3>
                                <div class="text-muted font-weight-bold font-size-h4">
                                    <p>Provide a completed W-9 form</p>
                                    <a href="{{ asset('w9.pdf') }}" download>Download W-9 Form from here</a>
                                </div>
                            </div>

                            <div class="col-xl-12 dropzone">
                                <div class="dz-message" id="uploadw9form">
                                    Drop files here or click to upload.
                                    <br>
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


<script src="assets/js/pages/custom/login/login-3.js?v=7.0.6"></script>
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
    let myForm = document.getElementById('kt_login_signup_form');
    let formData = new FormData(myForm);

    function submitForm() {
        let signup = document.getElementById('kt_login_signup_form_submit_button');
        signup.innerText = "Submitting ...";
        formData.append('firstname', document.getElementById('fname').value)
        formData.append('lastname', document.getElementById('lname').value)
        formData.append('investoremail', document.getElementById('email').value)
        formData.append('investorpassword', document.getElementById('password').value)
        formData.append('investorpassword-confirm', document.getElementById('password-confirm').value)
        axios.post('/sample',
            formData,
            {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
        ).then(function () {
            Swal.fire({
                text: "You're good to go! Thank you for your patience as we complete KYC (Know Your Customer) verification. This process is required by law and may take up to 7 working days. All of your data and documentation is encrypted and secured",
                icon: "info",
                buttonsStyling: false,
                confirmButtonText: "Ok",
                customClass: {
                    confirmButton: "btn font-weight-bold btn-light-primary"
                }
            });
            setTimeout(function () {
                window.location.href = '/'
            }, 11000);
        })
            .catch(function () {
                Swal.fire({
                    text: "Sorry, looks like there are some errors detected, please try again.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary"
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
