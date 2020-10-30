@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Assets</h2>
                <p class="mb-0">View Assets</p>
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
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Serial Number</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($assets as $asset)
                                <tr>
                                    <td>{{ $asset['brand'] }}</td>
                                    <td>{{ $asset['model'] }}</td>
                                    <td>{{ $asset['serial_number'] }}</td>
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
