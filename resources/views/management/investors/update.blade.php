@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Investors</h2>
                <p class="mb-0">Update Investors</p>
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
                        <form action="{{ route('investors.update',$investor['id'] ) }}"
                              enctype="multipart/form-data" method="post">
                            @csrf
                           <div class="row">
                               <div class="col-md-6">
                                   <!--Label: First Name, Attributes:firstname -->
                                   <div class="form-group">
                                       <label for="firstname">First Name</label>
                                       <input type="text" id="firstname"
                                              aria-describedby="firstname-help"
                                              name="firstname" value="{{ $investor['firstName'] ?? '' }}"
                                              class="form-control @error('firstname') is-invalid @enderror"
                                              placeholder="First Name" >
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
                                              name="secondname" value="{{ $investor['middleName'] ?? '' }}"
                                              class="form-control @error('secondname') is-invalid @enderror"
                                              placeholder="Second Name" >
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
                                              name="lastname" value="{{ $investor['lastName'] ?? '' }}"
                                              class="form-control @error('lastname') is-invalid @enderror"
                                              placeholder="Last Name" >
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
                                              name="phonenumber" value="{{ $investor['phoneNumber'] ?? '' }}"
                                              class="form-control @error('phonenumber') is-invalid @enderror"
                                              placeholder="Phone Number" >
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
                                              name="username" value="{{ $investor['username'] ?? '' }}"
                                              class="form-control @error('username') is-invalid @enderror"
                                              placeholder="Username" >
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
                                              name="email" value="{{ $investor['email'] ?? '' }}"
                                              class="form-control @error('email') is-invalid @enderror"
                                              placeholder="Email" >
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
                                       <select type="text" id="language"
                                              aria-describedby="language-help"
                                              name="language" value="{{ $investor['language'] ?? '' }}"
                                              class="form-control @error('language') is-invalid @enderror"
                                               >
                                           <option selected>English</option>
                                           <option>Swahili</option>
                                           <option>French</option>
                                       </select>
                                       @error('language')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <!--Label: Avatar, Attributes:avatar -->
                                   <div class="form-group">
                                       <label for="avatar">Avatar</label>
                                       <input type="file" id="avatar"
                                              aria-describedby="avatar-help"
                                              name="avatar" value="{{ old('avatar') }}"
                                              class="form-control @error('avatar') is-invalid @enderror"
                                              placeholder="Avatar" >
                                       @error('avatar')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                       @enderror
                                   </div>
                               </div>
                               @method('PUT')
                               <div class="col-md-6">
                                   <!--Label: Password, Attributes:password -->
                                   <div class="form-group">
                                       <label for="password">Password</label>
                                       <input type="password" id="password"
                                              aria-describedby="password-help"
                                              name="password" value="{{ $investor['password'] ?? '' }}"
                                              class="form-control @error('password') is-invalid @enderror"
                                              placeholder="Password" >
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
                                           <button class="btn btn-primary float-right">Update Investor</button>
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
