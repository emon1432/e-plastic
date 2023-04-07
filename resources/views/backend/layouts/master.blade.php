<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{ asset('backend') }}/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('backend') }}/css/app.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/auth/css/app.css" />

    <!-- END: CSS Assets-->
</head>

<body class="main">
    @include('backend.layouts.includes.mobile-menu')
    @include('backend.layouts.includes.header')
    <div class="wrapper">
        <div class="wrapper-box">
            @include('backend.layouts.includes.sidebar')
            <div class="content">
                @yield('content')
            </div>
            @include('sweetalert::alert')
        </div>
    </div>

    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    <script src="{{ asset('backend') }}/js/app.js"></script>
    <script>
        const activeLink = document.querySelector('.side-menu--active');
        const parentUl = activeLink.parentElement.parentElement;
        parentUl.classList.add('side-menu__sub-open');
        parentUl.previousElementSibling.classList.add('side-menu--active');
    </script>
    <!--ajax request-->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


    @stack('js')
</body>

</html>
