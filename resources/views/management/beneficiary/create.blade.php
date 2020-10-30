@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Create Beneficiary</h2>
{{--                <p class="mb-0">Create Assets</p>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header float-right">
                        <a href="{{ route('myassets.index') }}" class="btn btn-secondary float-right btn-sm">
                            View Assets
                            <i class="fa fa-eye"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('beneficiary.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <!--Label: Phonenumber, Attributes:phoneNumber -->
                                    <div class="form-group">
                                        <label for="phoneNumber">Phonenumber</label>
                                        <input type="text" id="phoneNumber"
                                               aria-describedby="phoneNumber-help"
                                               name="phoneNumber" value="{{ old('phoneNumber') }}"
                                               class="form-control @error('phoneNumber') is-invalid @enderror"
                                               placeholder="Phonenumber" required>
                                        @error('phoneNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: First Name, Attributes:firstName -->
                                    <div class="form-group">
                                        <label for="firstName">First Name</label>
                                        <input type="text" id="firstName"
                                               aria-describedby="firstName-help"
                                               name="firstName" value="{{ old('firstName') }}"
                                               class="form-control @error('firstName') is-invalid @enderror"
                                               placeholder="First Name" required>
                                        @error('firstName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Middle Name, Attributes:middleName -->
                                    <div class="form-group">
                                        <label for="middleName">Middle Name</label>
                                        <input type="text" id="middleName"
                                               aria-describedby="middleName-help"
                                               name="middleName" value="{{ old('middleName') }}"
                                               class="form-control @error('middleName') is-invalid @enderror"
                                               placeholder="Middle Name" required>
                                        @error('middleName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Last Name, Attributes:lastName -->
                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" id="lastName"
                                               aria-describedby="lastName-help"
                                               name="lastName" value="{{ old('lastName') }}"
                                               class="form-control @error('lastName') is-invalid @enderror"
                                               placeholder="Last Name" required>
                                        @error('lastName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Username, Attributes:username -->
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" id="username"
                                               aria-describedby="username-help"
                                               name="username" value="{{ old('username') }}"
                                               class="form-control @error('username') is-invalid @enderror"
                                               placeholder="Username" required>
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Language, Attributes:language -->
                                    <div class="form-group">
                                        <label for="language">Language</label>
                                        <input type="text" id="language"
                                               aria-describedby="language-help"
                                               disabled
                                               name="language" value="English"
                                               class="form-control @error('language') is-invalid @enderror"
                                               placeholder="Language" required>
                                        @error('language')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Email, Attributes:email -->
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email"
                                               aria-describedby="email-help"
                                               name="email" value="{{ old('email') }}"
                                               class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Email" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Country, Attributes:country -->
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <input type="text" id="country"
                                               aria-describedby="country-help"
                                               name="country" value="{{ old('country') }}"
                                               class="form-control @error('country') is-invalid @enderror"
                                               placeholder="Country" required>
                                        @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Password, Attributes:password -->
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" id="password"
                                               aria-describedby="password-help"
                                               name="password" value="{{ old('password') }}"
                                               class="form-control @error('password') is-invalid @enderror"
                                               placeholder="Password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row float-right">
                                <div class="float-right">
                                    <button class="float-right btn-sm btn btn-secondary">Add Beneficiary</button>
                                </div>
                            </div>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
