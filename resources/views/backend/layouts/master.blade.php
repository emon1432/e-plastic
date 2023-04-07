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
    <title>Dashboard - Icewall - Tailwind HTML Admin Template</title>
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
        </div>
    </div>

    <script src="{{ asset('backend') }}/bootstrap/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('backend') }}/bootstrap/vendor/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/bootstrap/vendor/datatable/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    <script src="{{ asset('backend') }}/js/app.js"></script>
    <script src="{{ asset('backend') }}/bootsrap/js/main.js"></script>
    <script src="{{ asset('backend') }}/bootsrap/js/custom.js"></script>
    <script>
        const activeLink = document.querySelector('.side-menu--active');
        const parentUl = activeLink.parentElement.parentElement;
        parentUl.classList.add('side-menu__sub-open');
        parentUl.previousElementSibling.classList.add('side-menu--active');
    </script>
</body>

</html>
