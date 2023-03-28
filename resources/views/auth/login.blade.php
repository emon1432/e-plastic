<!DOCTYPE html>

<html lang="en" class="light">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('backend') }}/images/eplastic-logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eplastic - Login</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('backend') }}/auth/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="e-plastic" class="w-6" src="{{ asset('backend') }}/images/eplastic-logo.png">
                    <span class="text-white text-lg ml-3"> E - Plastic</span>
                </a>
                <div class="my-auto">
                    <img alt="e-plastic" class="-intro-x w-1/2 -mt-16"
                        src="{{ asset('backend') }}/images/plasticBag.png">

                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign In
                        </h2>
                        <div class="intro-x mt-8">
                            <input type="text" class="intro-x login__input form-control py-3 px-4 block"
                                placeholder="Email" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>
                            <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Password" name="password" required autocomplete="current-password">
                        </div>
                        <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                            </div>
                            <a href="{{ route('password.request') }}">
                                Forgot Password?</a>
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                        </div>
                    </form>
                    <div class="intro-x mt-5 xl:mt-10 text-slate-600 dark:text-slate-500 text-center xl:text-left">
                        Don't have an account?
                        <a class="text-primary dark:text-slate-200" href="{{ route('register') }}">
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>
    <!-- BEGIN: Dark Mode Switcher-->
    <div data-url="login-dark-login.html"
        class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
        <div class="dark-mode-switcher__toggle border"></div>
    </div>
    <!-- END: Dark Mode Switcher-->

    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('backend') }}/auth/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>
