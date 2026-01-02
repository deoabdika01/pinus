<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <title>CMS</title>
    {{-- <link rel="shortcut icon" href="{{ asset('assets/upload/image/'.$site_config->icon) }}"> --}}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- CSS FILES START -->
    <link href="{{ asset('assets/aws/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aws/css/all.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/aws/js/marked.min.js') }}"></script>
</head>
<body class="h-screen overflow-hidden">
    @include('myview.components.navbar')
    <div class="ms-50">
        @yield('content')
    </div>
    @include('myview.components.footer')

<script src="{{ asset('assets/aws/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/jquery-migrate-1.4.1.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('assets/aws/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/aws/js/custom.js') }}"></script>
</body>
</html>
