@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Assets</h2>
                <p class="mb-0">Create Assets</p>
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
                        <form action="{{ route('myassets.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <!--Label: Category Name, Attributes:categoryName -->
                                    <div class="form-group">
                                        <label for="categoryName">Category Name</label>
                                        <input type="text" id="categoryName"
                                               aria-describedby="categoryName-help"
                                               name="categoryName" value="{{ old('categoryName') }}"
                                               class="form-control @error('categoryName') is-invalid @enderror"
                                               placeholder="Category Name" required>
                                        @error('categoryName')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Use Case, Attributes:use_case -->
                                    <div class="form-group">
                                        <label for="use_case">Use Case</label>
                                        <input type="text" id="use_case"
                                               aria-describedby="use_case-help"
                                               name="use_case" value="{{ old('use_case') }}"
                                               class="form-control @error('use_case') is-invalid @enderror"
                                               placeholder="Use Case" required>
                                        @error('use_case')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Duration, Attributes:duration -->
                                    <div class="form-group">
                                        <label for="duration">Duration</label>
                                        <input type="number" id="duration"
                                               aria-describedby="duration-help"
                                               name="duration" value="{{ old('duration') }}"
                                               class="form-control @error('duration') is-invalid @enderror"
                                               placeholder="Duration" required>
                                        @error('duration')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Ticket, Attributes:ticket -->
                                    <div class="form-group">
                                        <label for="ticket">Ticket</label>
                                        <input type="number" id="ticket"
                                               aria-describedby="ticket-help"
                                               name="ticket" value="{{ old('ticket') }}"
                                               class="form-control @error('ticket') is-invalid @enderror"
                                               placeholder="Ticket" required>
                                        @error('ticket')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Return Percentage, Attributes:return_percentage -->
                                    <div class="form-group">
                                        <label for="return_percentage">Return Percentage</label>
                                        <input type="number" id="return_percentage"
                                               aria-describedby="return_percentage-help"
                                               name="return_percentage" value="{{ old('return_percentage') }}"
                                               class="form-control @error('return_percentage') is-invalid @enderror"
                                               placeholder="Return Percentage" required>
                                        @error('return_percentage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Impact, Attributes:impact -->
                                    <div class="form-group">
                                        <label for="impact">Impact</label>
                                        <input type="text" id="impact"
                                               aria-describedby="impact-help"
                                               name="impact" value="{{ old('impact') }}"
                                               class="form-control @error('impact') is-invalid @enderror"
                                               placeholder="Impact" required>
                                        @error('impact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row float-right">
                                <div class="float-right">
                                    <button class="float-right btn-sm btn btn-secondary">Add Asset</button>
                                </div>
                            </div>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
