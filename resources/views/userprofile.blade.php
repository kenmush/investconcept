@extends('layouts.untapped')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="
                width: 158px;
                height: 92px;
                background: transparent url({{ asset('untapped/faceprofile.svg') }}) 0 0 no-repeat padding-box;
                opacity: 1;">
            </div>
            <div
                style="z-index:10;margin-left:-30px;margin-top:-25px;font: Bold 40px Roboto;color: #DBDCDC !important;">
                Joroh
            </div>
        </div>
        <div class="row" style="padding-top: 53px">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6">
                        <p class="highlights"># of ride</p>
                        <p class="highlights-text">7300</p>
                    </div>
                    <div class="col-md-6">
                        <p class="highlights"># of Km</p>
                        <p class="highlights-text">8923</p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="highlights"># of voyager</p>
                        <p class="highlights-text">8340</p>
                    </div>
                    <div class="col-md-6">
                        <p class="highlights">$ made</p>
                        <p class="highlights-text">10.783$</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img style="margin-top: -26px" src="{{ asset('untapped/jorohbig.png') }}" alt="">
            </div>
            <div class="col-md-4">
                <p class="highlights">Use Case</p>
                <p class="highlights-text">Joroh has been a moto taxi driver with Teliman for 2 years. He come form
                    Timbuktu where his family herds cattle.</p>
            </div>
        </div>
        <div class="row" style="padding-top: 53px">
            <p style="text-align: left; font: Bold 30px/39px Roboto; letter-spacing: 0px; color: #DBDCDC; opacity: 1;">
                Innovators who use motorbike
            </p>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('untapped/joroh.png') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4 class=" untapped-heading">Kadirm</h4>
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

                </div>
            </div>
        </div>
    </div>
@endsection
