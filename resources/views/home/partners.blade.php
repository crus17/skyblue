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
                                    <li class="breadcrumb-item active" aria-current="page">Our Partners</li>
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
                            <h5 class="card-title"><b>Our Partners: Collaborating for Your Financial Success</b></h5>
                            <p class="text-muted">At {{$settings->site_name}}, we believe in the power of collaboration. By partnering with 
                                respected organizations and industry leaders, we strengthen our commitment to delivering 
                                financial success to our users. These partnerships bring expertise, stability, and 
                                innovation to our investment strategies, ensuring that your financial goals are within reach.</p>
                            
                            
                            <h5 class="card-title"><b>Partnerships for Prosperity</b> </h5>
                            <p class="text-muted">
                                <em><b>Technology:</b></em> {{$settings->site_name}} collaborates with industry leaders such as TechSynergy, 
                                a renowned technology solutions provider, and StartUp Innovators, a hub for tech 
                                innovation. These partnerships enable us to navigate the ever-evolving tech landscape, 
                                harness growth opportunities, and secure your investments.
                            </p>
                            <p class="text-muted">
                                <em><b>Healthcare:</b></em> Our alliances with healthcare giants like MedLife Group and 
                                PharmaCare Innovations provide a solid foundation for your healthcare-related investments. 
                                These partnerships ensure that your investments in health remain stable and offer growth potential.
                            </p>
                            <p class="text-muted">
                                <em><b>Renewable Energy:</b></em> Sustainability and growth define our approach to 
                                renewable energy investments. We partner with key players in the renewable energy sector, 
                                including SolarEco, WindTech Solutions, and HydroPower Inc. Together, we strive for a 
                                greener future and sustainable financial success.
                            </p>
                            <p class="text-muted">
                                <em><b>Real Estate:</b></em> Real estate partnerships encompass residential and commercial 
                                property experts, including RealPro Developers and Commercial Realty Group. 
                                These collaborations add a layer of security and growth potential to your real estate 
                                investments, helping you achieve financial prosperity.
                            </p>
                            

                            <h5 class="card-title"><b>The Strength of Collaboration</b></h5>
                            <p class="text-muted">
                                <em><b>Reliable Partnerships:</b></em> Our commitment to reliability and performance is reflected 
                                in the strong relationships we've cultivated with our partners. These partnerships provide 
                                a solid foundation for your investments.
                            </p>
                            <p class="text-muted">
                                <em><b>Expertise:</b></em> Our partnerships extend to industry experts who work 
                                hand-in-hand with our dedicated team of financial professionals. The synergy of 
                                knowledge and experience is your assurance of success.
                            </p>
                            
                            <h5 class="card-title"><b>Your Financial Success, Our Priority</b></h5>
                            <p class="text-muted">We're dedicated to providing transparent, secure, and prosperous 
                                investment opportunities. Our collaborations with industry leaders and respected 
                                organizations are a testament to our commitment to your financial success.</p>

                            <p class="text-muted">Discover the strength of our partnerships, including TechSynergy, 
                                StartUp Innovators, MedLife Group, PharmaCare Innovations, SolarEco, WindTech Solutions, 
                                HydroPower Inc, RealPro Developers, and Commercial Realty Group, and how they contribute 
                                to your financial security and growth. Invest with {{$settings->site_name}} and embark on a journey to 
                                prosperity supported by the best in the business.</p>
                                
                            
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
