@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
@endphp
@extends('layouts.base')

@section('title', 'Courses')

@section('styles')
    @parent

@endsection
@inject('content', 'App\Http\Controllers\FrontController')
@section('content')
    <link href="{{ asset('themes/purposeTheme/temp/css/course_styles.css') }}" rel="stylesheet">
    <!-- <img src="{{ asset('themes/purposeTheme/temp/images/about.jpg') }}" alt=""> -->

    <!-- Hero Start -->
    <section >
        <div class="hero-text">
            <h1>LEARN THE SECRET TO REAL INSTAGRAM GROWTH</h1>
            <p>HOW YOU CAN GET MORE FOLLOWERS AND BUILD YOUR BRAND - FAST!</p>
            <p>DISCOVER THE "IGDOM METHOD" NOW</p>
        </div>
        <div class="video-container">
            <video id="myVideo" controls width="100%" height="auto" poster="https://foundr.com/igdom-public-sp-src/images/1184874744.jpg" preload="none">
                <source src="sample-video.mp4" type="video/mp4">
                <source src="sample-video.webm" type="video/webm">
                <!-- Default display picture with multiple sources -->
                <picture>
                    <source srcset="https://foundr.com/igdom-public-sp-src/images/1184874744.webp" type="image/webp">
                    <source srcset="https://foundr.com/igdom-public-sp-src/images/1184874744.jpg" type="image/jpeg">
                    <!-- Lazy-loading supported source -->
                    <img src="https://foundr.com/igdom-public-sp-src/images/1184874744.jpg" alt="Default Display Picture" width="720" height="374" loading="lazy">
                </picture>
                Your browser does not support the video tag.
            </video>
            <div class="play-button" id="playButton">&#9658;</div>
        </div>

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

    <!-- Start Contact -->
    <section class="pb-4 section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center border-0 card features feature-clean">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-phone d-block h3"></i>
                        </div>
                        <div class="mt-3 content">
                            <h5 class="font-weight-bold">{{ $content->getContent('0EXbji', 'title') }}</h5>

                            <a href="tel:{{ $content->getContent('0EXbji', 'description') }}"
                                class="text-primary">{{ $content->getContent('0EXbji', 'description') }}</a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-md-4 mt-sm-0 pt-sm-0">
                    <div class="text-center border-0 card features feature-clean">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-envelope d-block h3"></i>
                        </div>
                        <div class="mt-3 content">
                            <h5 class="font-weight-bold">{{ $content->getContent('HLgyaQ', 'title') }}</h5>

                            <a href="mailto:{{ $content->getContent('HLgyaQ', 'description') }}"
                                class="text-primary">{{ $content->getContent('HLgyaQ', 'description') }}</a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-md-4 mt-sm-0 pt-sm-0">
                    <div class="text-center border-0 card features feature-clean">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-map-marker d-block h3"></i>
                        </div>
                        <div class="mt-3 content">
                            <h5 class="font-weight-bold">{{ $content->getContent('52GPRA', 'title') }}</h5>
                            <p class="text-muted">{{ $content->getContent('52GPRA', 'description') }}</p>

                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <x-danger-alert />
                    <x-success-alert />
                </div>
                <div class="pt-2 col-lg-12 col-md-6 pt-sm-0">
                    <div class="border-0 rounded shadow card">
                        <div class="py-5 card-body">
                            <h4 class="card-title">{{ $content->getContent('EOUU7R', 'title') }}</h4>
                            <div class="mt-4 custom-form">
                                <div id="message"></div>
                                <form method="post" action="{{ route('enquiry') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Your Name <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>

                                                    <input name="name" id="name" type="text"
                                                        class="pl-5 form-control" placeholder="Full Name :">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>

                                                    <input name="email" id="email" type="email"
                                                        class="pl-5 form-control" placeholder="Your email">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <div class="position-relative">
                                                    <i data-feather="book" class="fea icon-sm icons"></i>
                                                    <input name="subject" id="subject" type="text"
                                                        class="pl-5 form-control" placeholder="Subject">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Comments</label>
                                                <div class="position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                    <textarea id="comments" rows="4" class="pl-5 form-control" name="message" placeholder="Your Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="text-center col-sm-12">
                                            <input type="submit" id="submit" name="send"
                                                class="submitBnt btn btn-primary btn-block" value="Send Message">
                                            <div id="simple-msg"></div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                                <!--end form-->
                            </div>
                            <!--end custom-form-->
                        </div>
                    </div>
                </div>
                <!--end col-->


                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->


        <!--end container-->
    </section>
    <!--end section-->
    <!-- End contact -->

<script src="{{ asset('themes/purposeTheme/temp/js/script.js') }}"></script>

@endsection

@section('scripts')
    @parent

@endsection
