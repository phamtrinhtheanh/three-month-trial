<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ __('G-Ecommerce') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/css/fontawesome-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/components/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/css/responsive.css') }}">
    <script src="{{ asset('frontend/assets/vendor/js/vendor/jquery-1.12.4.min.js') }}"></script>
    @stack('css')
</head>
<body>
    <div class="body-wrapper">
        @yield('body')
    </div>
    <script src="{{ asset('frontend/assets/vendor/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/js/ajax-mail.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/js/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/shop/notify.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/js/main.js') }}"></script>
    <script src="{{ asset('admin/assets/js/layout/app.js') }}" type="module"></script>
    @stack('js')
</body>
</html>
