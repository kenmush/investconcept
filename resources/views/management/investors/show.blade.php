@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Investor &mdash;&nbsp;{{ $investor['firstName'] }} {{
                $investor['middleName'] }}</h2>
{{--                <p class="mb-0"> {{ $investor['firstName'] }} {{ $investor['middleName'] }} {{ $investor['lastName']--}}
{{--                        }} ({{ $investor['email'] }})</p>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a href="{{ route('investors.create') }}" class="btn btn-secondary float-right btn-sm">
                                View Investor
                                <i class="fa fa-backward"></i>
                            </a>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('investors.create') }}" class="btn btn-secondary float-right btn-sm">
                                Add Investor
                                <i class="fa fa-backward"></i>
                            </a>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('investors.create') }}" class="btn btn-secondary float-right btn-sm">
                                Associate Assets
                                <i class="fa fa-backward"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                       <div class="row">
                           <div class="col-md-4">
                               <table class="table table-borderless">

                                   <tbody>
                                   <tr>
                                       <th>Investor Name:</th>
                                       <td>{{ $investor['firstName'] }} {{ $investor['middleName'] }}</td>
                                   </tr>
                                   <tr>
                                       <th>Investor Email:</th>
                                       <td>{{ $investor['email'] }}</td>
                                   </tr>

                                   </tbody>
                               </table>
                           </div>
                           <div class="col-md-8">
                               <associateassets :assets='@json($assets)'></associateassets>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
