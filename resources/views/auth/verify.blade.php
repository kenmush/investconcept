@extends('layouts.landing')

@section('content')
    <div class="cta">
        <div class="container mb-5">
            <div class="cta-bg">
                <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                    <div class="col-12 d-xl-flex d-lg-flex d-block
                        align-items-center">
                        <div class="cta-text">
                            <div class="card">
                                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                                <div class="card-body">
                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('A fresh verification link has been sent to your email address.') }}
                                        </div>
                                    @endif

                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                    {{ __('If you did not receive the email') }},
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        </div>
    </div>
</div>
@endsection
