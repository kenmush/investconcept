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
                            {{--                   --}}
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
    <!-- Button trigger modal -->


    <!-- Modal -->

@endsection
