@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4> Raw Water ATM</h4>
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
                                            <p>A water ATM is an automated water vending machine that
                                                dispenses pure
                                                drinking water. It can be installed in urban and rural localities which
                                                do not
                                                have access to clean
                                                and pure drinking water. A water vending machine works like any regular
                                                bank ATM
                                                the only difference
                                                being that it provides water instead of money.</p>
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
                                                         src="https://www.untapped-inc.com/uploads/1/3/1/9/13198181/s964331410244644467_p1_i3_w1280.jpeg"
                                                         alt="First
                                                    slide">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100"
                                                         src="https://www.untapped-inc.com/uploads/1/3/1/9/13198181/sandro-044-sdcd0745_orig.jpg"
                                                         alt="Second
                                                    slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100"
                                                         src="https://www.untapped-inc.com/uploads/1/3/1/9/13198181/sandro-043-sdcd0500_orig.jpg"
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
                                                    <img class="card-img-top" src="{{ asset('untapped/wawuda.png') }}"
                                                         alt="Card image cap">
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
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
