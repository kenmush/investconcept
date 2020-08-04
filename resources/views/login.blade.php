@extends('layouts.untapped')

@section('content')
    <div class="container h-100" style="height: 100vh">
        <div class="row h-100 justify-content-center align-items-center mb-6">
            <h3 style="font: Bold 50px/66px Roboto;color: #DBDCDC;text-align: left;">Login</h3>
        </div>

        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card" style="border-radius: 16px">
                    <div class="card-body shadow-lg">

                        @if($errors->has('email') || $errors->has('password'))
                            <div class="alert alert-danger" role="alert">
                                <strong>Wrong credentials</strong>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input required name="email" type="text" class="untapped-form" placeholder="Email">
                            <input required name="password" type="password" class="untapped-form "
                                   placeholder="Password"
                                   style="margin-top:
                            19px">

                            <button class="login-button">
                                <img src="{{ asset('untapped/keyboardarrow.svg') }}" alt="">
                                <i class="fa fa-arrow-circle-left fa-3x"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
