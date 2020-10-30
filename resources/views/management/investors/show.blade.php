@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <div class="col-md-3">
                            @if($investor['avatar'] !== null)
                                <img src="{{config('investordashboard.media_path').$investor['avatar']}}"
                                     class="rounded-circle" width="75" alt="">
                            @else
                            @endif
                        </div>
                        <div class="col-md-9 align-items-center">
                            <h2 class="text-black font-w600 mb-0">{{ $investor['firstName'] }} {{
                $investor['middleName'] }}</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a href="{{ route('investors.index') }}" class="btn btn-secondary float-right btn-sm">
                                View Investor
                                <i class="fa fa-backward"></i>
                            </a>
                        </div>

                        <div class="float-right">
                            <a href="{{ route('investors.create') }}" class="btn btn-secondary float-right btn-sm mr-3">
                                Add Investor
                                <i class="fa fa-plus-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="assetsTable" class="table table-responsive-md">
                                        <thead>
                                        <tr>
                                            <th><strong>Asset Name</strong></th>
                                            <th><strong>Units</strong></th>
                                            <th><strong>Total Invested</strong></th>
                                            <th><strong>Interest Generated</strong></th>
                                            <th><strong>Duration</strong></th>
                                            <th><strong>Impact Multiplier</strong></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tableAssets as $asset)
                                            <tr>
                                                <td>
                                                    {{--                                            <a href="{{ route('portfolio.show',[$asset['id']]) }}">--}}
                                                    <a href="{{ url('/administrate/manageasset/'.$asset['id'].'/'
                                                    .$investor['id']) }}">
                                                        {{$asset['asset_category_name'] ?? ''}}
                                                    </a>
                                                </td>
                                                <td>{{$asset['units']}}</td>
                                                <td>{{$asset['amount_invested']}} $</td>
                                                <td>{{$asset['interest']}}%</td>
                                                <td>{{$asset['duration']}} Months</td>
                                                <td>{{$asset['leverage']}}</td>
                                                <td>
                                                    <a href="{{ route('portfolio.edit',$asset['id']) }}">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-secondary btn-sm"
                                                       href="{{ url('/administrate/manageasset/' .$asset['id'].'/' .$investor['id']) }}">
                                                        Add Assets
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{--                   --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Investments</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <associateassets :assets='@json($assets)'
                                                     :invesotorid='@json($investor['id'])'></associateassets>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->

@endsection
