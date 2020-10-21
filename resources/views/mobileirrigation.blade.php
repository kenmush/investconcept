@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Mobile Irrigation</h4>
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
                                            <p>
                                                The system can be shared by more than one farmer, and customers can spread the cost while still
                                                being able to irrigate commercial-sized plots. Two base systems and three different AMIS attachments
                                                are offered to meet specific smallholder needs.
                                            </p>
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
                                                         src="https://scontent.fmba5-1.fna.fbcdn.net/v/t1.0-9/120551521_146706670497921_516204423256179720_o.jpg?_nc_cat=100&_nc_sid=8bfeb9&_nc_eui2=AeGPS3pLns6pKjcYyFPYSNIUsOgd4NX3rLSw6B3g1festMDJTy5VBNK4brqxz6IDOxY55jX2F-F0DPzmHk_9u1wy&_nc_ohc=Ze9UrMw5t_4AX_N5fgd&_nc_ht=scontent.fmba5-1.fna&oh=f2ef9aefcab03f86269e01db7d0d4727&oe=5FB59EDD"
                                                         alt="First
                                                    slide">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100"
                                                         src="https://scontent.fmba5-1.fna.fbcdn.net/v/t1.0-9/119667709_132850901883498_8692490403029535238_o.jpg?_nc_cat=107&_nc_sid=730e14&_nc_eui2=AeHEe8dtqSRE533TQsJf4tDPL_hptN444tgv-Gm03jji2NbtJzzhV8Q709V0BRhE3ljbpVB9TeNXl3xzYo5agWIb&_nc_ohc=w9c7zWwzUSIAX_EPKnL&_nc_ht=scontent.fmba5-1.fna&oh=9a4619726836c2a70d92e9927a0c0e8f&oe=5FB48D9B"
                                                         alt="Second
                                                    slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100"
                                                         src="https://scontent.fmba5-1.fna.fbcdn.net/v/t1.0-9/120295703_141053437729911_8621952845124272356_o.jpg?_nc_cat=106&_nc_sid=8bfeb9&_nc_eui2=AeG8dT5GhXymaAMWUwIUUKdopvuNW3gJT6Km-41beAlPoq8ZS-FQbjEWH5jNjiYM0b7jueILMStEhrZEsr3K8QqK&_nc_ohc=Mzl5OXT6UzIAX9nr-9v&_nc_ht=scontent.fmba5-1.fna&oh=930df1131ddc1aec1567bd3b3ed8a092&oe=5FB798B4"
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
                                            <a href="{{ route('user-profile.show',['Wawira']) }}">
                                                <div class="card shadow shadow-outline shadow-lg" style="border-radius: 1rem">
                                                    <img class="card-img-top" src="{{ asset('untapped/wawira.png') }}" alt="Card image cap">
                                                    <div class="card-body text-center">
                                                        <h4 class=" untapped-heading">Wawira</h4>
                                                        <p class="untapped-subtitle">Kenya</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{ route('user-profile.show',['Kerubo']) }}">
                                                <div class="card shadow shadow-outline shadow-lg" style="border-radius: 1rem">
                                                    <img class="card-img-top" src="{{ asset('untapped/kerubo.png') }}" alt="Card image cap">
                                                    <div class="card-body text-center">
                                                        <h4 class=" untapped-heading">Kerubo</h4>
                                                        <p class="untapped-subtitle">Ghana</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{ route('user-profile.show',['Rehema']) }}">
                                                <div class="card shadow shadow-outline shadow-lg" style="border-radius: 1rem">
                                                    <img class="card-img-top" src="{{ asset('untapped/rehema.png') }}" alt="Card image cap">
                                                    <div class="card-body text-center">
                                                        <h4 class=" untapped-heading">Rehema</h4>
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
