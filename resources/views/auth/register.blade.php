<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{ asset('backend') }}/images/eplastic-logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('backend') }}/auth/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
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
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign Up
                        </h2>
                        <div class="intro-x mt-8">
                            <input type="text" class="intro-x login__input form-control py-3 px-4 block"
                                placeholder="Name" name="name" required>

                            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Email" name="email" required>
                            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Phone" name="phone" required>
                            <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Password" name="password" required>
                            <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Password Confirmation" name="password_confirmation" required>
                            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Address" name="address" required>
                            <div class="intro-x mt-4">
                                <select name="role_id" class="form-select block w-full" required>
                                    <option value="">Account Type</option>
                                    <option value="3">Seller</option>
                                    <option value="4">Buyer</option>
                                </select>
                            </div>
                        </div>
                        <div
                            class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                            <label class="cursor-pointer select-none" for="remember-me">I agree to the
                                Envato</label>
                            <a class="text-primary dark:text-slate-200 ml-1" href="">Privacy Policy</a>.
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>
                        </div>
                    </form>
                    <div class="intro-x mt-10 xl:mt-10 text-gray-700 dark:text-gray-600 text-center xl:text-left">
                        Already have an account?
                        <a class="text-primary dark:text-primary-500" href="{{ route('login') }}">Login</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('backend') }}/auth/js/app.js"></script>
</body>

</html>
