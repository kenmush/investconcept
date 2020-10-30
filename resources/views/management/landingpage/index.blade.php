@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Landing Page Content</h2>
                <p class="mb-0">Landing Page Content</p>
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
                                    <th>Tag Line</th>
                                    <th>First Keyword</th>
{{--                                    <th>Username</th>--}}
                                    <th>Second Keyword</th>
                                    <th>Third Keyword</th>
                                    <td></td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contents as $content)
                                    <td>{{ $content['tag_line'] }}</td>
                                    <td>{{ $content['keyword_one'] }}</td>
                                    <td>{{ $content['keyword_two'] }}</td>
                                    <td>{{ $content['keyword_three'] }}</td>
                                    <td>
                                        <a href="{{ route('herosection.edit',$content['id']) }}">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
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
