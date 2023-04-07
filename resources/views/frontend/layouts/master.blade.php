<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ePlastic</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('frontend') }}/images/fevicon.png" type="image/gif" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/font-awesome.css">
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('frontend/') }}/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    @include('frontend.layouts.includes.header')
    @yield('content')
    @include('frontend.layouts.includes.footer')
    <!-- Javascript files-->
    <script src="{{ asset('frontend/') }}/js/jquery.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/bootstrap.bundle.min.js"></script>
    <!-- sidebar -->
    <script src="{{ asset('frontend/') }}/js/custom.js"></script>
    @stack('js')
</body>

</html>
