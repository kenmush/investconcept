@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>{{ $assets['category'] ?? '' }}</h4>
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


                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-6">
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
                                            @foreach($assets['carousel'] as $pic)
                                                <div class="carousel-item
                                                    @if($loop->first) active @endif
                                                        ">
                                                    <img class="d-block w-100"
                                                         src="{{ asset('untapped/'.$pic) }}"
                                                         style="height: 400px;object-fit: contain"
                                                         alt="">
                                                </div>
                                            @endforeach
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
                            <h4> Partners</h4>

                            <div class="col-md-12">
                                <div class="row">
                                    @if(Str::of($assets['categoryName'])->contains('bike'))
                                        @foreach(collect($beneficiaries)->where('middleName','bikes') as $beneficiary)
                                            <div class="col-md-12 shadow-inner shadow-outline">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <img class="card-img-top"
                                                                 style="object-fit: cover;"
                                                                 src="{{ config('investordashboard.media_path').$beneficiary['avatar'] }}"
                                                                 alt="{{ $beneficiary['firstName'] }}">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h4 class="untapped-heading">
                                                                    {{ $beneficiary['firstName'] }}
                                                                    {{ $beneficiary['middleName'] }}
                                                                    {{--                                                            {{ $beneficiary['lastName'] }}--}}
                                                                </h4>
                                                                <p class="untapped-subtitle">
                                                                    <strong>Country:</strong> {{ $beneficiary['country'] }}
                                                                </p>
                                                                <p class="mt-0 pt-0">
                                                                    <strong>Assets
                                                                        Managed:</strong> {{ $beneficiary['Assets managed'] ?? '' }}
                                                                </p>
                                                                <p class="mt-0 pt-0">
                                                                    <strong>Planned Q1
                                                                        2021:</strong> {{ $beneficiary['Planned Q1 2021'] ?? '' }}
                                                                </p>
                                                                <p class="mt-0 pt-0">
                                                                    <strong>Mission:</strong> {{ $beneficiary['Mission'] ??
                                                            '' }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    @if(Str::of($assets['categoryName'])->contains('ATM') || Str::of($assets['categoryName'])->contains('Maji milele'))
                                        @foreach(collect($beneficiaries)->where('middleName','ATM') as $beneficiary)
                                            <div class="col-md-12 shadow-inner shadow-outline">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <img class="card-img-top"
                                                                 style="object-fit: cover;"
                                                                 src="{{ config('investordashboard.media_path').$beneficiary['avatar'] }}"
                                                                 alt="{{ $beneficiary['firstName'] }}">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h4 class="untapped-heading">
                                                                    {{ $beneficiary['firstName'] }}
                                                                    {{ $beneficiary['middleName'] }}
                                                                    {{--                                                            {{ $beneficiary['lastName'] }}--}}
                                                                </h4>
                                                                <p class="untapped-subtitle">
                                                                    <strong>Country:</strong> {{ $beneficiary['country'] }}
                                                                </p>
                                                                <p class="mt-0 pt-0">
                                                                    <strong>Assets
                                                                        Managed:</strong> {{ $beneficiary['Assets managed'] ?? '' }}
                                                                </p>
                                                                <p class="mt-0 pt-0">
                                                                    <strong>Planned Q1
                                                                        2021:</strong> {{ $beneficiary['Planned Q1 2021'] ?? '' }}
                                                                </p>
                                                                <p class="mt-0 pt-0">
                                                                    <strong>Mission:</strong> {{ $beneficiary['Mission'] ??
                                                            '' }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                            @foreach(collect($beneficiaries)->where('middleName','Milele') as $beneficiary)
                                                <div class="col-md-12 shadow-inner shadow-outline">
                                                    <div class="card">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <img class="card-img-top"
                                                                     style="object-fit: cover;"
                                                                     src="{{ config('investordashboard.media_path').$beneficiary['avatar'] }}"
                                                                     alt="{{ $beneficiary['firstName'] }}">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                    <h4 class="untapped-heading">
                                                                        {{ $beneficiary['firstName'] }}
                                                                        {{ $beneficiary['middleName'] }}
                                                                        {{--                                                            {{ $beneficiary['lastName'] }}--}}
                                                                    </h4>
                                                                    <p class="untapped-subtitle">
                                                                        <strong>Country:</strong> {{ $beneficiary['country'] }}
                                                                    </p>
                                                                    <p class="mt-0 pt-0">
                                                                        <strong>Assets
                                                                            Managed:</strong> {{ $beneficiary['Assets managed'] ?? '' }}
                                                                    </p>
                                                                    <p class="mt-0 pt-0">
                                                                        <strong>Planned Q1
                                                                            2021:</strong> {{ $beneficiary['Planned Q1 2021'] ?? '' }}
                                                                    </p>
                                                                    <p class="mt-0 pt-0">
                                                                        <strong>Mission:</strong> {{ $beneficiary['Mission'] ??
                                                            '' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                    @endif
                                    @if(Str::of($assets['categoryName'])->contains('pump'))
                                        @foreach(collect($beneficiaries)->where('middleName','pump') as $beneficiary)
                                            <div class="col-md-12 shadow-inner shadow-outline">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <img class="card-img-top"
                                                                 style="object-fit: cover;"
                                                                 src="{{ config('investordashboard.media_path').$beneficiary['avatar'] }}"
                                                                 alt="{{ $beneficiary['firstName'] }}">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h4 class="untapped-heading">
                                                                    {{ $beneficiary['firstName'] }}
                                                                    {{ $beneficiary['middleName'] }}
                                                                    {{--                                                            {{ $beneficiary['lastName'] }}--}}
                                                                </h4>
                                                                <p class="untapped-subtitle">
                                                                    <strong>Country:</strong> {{ $beneficiary['country'] }}
                                                                </p>
                                                                <p class="mt-0 pt-0">
                                                                    <strong>Assets
                                                                        Managed:</strong> {{ $beneficiary['Assets managed'] ?? '' }}
                                                                </p>
                                                                <p class="mt-0 pt-0">
                                                                    <strong>Planned Q1
                                                                        2021:</strong> {{ $beneficiary['Planned Q1 2021'] ?? '' }}
                                                                </p>
                                                                <p class="mt-0 pt-0">
                                                                    <strong>Mission:</strong> {{ $beneficiary['Mission'] ??
                                                            '' }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    @if(Str::of($assets['categoryName'])->contains('MvuaPap! Irrigation Trailer'))
                                        @foreach(collect($beneficiaries)->where('firstName','MvuaPap!') as $beneficiary)
                                            <div class="col-md-12 shadow-inner shadow-outline">
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <img class="card-img-top"
                                                                 style="object-fit: cover;"
                                                                 src="{{ config('investordashboard.media_path').$beneficiary['avatar'] }}"
                                                                 alt="{{ $beneficiary['firstName'] }}">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h4 class="untapped-heading">
                                                                    {{ $beneficiary['firstName'] }}
                                                                    {{ $beneficiary['middleName'] }}
                                                                    {{--                                                            {{ $beneficiary['lastName'] }}--}}
                                                                </h4>
                                                                <p class="untapped-subtitle">
                                                                    <strong>Country:</strong> {{ $beneficiary['country'] }}
                                                                </p>
                                                                <p class="mt-0 pt-0">
                                                                    <strong>Assets
                                                                        Managed:</strong> {{ $beneficiary['Assets managed'] ?? '' }}
                                                                </p>
                                                                <p class="mt-0 pt-0">
                                                                    <strong>Planned Q1
                                                                        2021:</strong> {{ $beneficiary['Planned Q1 2021'] ?? '' }}
                                                                </p>
                                                                <p class="mt-0 pt-0">
                                                                    <strong>Mission:</strong> {{ $beneficiary['Mission'] ??
                                                            '' }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    @if(Str::of($assets['categoryName'])->contains('Maji milele'))

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
