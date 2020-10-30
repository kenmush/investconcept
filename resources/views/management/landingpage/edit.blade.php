@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Edit Landing Page</h2>
{{--                <p class="mb-0">Landing Page</p>--}}
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
                        <form action="{{ route('herosection.update',$contents['id']) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <!--Label: Tagline, Attributes:tag_line -->
                                    <div class="form-group">
                                        <label for="tag_line">Tagline</label>
                                        <input type="text" id="tag_line"
                                               aria-describedby="tag_line-help"
                                               name="tag_line" value="{{ $contents['tag_line'] }}"
                                               class="form-control @error('tag_line') is-invalid @enderror"
                                               placeholder="Tagline" required>
                                        @error('tag_line')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Tagline Description, Attributes:tag_line_description_one -->
                                    <div class="form-group">
                                        <label for="tag_line_description_one">Tagline Description</label>
                                        <input type="text" id="tag_line_description_one"
                                               aria-describedby="tag_line_description_one-help"
                                               name="tag_line_description_one" value="{{ $contents['tag_line_description_one'] }}"
                                               class="form-control @error('tag_line_description_one') is-invalid @enderror"
                                               placeholder="Tagline Description" required>
                                        @error('tag_line_description_one')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Tagline Description Two, Attributes:tag_line_description_two -->
                                    <div class="form-group">
                                        <label for="tag_line_description_two">Tagline Description Two</label>
                                        <input type="text" id="tag_line_description_two"
                                               aria-describedby="tag_line_description_two-help"
                                               name="tag_line_description_two" value="{{ $contents['tag_line_description_two'] }}"
                                               class="form-control @error('tag_line_description_two') is-invalid @enderror"
                                               placeholder="Tagline Description Two" required>
                                        @error('tag_line_description_two')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <div class="mt-2"></div>
                                <div class="col-md-6">
                                   
                                    <!--Label: Call to Action A, Attributes:keyword_one -->
                                    <div class="form-group">
                                        <label for="keyword_one">First Keyword</label>
                                        <input type="text" id="keyword_one"
                                               aria-describedby="keyword_one-help"
                                               name="keyword_one" value="{{ $contents['keyword_one'] }}"
                                               class="form-control @error('keyword_one') is-invalid @enderror"
                                               placeholder="Call to Action A" required>
                                        @error('keyword_one')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   
                                    <!--Label: Call to Action A Description, Attributes:keyword_one_description -->
                                    <div class="form-group">
                                        <label for="keyword_one_description">First Keyword Description</label>
                                        <input type="text" id="keyword_one_description"
                                               aria-describedby="keyword_one_description-help"
                                               name="keyword_one_description"
                                               value="{{ $contents['keyword_one_description'] }}"
                                               class="form-control @error('keyword_one_description') is-invalid @enderror"
                                               placeholder="Call to Action A Description" required>
                                        @error('keyword_one_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   
                                    <!--Label: Keyword 2, Attributes:keyword_two -->
                                    <div class="form-group">
                                        <label for="keyword_two">Second Keyword</label>
                                        <input type="text" id="keyword_two"
                                               aria-describedby="keyword_two-help"
                                               name="keyword_two" value="{{ $contents['keyword_two'] }}"
                                               class="form-control @error('keyword_two') is-invalid @enderror"
                                               placeholder="Keyword 2" required>
                                        @error('keyword_two')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   
                                    <!--Label: Keyword 2 Description, Attributes:keyword_twodescription -->
                                    <div class="form-group">
                                        <label for="keyword_two_description">Second Keyword Description</label>
                                        <input type="text" id="keyword_two_description"
                                               aria-describedby="keyword_two_description-help"
                                               name="keyword_two_description" value="{{ $contents['keyword_two_description'] }}"
                                               class="form-control @error('keyword_two_description') is-invalid @enderror"
                                               placeholder="Keyword 2 Description" required>
                                        @error('keyword_two_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   
                                    <!--Label: Keyword 3, Attributes:Keyword3description -->
                                    <div class="form-group">
                                        <label for="keyword_three">Third Keyword</label>
                                        <input type="text" id="keyword_three"
                                               aria-describedby="keyword_three-help"
                                               name="keyword_three" value="{{ $contents['keyword_three'] }}"
                                               class="form-control @error('keyword_three') is-invalid @enderror"
                                               placeholder="Keyword 3" required>
                                        @error('keyword_three')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Keyword 3 Description, Attributes:keyword3description -->
                                    <div class="form-group">
                                        <label for="keyword_three_description">Third Keyword Description</label>
                                        <input type="text" id="keyword_three_description"
                                               aria-describedby="keyword_three_description-help"
                                               name="keyword_three_description" value="{{ $contents['keyword_three_description'] }}"
                                               class="form-control @error('keyword_three_description') is-invalid @enderror"
                                               placeholder="Keyword 3 Description" required>
                                        @error('keyword_three_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!--Label: Footer Text, Attributes:footertext -->
                                    <div class="form-group">
                                        <label for="footer_about">Footer Text</label>
                                        <input type="text" id="footer_about"
                                               aria-describedby="footer_about-help"
                                               name="footer_about" value="{{ $contents['footer_about'] }}"
                                               class="form-control @error('footer_about') is-invalid @enderror"
                                               placeholder="Footer Text" required>
                                        @error('footer_about')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row float-right">
                                <div class="float-right">
                                    <button type="submit" class="float-right btn-sm btn btn-secondary">Update
                                        Information</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
