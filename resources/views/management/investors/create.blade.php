@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Investors</h2>
                <p class="mb-0">Create Investors</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header float-right">
                        <a href="{{ route('investors.index') }}" class="btn btn-secondary float-right btn-sm">
                            View Investor
                            <i class="fa fa-eye"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('investors.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                           <div class="row">
                               <div class="col-md-6">
                                   <!--Label: First Name, Attributes:firstname -->
                                   <div class="form-group">
                                       <label for="firstname">First Name</label>
                                       <input type="text" id="firstname"
                                              aria-describedby="firstname-help"
                                              name="firstname" value="{{ old('firstname') }}"
                                              class="form-control @error('firstname') is-invalid @enderror"
                                              placeholder="First Name" required>
                                       @error('firstname')
                                       <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                       @enderror
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <!--Label: Second Name, Attributes:secondname -->
                                   <div class="form-group">
                                       <label for="secondname">Second Name</label>
                                       <input type="text" id="secondname"
                                              aria-describedby="secondname-help"
                                              name="secondname" value="{{ old('secondname') }}"
                                              class="form-control @error('secondname') is-invalid @enderror"
                                              placeholder="Second Name" required>
                                       @error('secondname')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <!--Label: Last Name, Attributes:lastname -->
                                   <div class="form-group">
                                       <label for="lastname">Last Name</label>
                                       <input type="text" id="lastname"
                                              aria-describedby="lastname-help"
                                              name="lastname" value="{{ old('lastname') }}"
                                              class="form-control @error('lastname') is-invalid @enderror"
                                              placeholder="Last Name" required>
                                       @error('lastname')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <!--Label: Phone Number, Attributes:phonenumber -->
                                   <div class="form-group">
                                       <label for="phonenumber">Phone Number</label>
                                       <input type="text" id="phonenumber"
                                              aria-describedby="phonenumber-help"
                                              name="phonenumber" value="{{ old('phonenumber') }}"
                                              class="form-control @error('phonenumber') is-invalid @enderror"
                                              placeholder="Phone Number" required>
                                       @error('phonenumber')
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
                                   <!--Label: Language, Attributes:language -->
                                   <div class="form-group">
                                       <label for="language">Language</label>
                                       <input type="text" id="language"
                                              aria-describedby="language-help"
                                              name="language" value="{{ old('language') }}"
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
                                   <!--Label: Password, Attributes:password -->
                                   <div class="form-group">
                                       <label for="password">Password</label>
                                       <input type="password" id="password"
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
                               <div class="col-md-12">
                                   <div class="row float-right">
                                       <div class="float-right">
                                           <button class="btn btn-primary float-right">Add Investor</button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
