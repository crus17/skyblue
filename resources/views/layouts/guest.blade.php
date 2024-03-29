<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $settings->site_name }} | @yield('title')</title>

    <link rel="icon" href="{{ asset('storage/' . $settings->favicon) }}" type="image/png" />
    @section('styles')

        <link href="{{ asset('themes/purposeTheme/temp/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ asset('themes/purposeTheme/temp/css/materialdesignicons.min.css') }}" rel="stylesheet"
            type="text/css" />

        <link rel="stylesheet" href="{{ asset('themes/purposeTheme/temp/css/line.css') }}">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <!-- Main Css -->
        @php
            $theme = $settings->website_theme == 'purpose.css' ? 'default.css' : $settings->website_theme;
        @endphp
        <link href="{{ asset('themes/purposeTheme/temp/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('themes/purposeTheme/temp/css/colors/' . $theme) }}" rel="stylesheet">
    @show

    <!-- Google Transalate gadget -->
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
</head>

<body class="bg-soft-primary">
    @if ($settings->google_translate == 'on')
        <style>
            .skiptranslate {
                display: flex;
                align-items: center;
                padding: 10px;
                justify-content: center
            }
            #goog-gt-tt{
                display: none;
            }
        </style>
        <div id="google_translate_element"></div>
    @endif

    @yield('content')

    @section('scripts')
        <script src="{{ asset('themes/purposeTheme/temp/js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('themes/purposeTheme/temp/js/bootstrap.bundle.min.js') }}"></script>

        <!-- SLIDER -->
        <script src="{{ asset('themes/purposeTheme/temp/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('themes/purposeTheme/temp/js/owl.init.js') }}"></script>
        <!-- Icons -->
        <script src="{{ asset('themes/purposeTheme/temp/js/feather.min.js') }}"></script>
        <script src="{{ asset('themes/purposeTheme/temp/js/bundle.js') }}"></script>

        <script src="{{ asset('themes/purposeTheme/temp/js/app.js') }}"></script>
        <script src="{{ asset('themes/purposeTheme/temp/js/widget.js') }}"></script>
    @show
    
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.4/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>

</body>

</html>
