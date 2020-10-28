@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Investors</h2>
                <p class="mb-0">Manage Investors</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a href="{{ route('investors.create') }}" class="btn btn-secondary float-right btn-sm">
                                Add Investor
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-sm">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Phone Number</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Created On</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($investors as $investor)

                                    <tr>
                                        <th>{{$loop->iteration}}</th>
                                        <td>{{$investor['phoneNumber']}}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if($investor['avatar'] !== null)
                                                <img src="{{config('investordashboard.media_path').$investor['avatar']}}" class="rounded-lg mr-2" width="75" alt="">
                                                @else
                                                @endif
                                                <span class="w-space-no"> {{$investor['firstName'] .' '. $investor['middleName'] . ' '. $investor['lastName']}}</span></div>


                                        </td>
                                        <td>{{$investor['username']}}</td>
                                        <td>{{$investor['email']}}</td>
                                        <td>{{\Carbon\Carbon::parse($investor['created_at'])->toFormattedDateString()}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
