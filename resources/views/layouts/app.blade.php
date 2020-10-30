@php
    $logo = App\Models\Logo::select('preloader', 'share', 'title')->first();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Kanal Pendidikan Tajam dan Mencerahkan">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <link rel="icon" href="{{ config('app.ftp_src').'images/logo/'.$logo->title }}" type="image/x-icon">
    <title>{{ config('app.name') }} @yield('title')</title>

    <!-- Link Share -->
    <meta property="og:title" content="PUNDI.OR.ID - Kanal Pendidikan Tajam dan Mencerahkan"/>
    <meta property="og:image" content="{{ config('app.ftp_src').'images/logo/'.$logo->share }}" />
    <meta property="og:url" content="http://pundi-dev.pundi.or.id"/>
    <meta property="og:site_name" content="PUNDI"/>
    <meta property="og:type" content="article"/>

    <!-- CSS -->
    @yield('css')
    <!-- MyStyle -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- CSS Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
   
    <!-- Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/v4-shims.css">

</head>
<body style="background-color: white">
    <!-- Preloader -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ config('app.ftp_src').'images/logo/'.$logo->preloader }}" width="120px" alt="photo" style="margin-bottom: 18%">
                </div>
            </div>
        </div>
    </div>
    <main>
        @yield('content')
    </main>
</body>
    @yield('script')
    <!-- CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Local -->
    <script src="{{ asset('./assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('./assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('./assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('./assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('./assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('./assets/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('./assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('./assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('./assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('./assets/js/jquery.ticker.js') }}"></script>
    <script src="{{ asset('./assets/js/site.js') }}"></script>
    <script src="{{ asset('./assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('./assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('./assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('./assets/js/plugins.js') }}"></script>
    <script src="{{ asset('./assets/js/main.js') }}"></script>
    <script src="{{ asset('./js/myScript.js') }}"></script>
    <script src="{{ asset('./js/jquery-confirm.min.js') }}"></script>
</html>
