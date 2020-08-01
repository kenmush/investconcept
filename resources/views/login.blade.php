@extends('layouts.untapped')

@section('content')
<div class="container h-100" style="height: 100vh">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-4">
            <div class="card" style="border-radius: 16px">
                <div class="card-body shadow-lg">
                    <form>
                        <input type="text" class="untapped-form" placeholder="Name,Email">
                        <input type="text" class="untapped-form pt-4" placeholder="Password">

                        <button class="login-button">Submit</button>
                    </form>
{{--                    <div style="width: 56px; height: 56px;--}}
{{--                    border-radius: 20px;--}}
{{--                    background-color: #b0d2e3; opacity: 1;"--}}
{{--                    >--}}
{{--                        <i class="fa fa-arrow-left text-black-50 align-content-center"></i>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
