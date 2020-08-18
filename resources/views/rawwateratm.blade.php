@extends('layouts.untapped')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="
                    width: 158px;
                    height: 92px;
                    background: transparent url({{ asset('untapped/rawwateratm.svg') }}) 0 0 no-repeat padding-box;
                    opacity: 1;">
            </div>
            <div
                    style="z-index:10;margin-left:-30px;margin-top:-25px;font: Bold 40px Roboto;color: #DBDCDC !important;">
                Raw Water ATM
            </div>
        </div>
        <div class="row" style="padding-top: 53px">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-4">
                        <p class="highlights">Ticket</p>
                        <p class="highlights-text">$1000</p>
                    </div>
                    <div class="col-md-4">
                        <p class="highlights">Return</p>
                        <p class="highlights-text">10%</p>
                    </div>
                    <div class="col-md-4">
                        <p class="highlights">Duration</p>
                        <p class="highlights-text">18 Months</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="highlights">Users</p>
                        <p class="highlights-text">38</p>
                    </div>
                    <div class="col-md-4">
                        <p class="highlights">$/User</p>
                        <p class="highlights-text">$40</p>
                    </div>
                    <div class="col-md-4">
                        <p class="highlights">Impact</p>
                        <p class="highlights-text">
                            - Affordable <br>
                            - Shareable <br>
                            - Powerful
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img style="margin-top: -26px" src="{{ asset('untapped/wateratmoperator.png') }}" alt="">
            </div>
            <div class="col-md-4">
                <p class="highlights">Use Case</p>
                <p class="highlights-text">A water ATM is an automated water vending machine that dispenses pure
                    drinking water. It can be installed in urban and rural localities which do not have access to clean
                    and pure drinking water. A water vending machine works like any regular bank ATM the only difference
                    being that it provides water instead of money.</p>
            </div>
        </div>
        <div class="row" style="padding-top: 53px">
            <p style="text-align: left; font: Bold 30px/39px Roboto; letter-spacing: 0px; color: #DBDCDC; opacity: 1;">
                Innovators who use it
            </p>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route('user-profile.show',['Makena']) }}">
                            <div class="card shadow-outline shadow-lg" style="border-radius: 1rem">
                                <img class="card-img-top" src="{{ asset('untapped/makena2.png') }}"
                                     alt="Card image cap">
                                <div class="card-body text-center">
                                    <h4 class=" untapped-heading">Makena</h4>
                                    <p class="untapped-subtitle">Kenya</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('user-profile.show',['Wawuda']) }}">
                            <div class="card shadow-outline shadow-lg" style="border-radius: 1rem">
                                <img class="card-img-top" src="{{ asset('untapped/wawuda.png') }}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h4 class=" untapped-heading">Wawuda</h4>
                                    <p class="untapped-subtitle">Ghana</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('user-profile.show',['Naserian']) }}">

                            <div class="card shadow-outline shadow-lg" style="border-radius: 1rem">
                                <img class="card-img-top" src="{{ asset('untapped/naserian.png') }}"
                                     alt="Card image cap">
                                <div class="card-body text-center">
                                    <h4 class=" untapped-heading">Naserian</h4>
                                    <p class="untapped-subtitle">Kenya</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
