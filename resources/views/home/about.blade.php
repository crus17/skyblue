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
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
                            <h5 class="card-title"><b>About {{$settings->site_name}}: Your Partner in Financial Success</b></h5>
                            <p class="text-muted">Welcome to {{$settings->site_name}}, where your financial success is our top priority. 
                                We're not just an investment platform; we're your partner on a journey to prosperity. 
                                At {{$settings->site_name}}, we believe that everyone should have the opportunity to achieve their 
                                financial dreams, and we've dedicated ourselves to making that a reality.</p>
                            


                            <h5 class="card-title"><b>Our Mission:</b> </h5>
                            <p class="text-muted">{{$settings->site_name}} was born from a simple yet profound mission: 
                                to empower individuals to take control of their financial future. 
                                We understand that the world of investments can be complex and intimidating, 
                                but we're here to change that. Our mission is to demystify finance, make investing 
                                accessible to all, and provide the tools you need to succeed.</p>
                            
                            <h5 class="card-title"><b>What Sets Us Apart</b> </h5>
                            <p class="text-muted">
                                <em>Expertise:</em> We're proud of our team of financial experts 
                                who bring a wealth of knowledge and experience to the table. They curate investment 
                                opportunities, manage risks, and work tirelessly to ensure your financial goals are 
                                within reach.
                            </p>
                            <p class="text-muted">
                                <em>Customization:</em> We recognize that financial goals are personal. That's why we 
                                offer a diverse range of investment portfolios, each designed to cater to different 
                                aspirations and risk tolerances. Your journey with {{$settings->site_name}} is as unique as you are.
                            </p>
                            <p class="text-muted">
                                <em>Transparency:</em> We're committed to transparency and accountability. 
                                Your investments should never be a mystery. Our performance reports are accessible, 
                                and we're always ready to answer your questions.
                            </p>
                            

                            <h5 class="card-title"><b>Your Journey with {{$settings->site_name}}</b></h5>
                            <p class="text-muted">When you join {{$settings->site_name}}, you're not just investing; 
                                you're partnering with a team that cares about your financial success. 
                                Whether you're seeking stable income, robust growth, or a balanced approach, 
                                we've got you covered.</p>
                            
                            <h5 class="card-title"><b>A Path to Financial Prosperity</b></h5>
                            <p class="text-muted">We offer a range of investment portfolios, each with 
                                its unique blend of risk and reward. Choose the one that matches your 
                                financial goals and risk appetite:</p>
                            <ol class="text-muted" type="1">
                                <li><b>Basic Portfolio:</b> Ideal for newcomers, offering steady growth and a low entry point.</li>
                                <li><b>Growth Portfolio (3-Month):</b> Perfect for those seeking moderate returns over a short term.</li>
                                <li><b>Growth Portfolio (9-Month):</b> Tailored for a balance between risk and reward over a mid-term horizon.</li>
                                <li><b>Growth Portfolio (18-Month):</b> Designed for substantial gains over a more extended period.</li>
                                <li><b>Growth Portfolio (2-Year):</b> For those with an eye on substantial growth and long-term gains.</li>
                                
                            </ol>

                            <h5 class="card-title"><b>How We Invest Your Funds</b></h5>
                            <p class="text-muted">At {{$settings->site_name}}, we understand that you may be curious about how we invest 
                                your funds. We take a strategic approach, diversifying investments across industries 
                                with high returns. Our investments are grounded in the real world, backed by 
                                reputable partners, and designed to deliver the returns we promise. Your financial 
                                security is our utmost priority, and we work diligently to ensure that your 
                                investments grow as you envision.</p>

                            <h5 class="card-title"><b>Your Financial Security, Guaranteed</b></h5>
                            <p class="text-muted">At {{$settings->site_name}}, your financial security is paramount. We don't just offer 
                                investments; we offer peace of mind. Your investments are not only secure but also come 
                                with the assurance of guaranteed returns. We employ advanced risk management strategies 
                                and due diligence to protect your capital, ensuring you can sleep soundly at night.</p>
                            
                                
                            <h5 class="card-title"><b>ROI Distribution and Capital Availability:</b></h5>
                            <p class="text-muted">At {{$settings->site_name}}, we understand the importance of flexibility and 
                                accessibility when it comes to your investments. To ensure a seamless and 
                                user-friendly experience, we credit the Return on Investment (ROI) for each investment 
                                portfolio to your account balance on either a daily or weekly basis, depending on 
                                the portfolio type you choose.
                            </p>

                            <h5 class="card-title"><b>Distribution Frequencies:</b></h5>
                            <ol class="text-muted" type="1">
                                <li>
                                    <b>Daily ROI:</b> For certain portfolios, you'll receive your ROI on a daily basis. 
                                    This allows you to see immediate growth in your investments and make real-time decisions 
                                    with your returns.
                                </li>
                                <li>
                                    <b>Weekly ROI:</b> Other portfolios offer a weekly ROI distribution. This ensures that you
                                     receive returns regularly, providing you with a steady income stream.
                                </li>
                            </ol>

                            <h5 class="card-title"><b>Your Control, Your Choice:</b></h5>
                            <p class="text-muted">Your ROI is credited to your account balance, and here's where it gets exciting:
                                 you have the freedom to decide how you want to utilize those returns. You can:</p>
                            <ol class="text-muted" type="1">
                                <li><b>Withdraw:</b> If you need the returns for other purposes, you can withdraw them. 
                                    Your funds will be available for withdrawal, and you can enjoy the fruits of your 
                                    investment.</li>
                                <li><b>Reinvest:</b> Looking to compound your earnings? You have the option to reinvest your ROI, 
                                    allowing your investments to grow even faster.</li>
                                <li><b>Utilize:</b> Maybe you have other plans for your returns, like participating in other investment 
                                    opportunities or making purchases. You can use your ROI as you see fit.</li>
                            </ol>

                            <h5 class="card-title"><b>Invested Capital Availability:</b></h5>
                            <p class="text-muted" >We believe in giving you full control and access to your investments. Therefore, on 
                                the expiration of the investment period for your chosen portfolio, the initial 
                                capital you invested will become available to you. This means that you have the 
                                opportunity to reassess your financial goals and make new investment decisions.</p>
                            <p class="text-muted" >At {{$settings->site_name}}, our mission is to make your financial journey as smooth and customizable 
                                as possible. Your financial success is our priority, and that's why we offer you 
                                the flexibility to manage your ROI and access your invested capital when it matters 
                                most.</p>

                            <h5 class="card-title"><b>Join Us Today</b></h5>
                            <p class="text-muted" >Your path to financial prosperity starts with {{$settings->site_name}}. We're here to guide you, 
                                support you, and celebrate your success. Whether you're looking for income, growth,
                                 or a bit of both, we're ready to help you achieve your financial dreams.</p>

                            <p class="text-muted" >Invest with confidence. Invest with {{$settings->site_name}}.</p>

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
