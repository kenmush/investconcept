@extends('layouts.untapped')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-md-4">
                    <p style="font: Bold 50px/66px Roboto;color: #DBDCDC;">My assets</p>
                </div>
                <div class="col-md-8">
                    <div class="row align-bottom">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link align-bottom"
                                   style="font: Bold 20px/26px Roboto; color: #DBDCDC;"
                                   data-toggle="tab" href="#home" role="tab"
                                   aria-controls="home" aria-selected="true">
                                    Maps
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active align-bottom pl-4" style="font: Bold 20px/26px Roboto;"
                                   data-toggle="tab" href="#profile" role="tab" aria-controls="home"
                                   aria-selected="true">
                                    List
                                    {{--                                    <span--}}
                                    {{--                                        style="position: absolute;top: 15px;width:50px;height: 15px;z-index: 999; margin-left:-40px;--}}
                                    {{--                                background: 0 0 no-repeat padding-box padding-box rgba(176, 210, 227, 0.6);">--}}
                                    {{--                                    </span>--}}
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade " id="home" role="tabpanel"
                 aria-labelledby="home-tab">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <map-component :categories='@json($assets)'></map-component>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row" style="padding-top: 13px">
                    <asset-list></asset-list>
                </div>
            </div>
        </div>
    </div>
@endsection
