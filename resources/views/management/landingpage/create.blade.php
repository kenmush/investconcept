@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Landing Page</h2>
                <p class="mb-0">Landing Page</p>
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
                                    <!--Label: Tagline, Attributes:tagline -->
                                    <div class="form-group">
                                        <label for="tagline">Tagline</label>
                                        <input type="text" id="tagline"
                                               aria-describedby="tagline-help"
                                               name="tagline" value="{{ old('tagline') }}"
                                               class="form-control @error('tagline') is-invalid @enderror"
                                               placeholder="Tagline" required>
                                        @error('tagline')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Tagline Description, Attributes:tagdescription -->
                                    <div class="form-group">
                                        <label for="tagdescription">Tagline Description</label>
                                        <input type="text" id="tagdescription"
                                               aria-describedby="tagdescription-help"
                                               name="tagdescription" value="{{ old('tagdescription') }}"
                                               class="form-control @error('tagdescription') is-invalid @enderror"
                                               placeholder="Tagline Description" required>
                                        @error('tagdescription')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row float-right">
                                <div class="float-right">
                                    <button class="float-right btn-sm btn btn-secondary">Add Information</button>
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
