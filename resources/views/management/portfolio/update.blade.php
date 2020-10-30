@extends('layouts.newdash')

@section('content')
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Update Asset Invested</h2>
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
                        <form action="{{ route('portfolio.update',$asset['id']) }}" enctype="multipart/form-data"
                              method="post">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="asset_category" value="{{ $asset['asset_category'] }}">
                            <input type="hidden" name="asset_category" value="{{ $asset['asset_category'] }}">
                            <input type="hidden" name="investorid" value="{{ $asset['investor_id'] }}">
                            <input type="hidden" name="id" value="{{ $asset['id'] }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <!--Label: Amount Invested, Attributes:amount_invested -->
                                    <!--Label: Amount Invested, Attributes:amount_invested -->
                                    <div class="form-group">
                                        <label for="amount_invested">Amount Invested</label>
                                        <input type="text" id="amount_invested"
                                               aria-describedby="amount_invested-help"
                                               name="amount_invested" value="{{ $asset['amount_invested'] }}"
                                               class="form-control @error('amount_invested') is-invalid @enderror"
                                               placeholder="Amount Invested" required>
                                        @error('amount_invested')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Leverage, Attributes:leverage -->
                                    <div class="form-group">
                                        <label for="leverage">Leverage</label>
                                        <input type="text" id="leverage"
                                               aria-describedby="leverage-help"
                                               name="leverage" value="{{ $asset['leverage'] }}"
                                               class="form-control @error('leverage') is-invalid @enderror"
                                               placeholder="Leverage" required>
                                        @error('leverage')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Duration, Attributes:duration-75 -->
                                    <div class="form-group">
                                        <label for="duration">Duration</label>
                                        <input type="text" id="duration"
                                               aria-describedby="duration-help"
                                               name="duration" value="{{ $asset['duration'] }}"
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
                                    <!--Label: Interest, Attributes:interest -->
                                    <div class="form-group">
                                        <label for="interest">Interest</label>
                                        <input type="text" id="interest"
                                               aria-describedby="interest-help"
                                               name="interest" value="{{ $asset['interest'] }}"
                                               class="form-control @error('interest') is-invalid @enderror"
                                               placeholder="Interest" required>
                                        @error('interest')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Balance, Attributes:balance -->
                                    <div class="form-group">
                                        <label for="balance">Balance</label>
                                        <input type="text" id="balance"
                                               aria-describedby="balance-help"
                                               name="balance" value="{{ $asset['balance'] }}"
                                               class="form-control @error('balance') is-invalid @enderror"
                                               placeholder="Balance" required>
                                        @error('balance')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Label: Units, Attributes:units -->
                                    <div class="form-group">
                                        <label for="units">Units</label>
                                        <input type="text" id="units"
                                               aria-describedby="units-help"
                                               name="units" value="{{ $asset['units'] }}"
                                               class="form-control @error('units') is-invalid @enderror"
                                               placeholder="Units" required>
                                        @error('units')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row float-right">
                                <div class="float-right">
                                    <button class="float-right btn-sm btn btn-secondary">Update</button>
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
