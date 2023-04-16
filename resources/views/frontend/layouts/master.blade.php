<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-plastic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ asset('frontend') }}/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/img/logo/eplastic-logo.png">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/templatemo.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/custom.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    @stack('css')
</head>

<body>
    @include('frontend.layouts.includes.header')
    @yield('content')
    @include('frontend.layouts.includes.footer')

    <!-- Start Script -->
    <script src="{{ asset('frontend') }}/js/jquery-1.11.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/templatemo.js"></script>
    <script src="{{ asset('frontend') }}/js/custom.js"></script>
    @stack('js')
    <!-- End Script -->
    <script>
        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                    7);
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>

</body>

</html>
