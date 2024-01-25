@extends('layouts.dash')
@section('title', $title)
@section('content')

    <!-- Page title -->
    <div class="page-title">
        <div class="row justify-content-between align-items-center">
            <div class="mb-3 col-md-6 mb-md-0">
                <h5 class="mb-0 text-white h3 font-weight-400">Welcome, {{ Auth::user()->name }}!</h5>
            </div>
        </div>
    </div>
    <x-danger-alert />
    <x-success-alert />
    @if (!empty($settings->welcome_message) and Auth::user()->created_at->diffInDays() <= 3)
        <div class="row">
            <div class="col-12">
                <div class="py-4 alert alert-primary alert-dismissible fade show" role="alert">
                    {{ $settings->welcome_message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    @endif
    @if ($settings->enable_annoc == 'on' and !empty($settings->newupdate))
        <div class="row">
            <div class="col-12">
                <div class="py-4 alert alert-info alert-dismissible fade show" role="alert">
                    {{ $settings->newupdate }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <h5 class="text-primary h5 mb-0">Total balance</h5>
                <span class="mb-0 h5 font-weight-bold">{{ $settings->currency }}{{ number_format(Auth::user()->account_bal, 2, '.', ',') }}</span>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="btn bg-warning text-white t_btn">Deposit</div>
            <div class="btn bg-secondary text-dark t_btn">Withdraw</div>
            
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        
                        <div class="d-flex flex-column align-items-start flex-fill">
                            <a href="{{ route('trading') }}" class="btn px-2"> Spot </a>
                            <a href="{{ route('trading') }}" class="btn px-2"> Future </a>
                            <a href="{{ route('trading') }}" class="btn px-2">Margin</a>
                            <a href="{{ route('t_portfolios') }}" class="btn px-2">Trades</a>
                            <a href="{{ route('mplans') }}" class="btn px-2">Earn</a>
                            <a href="{{ route('mplans') }}" class="btn px-2">Stake</a>
                            <a href="{{ route('mplans') }}" class="btn px-2">Trading Bot</a>
                        </div>
                    </div>

                    <div class="mt-4 row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-black">Refer Us & Earn</h5>
                                    <p>Use the below link to invite your friends.</p>
                                    <div class="mb-3 input-group">
                                        <input type="text" class="form-control myInput readonly"
                                            value="{{ Auth::user()->ref_link }}" id="reflink" readonly>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" onclick="myFunction()"
                                                type="button">
                                                <i class="fas fa-copy"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="mt-4 row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-black">Live Market Data</h5>
                                    @include('includes.chart')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

@endsection
