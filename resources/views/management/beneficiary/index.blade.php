@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Beneficiaries</h2>
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
                                @foreach($beneficiaries as $beneficiary)

                                    <tr>
{{--                                        <th>{{$loop->iteration}}</th>--}}
                                        <td>{{$beneficiary['phoneNumber']}}</td>
                                        <td>
                                            <a href="{{ route('beneficiary.show',$beneficiary['id']) }}">
                                                <div class="d-flex align-items-center">

                                                    <span class="w-space-no"> {{$beneficiary['firstName'] .' '. $beneficiary['middleName'] . ' '. $beneficiary['lastName']}}</span>
                                                </div>
                                            </a>

                                        </td>
{{--                                        <td>{{$investor['username']}}</td>--}}
                                        <td>{{$beneficiary['email']}}</td>
                                        <td>{{\Carbon\Carbon::parse($beneficiary['created_at'])->toFormattedDateString()}}</td>
                                        <td>
{{--                                            <a href="{{ route('investors.edit',$beneficiary['id']) }}">--}}
{{--                                                <i class="fa fa-pencil"></i>--}}
{{--                                            </a>--}}
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
