@extends('layouts.untapped')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="
                width: 158px;
                height: 92px;
                background: transparent url({{ asset('motorbike.svg') }}) 0 0 no-repeat padding-box;
                opacity: 1;">
            </div>
            <div
                style="z-index:10;margin-left:-30px;margin-top:-25px;font: Bold 40px Roboto;color: #DBDCDC !important;">
                Motor Bike
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
                <img style="margin-top: -26px" src="{{ asset('untapped/bodaboda.png') }}" alt="">
            </div>
            <div class="col-md-4">
                <p class="highlights">Use Case</p>
                <p class="highlights-text">
                    While motorcycle taxis like boda bodas are present throughout Africa and beyond, the term boda boda
                    is specific to East Africa.[2] In Kenya, they are more frequently called piki pikis.
                </p>
            </div>
        </div>
        <div class="row" style="padding-top: 53px">
            <p style="text-align: left; font: Bold 30px/39px Roboto; letter-spacing: 0px; color: #DBDCDC; opacity: 1;">
                Innovators who use it
            </p>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('untapped/joroh.png') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4 class=" untapped-heading">Joroh</h4>
                                <p class="untapped-subtitle">Kenya</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('untapped/meridia.png') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4 class=" untapped-heading">Meridia</h4>
                                <p class="untapped-subtitle">Ghana</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('untapped/jamari.png') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4 class=" untapped-heading">Jamari</h4>
                                <p class="untapped-subtitle">Kenya</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('untapped/sarah.png') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4 class=" untapped-heading">Sarah</h4>
                                <p class="untapped-subtitle">Kenya</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
