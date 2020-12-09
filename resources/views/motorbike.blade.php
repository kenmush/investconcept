@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">

{{--                    <h4>{{ $assets['categoryName'] }}</h4>--}}
                    <h4>Beneficiary</h4>
                    {{--                    <p class="mb-0">Your business dashboard template</p>--}}
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h2 class="card-title">Use Case</h2>
                                    </div>
                                    <div class="card-body pb-0">

                                        <p>{{ $assets['use_case'] }}</p>
                                        <ul class="list-group list-group-flush">
{{--                                            <li class="list-group-item d-flex px-0 justify-content-between">--}}
{{--                                                <strong>Ticket</strong>--}}
{{--                                                <span class="mb-0">{{ $assets['ticket'] }}</span>--}}
{{--                                            </li>--}}
                                            <li class="list-group-item d-flex px-0 justify-content-between">
                                                <strong>Return</strong>
                                                <span class="mb-0">{{ $assets['return_percentage'] }}%</span>
                                            </li>
                                            <li class="list-group-item d-flex px-0 justify-content-between">
                                                <strong>Duration</strong>
                                                <span class="mb-0">{{ $assets['duration'] }}</span>
                                            </li>
                                            <li class="list-group-item d-flex px-0 justify-content-between">
                                                <strong>Impact</strong>
                                                <span class="mb-0">  {{ $assets['impact'] }}</span> <br>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6  ">
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
                                                     src="https://miro.medium.com/max/3840/1*KPB5LVRiKK9LR4uEizo1Og.jpeg"
                                                     alt="First
                                                    slide">
                                            </div>
                                            <div class="carousel-item active">
                                                <img class="d-block w-100"
                                                     src="https://nairobinews.nation.co.ke/wp-content/uploads/2019/09/Boda-boda-Nairobi-1.jpg"
                                                     alt="Second
                                                    slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100"
                                                     src="data:image/jpeg;base64,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"
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
                                    @foreach($beneficiaries as $beneficiary)
                                        <div class="col-md-3 shadow-inner shadow-outline">
                                                <div class="card" style="border-radius: 1rem">
                                                    <img class="card-img-top"
                                                         src="{{ config('investordashboard.media_path').$beneficiary['avatar'] }}"
                                                         alt="{{ $beneficiary['firstName'] }}">
                                                    <div class="card-body text-center">
                                                        <h4 class=" untapped-heading">
                                                            {{ $beneficiary['firstName'] }}
                                                            {{ $beneficiary['middleName'] }}
{{--                                                            {{ $beneficiary['lastName'] }}--}}
                                                        </h4>
                                                        <p class="untapped-subtitle">
                                                            {{ $beneficiary['country'] }}
                                                        </p>
                                                    </div>
                                                </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
