@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Smart Water Meter</h4>
                    {{--                    <p class="mb-0">Your business dashboard template</p>--}}
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <div class="card">
                                        <div class="card-header border-0 pb-0">
                                            <h2 class="card-title">Use Case</h2>
                                        </div>
                                        <div class="card-body pb-0">
                                            <p>Smart meters communicate the information to the consumer for greater clarity
                                                of consumption behavior, and electricity suppliers for system monitoring and customer billing.</p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item d-flex px-0 justify-content-between">
                                                    <strong>Ticket</strong>
                                                    <span class="mb-0">$1000</span>
                                                </li>
                                                <li class="list-group-item d-flex px-0 justify-content-between">
                                                    <strong>Return</strong>
                                                    <span class="mb-0">10%</span>
                                                </li>
                                                <li class="list-group-item d-flex px-0 justify-content-between">
                                                    <strong>Duration</strong>
                                                    <span class="mb-0">18 Months</span>
                                                </li>
                                                <li class="list-group-item d-flex px-0 justify-content-between">
                                                    <strong>Impact</strong>
                                                    <span class="mb-0">Affordable</span> <br>
                                                    <span class="mb-0">Shareable</span> <br>
                                                    <span class="mb-0">Powerful</span>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 h-100 w-100 ">
                                    <div class="bootstrap-carousel shadow rounded-sm">
                                        <div id="carouselExampleIndicators2" class="carousel slide"
                                             data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators2" data-slide-to="0"
                                                    class=""></li>
                                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"
                                                    class="active"></li>
                                                <li data-target="#carouselExampleIndicators2" data-slide-to="2"
                                                    class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item">
                                                    <img class="d-block w-100"
                                                         src="data:image/jpeg;base64,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"
                                                         alt="First
                                                    slide">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100"
                                                         src="data:image/jpeg;base64,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"
                                                         alt="Second
                                                    slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100"
                                                         src="https://miro.medium.com/max/637/1*4kNTam3L2pxFuo25NrKMcw.jpeg"
                                                         alt="Third
                                                    slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators2"
                                               data-slide="prev"><span class="carousel-control-prev-icon"></span> <span
                                                        class="sr-only">Previous</span> </a><a
                                                    class="carousel-control-next" href="#carouselExampleIndicators2"
                                                    data-slide="next"><span class="carousel-control-next-icon"></span>
                                                <span class="sr-only">Next</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 53px">
                                <h4> Innovators who use it</h4>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="{{ route('user-profile.show',['Akinyi']) }}">
                                                <div class="card" style="border-radius: 1rem">
                                                    <img class="card-img-top" src="{{ asset('untapped/akinyi.png') }}" alt="Card image cap">
                                                    <div class="card-body text-center">
                                                        <h4 class=" untapped-heading">Akinyi</h4>
                                                        <p class="untapped-subtitle">Kenya</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{ route('user-profile.show',['Zawadi']) }}">
                                                <div class="card" style="border-radius: 1rem">
                                                    <img class="card-img-top" src="{{ asset('untapped/zawadi.png') }}" alt="Card image cap">
                                                    <div class="card-body text-center">
                                                        <h4 class=" untapped-heading">Zawadi</h4>
                                                        <p class="untapped-subtitle">Ghana</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{ route('user-profile.show',['Chepkirui']) }}">
                                                <div class="card" style="border-radius: 1rem">
                                                    <img class="card-img-top" src="{{ asset('untapped/chepkirui.png') }}"
                                                         alt="Card image cap">
                                                    <div class="card-body text-center">
                                                        <h4 class=" untapped-heading">Chepkirui</h4>
                                                        <p class="untapped-subtitle">Kenya</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
