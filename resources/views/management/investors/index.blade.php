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
                        <div class="form-head d-flex mb-3 align-items-start">
                            <div class="mr-auto d-none d-lg-block">
                                <h2 class="text-black font-w600 mb-0">Investors</h2>
{{--                                <p class="mb-0">Here is your order list data</p>--}}
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-primary light d-flex align-items-center svg-btn" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-file-excel-o"></i>
                                    <span class="fs-16 ml-3">Export</span>
                                </button>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table id="investorsTable" class="table table-responsive-sm dataTablesCard">
                                <thead>
                                <tr>
{{--                                    <th>#</th>--}}
                                    <th>Phone Number</th>
                                    <th>Name</th>
{{--                                    <th>Username</th>--}}
                                    <th>Email</th>
                                    <th>Created On</th>
                                    <td></td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($investors as $investor)

                                    <tr>
{{--                                        <th>{{$loop->iteration}}</th>--}}
                                        <td>{{$investor['phoneNumber']}}</td>
                                        <td>
                                            <a href="{{ route('investors.show',$investor['id']) }}">
                                                <div class="d-flex align-items-center">

                                                    <span class="w-space-no"> {{$investor['firstName'] .' '. $investor['middleName'] . ' '. $investor['lastName']}}</span>
                                                </div>
                                            </a>

                                        </td>
{{--                                        <td>{{$investor['username']}}</td>--}}
                                        <td>{{$investor['email']}}</td>
                                        <td>{{\Carbon\Carbon::parse($investor['created_at'])->toFormattedDateString()}}</td>
                                        <td>
                                            <a href="{{ route('investors.edit',$investor['id']) }}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </td>
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
