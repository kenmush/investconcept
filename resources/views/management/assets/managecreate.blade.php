@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Create Assets</h2>
{{--                <p class="mb-0">Create Assets</p>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header float-right">
                        <a href="{{ route('myassets.index') }}" class="btn btn-secondary float-right btn-sm">
                            View Assets
                            <i class="fa fa-eye"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('manageassets.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="investment" value="{{$investmentId}}">
                            <input type="hidden" name="investor" value="{{$investor}}">

                            <div class="row">
                                <div class="col-md-6">
                                    <!--Label: Beneficiary, Attributes:beneficiary -->
                                    <div class="form-group">
                                        <label for="beneficiary">Beneficiary</label>
                                        <select type="text" id="beneficiary"
                                               aria-describedby="beneficiary-help"
                                               name="beneficiary"
                                               class="form-control @error('beneficiary') is-invalid @enderror"
                                                >
                                            @foreach($beneficiaries as $beneficiary)
                                                <option
                                                        value="{{$beneficiary['id']}}">
                                                    {{$beneficiary['firstName']}} {{$beneficiary['middleName']}} {{$beneficiary['lastName']}}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('beneficiary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Brand, Attributes:brand -->
                                    <div class="form-group">
                                        <label for="brand">Brand</label>
                                        <input type="text" id="brand"
                                               aria-describedby="brand-help"
                                               name="brand" value="{{ old('brand') }}"
                                               class="form-control @error('brand') is-invalid @enderror"
                                               placeholder="Brand" required>
                                        @error('brand')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Model, Attributes:model -->
                                    <div class="form-group">
                                        <label for="model">Model</label>
                                        <input type="text" id="model"
                                               aria-describedby="model-help"
                                               name="model" value="{{ old('model') }}"
                                               class="form-control @error('model') is-invalid @enderror"
                                               placeholder="Model" required>
                                        @error('model')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Serial Number, Attributes:serial_number -->
                                    <div class="form-group">
                                        <label for="serial_number">Serial Number</label>
                                        <input type="text" id="serial_number"
                                               aria-describedby="serial_number-help"
                                               name="serial_number" value="{{ old('serial_number') }}"
                                               class="form-control @error('serial_number') is-invalid @enderror"
                                               placeholder="Serial Number" required>
                                        @error('serial_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Location, Attributes:location -->
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" id="location"
                                               aria-describedby="location-help"
                                               name="location" value="{{ old('location') }}"
                                               class="form-control @error('location') is-invalid @enderror"
                                               placeholder="Location" required>
                                        @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Latitude, Attributes:latitude -->
                                    <div class="form-group">
                                        <label for="latitude">Latitude</label>
                                        <input type="text" id="latitude"
                                               aria-describedby="latitude-help"
                                               name="latitude" value="{{ old('latitude') }}"
                                               class="form-control @error('latitude') is-invalid @enderror"
                                               placeholder="Latitude" required>
                                        @error('latitude')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Longitude, Attributes:longitude -->
                                    <div class="form-group">
                                        <label for="longitude">Longitude</label>
                                        <input type="text" id="longitude"
                                               aria-describedby="longitude-help"
                                               name="longitude" value="{{ old('longitude') }}"
                                               class="form-control @error('longitude') is-invalid @enderror"
                                               placeholder="Longitude" required>
                                        @error('longitude')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Asset Cost, Attributes:asset_cost -->
                                    <div class="form-group">
                                        <label for="asset_cost">Asset Cost</label>
                                        <input type="number" id="asset_cost"
                                               aria-describedby="asset_cost-help"
                                               name="asset_cost" value="{{ old('asset_cost') }}"
                                               class="form-control @error('asset_cost') is-invalid @enderror"
                                               placeholder="Asset Cost" required>
                                        @error('asset_cost')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Revenue, Attributes:revenue -->
                                    <div class="form-group">
                                        <label for="revenue">Revenue</label>
                                        <input type="number" id="revenue"
                                               aria-describedby="revenue-help"
                                               name="revenue" value="{{ old('revenue') }}"
                                               class="form-control @error('revenue') is-invalid @enderror"
                                               placeholder="Revenue" required>
                                        @error('revenue')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Revenue Returned, Attributes:revenue_returned -->
                                    <div class="form-group">
                                        <label for="revenue_returned">Revenue Returned</label>
                                        <input type="number" id="revenue_returned"
                                               aria-describedby="revenue_returned-help"
                                               name="revenue_returned" value="{{ old('revenue_returned') }}"
                                               class="form-control @error('revenue_returned') is-invalid @enderror"
                                               placeholder="Revenue Returned" required>
                                        @error('revenue_returned')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Image, Attributes:image -->
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image"
                                               aria-describedby="image-help"
                                               name="image" value="{{ old('image') }}"
                                               class="form-control @error('image') is-invalid @enderror"
                                               placeholder="Image" required>
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row float-right">
                                    <div class="float-right">
                                        <button class="btn btn-primary float-right">Add Asset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
