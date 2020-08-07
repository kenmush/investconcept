@extends('layouts.untapped')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="
                width: 158px;
                height: 92px;
                background: transparent url({{ asset('untapped/mobileirrigation.svg') }}) 0 0 no-repeat padding-box;
                opacity: 1;">
            </div>
            <div
                style="z-index:10;margin-left:-30px;margin-top:-25px;font: Bold 40px Roboto;color: #DBDCDC !important;">
                Mobile Irrigation
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
                        <p class="highlights-text">412</p>
                    </div>
                    <div class="col-md-4">
                        <p class="highlights">$/User</p>
                        <p class="highlights-text">$90</p>
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
                <img style="margin-top: -26px" src="{{ asset('untapped/irrigation.png') }}" alt="">
            </div>
            <div class="col-md-4">
                <p class="highlights">Use Case</p>
                <p class="highlights-text">
                    The system can be shared by more than one farmer, and customers can spread the cost while still
                    being able to irrigate commercial-sized plots. Two base systems and three different AMIS attachments
                    are offered to meet specific smallholder needs.
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
                        <div class="card" style="border-radius: 1rem">
                            <img class="card-img-top" src="{{ asset('untapped/wawira.png') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4 class=" untapped-heading">Wawira</h4>
                                <p class="untapped-subtitle">Kenya</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="border-radius: 1rem">
                            <img class="card-img-top" src="{{ asset('untapped/kerubo.png') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4 class=" untapped-heading">Kerubo</h4>
                                <p class="untapped-subtitle">Ghana</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="border-radius: 1rem">
                            <img class="card-img-top" src="{{ asset('untapped/rehema.png') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4 class=" untapped-heading">Rehema</h4>
                                <p class="untapped-subtitle">Kenya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
