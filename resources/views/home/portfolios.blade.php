@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
@endphp
@extends('layouts.base')

@section('title', 'About Us')

@section('styles')
    @parent

@endsection
@inject('content', 'App\Http\Controllers\FrontController')
@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-lg-12">
                    <div class="page-next-level">
                        <h4 class="title">{{ $content->getContent('anvs8c', 'title') }}</h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="mb-0 bg-white rounded shadow breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">{{ $settings->site_name }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Portfolios</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="overflow-hidden text-white shape">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- About Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="border-0 rounded card">
                        <div class="card-body">
                            <!-- <h5 class="card-title"><b>Our Investment Portfolios: Your Path to Financial Prosperity</b></h5> -->
                            <p class="text-muted">At {{$settings->site_name}}, we understand that financial success is 
                                a journey, and we're here to guide you every step of the way. Our diverse investment 
                                portfolios offer a range of opportunities for you to grow your wealth and secure your 
                                financial future.</p>
                            
                            
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="pb-2 mb-4 text-center section-title">
                        <h4 class="mb-4 title"><span class="text-primary">{{ $content->getContent('vr6Xw0', 'title') }}</span></h4>
                        <p class="mx-auto mb-0 para-desc text-muted">{{ $content->getContent('vr6Xw0', 'description') }}
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">

                @foreach ($plans as $plan)
                    <div class="pt-2 mt-4 col-lg-4 col-md-6">
                        <div class="p-4 border-0 rounded-md shadow card pricing-rates business-rate">
                            <div class="p-0 card-body">
                                <span
                                    class="px-4 py-2 mb-0 rounded-lg d-inline-block bg-soft-primary h6 text-primary">{{ $plan->name }}</span>
                                <h2 class="mt-3 mb-0 font-weight-bold">{{ $settings->currency }} {{ number_format($plan->price, 0) }}
                                </h2>
                                <p class="text-muted">{{ $plan->expiration }}</p>



                                <ul class="pt-3 list-unstyled border-top">
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>Min. Possible
                                        deposit:
                                        {{ $settings->currency }}{{ number_format($plan->min_price, 0) }}</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>Max. Possible
                                        deposit:
                                        {{ $settings->currency }}{{ number_format($plan->max_price, 0) }}</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>
                                        Minimum return {{ $plan->minr }} %</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>
                                        Maximum return {{ $plan->maxr }} %</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>{{ $settings->currency }}{{ number_format($plan->gift, 0)}}
                                        Gift Bonus</li>
                                </ul>

                                <div class="mt-4">
                                    <a href="login" class="btn btn-block btn-primary">Buy Now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                @endforeach


                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </section>



    <!-- About End -->

    <!-- Team Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="pb-2 mb-4 text-center section-title">
                        <h6 class="text-primary">{{ $content->getContent('5hbB6X', 'title') }}</h6>
                        <h4 class="mb-4 title">{{ $content->getContent('5hbB6X', 'description') }}</h4>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="pt-2 mt-4 col-md-4">
                    <div class="text-center bg-transparent border-0 card features feature-clean work-process process-arrow">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-user-check d-block h3"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">{{ $content->getContent('Zrhm3I', 'title') }}</h5>
                            <p class="mb-0 text-muted">{{ $content->getContent('Zrhm3I', 'description') }}</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-md-4 mt-md-5 pt-md-3">
                    <div class="text-center bg-transparent border-0 card features feature-clean work-process process-arrow">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-transaction d-block h3"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">{{ $content->getContent('yTKhlt', 'title') }}</h5>
                            <p class="mb-0 text-muted">{{ $content->getContent('yTKhlt', 'description') }}</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-md-4 mt-md-5 pt-md-5">
                    <div class="text-center bg-transparent border-0 card features feature-clean work-process d-none-arrow">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-analysis d-block h3"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">{{ $content->getContent('u0Ervr', 'title') }}</h5>
                            <p class="mb-0 text-muted">{{ $content->getContent('u0Ervr', 'description') }}</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Team End -->

    <!-- Sign up Section Start -->
    <section class="overflow-hidden section mt-60 bg-soft-primary">
        <div class="container">
            <div class="p-4 roundedd bg-primary p-lg-5">
                <div class="row align-items-end">
                    <div class="col-md-8">
                        <div class="text-center section-title text-md-left">
                            <h4 class="mb-3 text-white title title-dark">{{ $content->getContent('Mnag31', 'title') }}</h4>
                            <p class="mb-0 text-white">{{ $content->getContent('Mnag31', 'description') }}</p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="mt-4 col-md-4 mt-sm-0">
                        <div class="text-center text-md-right">
                            <a href="{{ url('/register') }}" class="pt-3 pb-3 pl-4 pr-4 btn btn-light">Create Free
                                Account</a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
        <!--end container-->
    </section>
    <!-- End Sign up Section  -->


@endsection

@section('scripts')
    @parent

@endsection
