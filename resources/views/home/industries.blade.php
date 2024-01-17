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
                                    <li class="breadcrumb-item active" aria-current="page">Our Industries</li>
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
                            <h5 class="card-title"><b>Our Industries: Investing in Your Financial Success</b></h5>
                            <p class="text-muted">At {{$settings->site_name}}, we're dedicated to transforming your financial 
                                aspirations into reality. One way we achieve this is by strategically investing in a 
                                variety of industries. Our approach combines innovation, expertise, and partnerships 
                                with leading organizations to ensure your investments are both secure and profitable.</p>
                            
                            
                            <h5 class="card-title"><b>Investing in Growth and Stability</b> </h5>
                            <p class="text-muted">
                                <em><b>Technology:</b></em> We recognize the immense potential in technology 
                                investments. We're committed to exploring opportunities in the tech sector, from 
                                software development to cutting-edge hardware, where growth potential is abundant.
                            </p>
                            <p class="text-muted">
                                <em><b>Healthcare:</b></em> The healthcare industry is synonymous with stability and growth. 
                                Our investments in healthcare cover pharmaceuticals, biotechnology, and healthcare 
                                services, delivering both financial security and prosperity.
                            </p>
                            <p class="text-muted">
                                <em><b>Renewable Energy:</b></em> We're excited about the future of sustainable energy sources. 
                                Our investments in renewable energy encompass solar, wind, and hydroelectric power, 
                                providing growth potential while contributing to a sustainable future.
                            </p>
                            <p class="text-muted">
                                <em><b>Real Estate:</b></em> Real estate has consistently proven to be a reliable investment. 
                                {{$settings->site_name}}'s real estate portfolio includes residential and commercial properties, offering 
                                both income and capital appreciation.
                            </p>
                            

                            <h5 class="card-title"><b>A Secure Path to Financial Growth</b></h5>
                            <p class="text-muted">
                                <em><b>Partnerships:</b></em> We collaborate with reputable organizations and partners across 
                                these industries to ensure that your investments are supported by the best in the 
                                business.
                            </p>
                            <p class="text-muted">
                                <em><b>Expertise:</b></em> Our team of financial experts is continuously monitoring market 
                                trends and opportunities within these industries, guaranteeing that your investments 
                                align with your financial goals.
                            </p>
                            
                            <h5 class="card-title"><b>Your Financial Security, Our Priority</b></h5>
                            <p class="text-muted">Your investments are safeguarded by our commitment to transparency 
                                and a focus on realistic, consistent returns. At {{$settings->site_name}}, we prioritize financial 
                                security, and our strategic investments are designed to uphold this commitment.</p>

                            <p class="text-muted">We're here to make your financial success journey straightforward, 
                                secure, and prosperous. {{$settings->site_name}} is your partner in financial growth, offering diverse 
                                portfolios, transparency, and the promise of achieving your financial dreams.</p>
                                
                            <p class="text-muted">Discover the industries we invest in, invest with confidence, 
                                and explore a future of financial success with {{$settings->site_name}}.</p>
                            
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
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
