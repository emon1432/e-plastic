    <!-- header -->
    <div class="header">
        <div class="container">
            <div class="row d_flex">
                <div class=" col-md-2 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="{{ route('home') }}" class="d-flex">
                                    <img alt="eplastic" class="w-6"
                                        src="{{ asset('backend') }}/images/eplastic-logo.png" height="30"
                                        width="35">
                                    <h2 class="ml-2 text-white">ePlastic</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-2 d_visible">
                    <ul class="email text_align_right">
                        <li><a class="logedIn text-xl" href="{{ url('/login') }}">Login/Register
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
    <!-- top -->
    <div class="full_bg">
        <div class="slider_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- carousel code -->
                        <div id="banner1" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#banner1" data-slide-to="0" class="active"></li>
                                <li data-target="#banner1" data-slide-to="1"></li>
                                <li data-target="#banner1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <!-- first slide -->
                                <div class="carousel-item active">
                                    <div class="carousel-caption relative">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="dream">
                                                    <h1>
                                                        Eplastic <br>is <br>Your dream <br>website
                                                    </h1>
                                                    <a class="read_more" href="Javascript:void(0)">Sell Now</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="dream_img">
                                                    <figure><img src="{{ asset('frontend/') }}/images/banner.jpg"
                                                            alt="#" style="border-radius:50%;" />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- second slide -->
                                <div class="carousel-item">
                                    <div class="carousel-caption relative">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="dream">
                                                    <h1>
                                                        Eplastic <br>is <br>Your dream <br>website
                                                    </h1>
                                                    <a class="read_more" href="Javascript:void(0)">Sell Now</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="dream_img">
                                                    <figure><img src="{{ asset('frontend/') }}/images/banner.jpg"
                                                            alt="#" style="border-radius:50%;" /></figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- third slide-->
                                <div class="carousel-item">
                                    <div class="carousel-caption relative">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="dream">
                                                    <h1>
                                                        Eplastic <br>is <br>Your dream <br>website
                                                    </h1>
                                                    <a class="read_more" href="Javascript:void(0)">Sell Now</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="dream_img">
                                                    <figure><img src="{{ asset('frontend/') }}/images/banner.jpg"
                                                            alt="#" style="border-radius:50%;" /></figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- controls -->
                            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->

    @push('js')
        <script>
            $(document).ready(function() {
                $('#banner1').carousel({
                    interval: 3000
                });
                $('#banner2').carousel({
                    interval: 3000
                });
                $('#banner3').carousel({
                    interval: 3000
                });
            });

            @if (Auth::check())
                $('.d_visible').html(
                    '<a href="{{ route('dashboard') }}" class="btn btn-outline-primary text-white">Dashboard</a>');
            @else
                $('.d_visible').html('<a class="text-white" href="{{ route('login') }}">Login/Register</a>');
            @endif
        </script>
    @endpush
