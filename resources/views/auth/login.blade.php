<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }

    .loading-screen {
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        display: none;
    }

    .spinner {
        width: 150px;
        height: 150px;
        border: 5px solid #f3f3f3;
        margin-left: 95vh;
        margin-top: 37vh;
        border-top: 5px solid #C74B3B;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .custom-box1 {
        background-color: rgba(176, 119, 44, 0.85);
        color: white;
        border-radius: 20px;
        padding: 20px;
        width: 900px;
        text-align: center;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        max-width: 1200px;
        /* Prevents stretching on larger screens */
        width: 100%;
        /* Ensures it adapts to smaller screens */
    }

    .loginBG {
        background: url("{{ asset('img/DailyJournalBG.png') }}") no-repeat center center;
        background-size: cover;
        width: 100%;
        /* height: 100vh; */
    }
    </style>

</head>

<body class="loginBG">


    <!-- <a href="/" class="clickable-heading-login none" style="text-decoration: none; " id="loginButton">
        <button type="button" style="margin-top: 20px; margin-left: 30px;" class="btn btn-primary">Back</button>

    </a> -->

    <section class="vh-20 d-flex align-items-center" style="margin-top: 10vh;">
        <div class="container-fluid h-custom custom-box1">
            <div class="row d-flex justify-content-center align-items-center ">
                <!-- <div class="col-md-9 col-lg-6 col-xl-5"> -->
                <div class="col-md-6 col-lg-5">
                    <img src="{{ asset('img/journey.png') }}" style="margin-left: 10px;" alt="Logo" class="img-fluid"
                        alt="Sample image">
                </div>
                <div class="col-md-6 col-lg-5" style="margin-right: 20px;">

                    <!-- <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="margin-right: 20px;"> -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1"><i
                                    class="fab fa-facebook-f"></i></button>
                            <button type="button" class="btn btn-primary btn-floating mx-1"><i
                                    class="fab fa-twitter"></i></button>
                            <button type="button" class="btn btn-primary btn-floating mx-1"><i
                                    class="fab fa-linkedin-in"></i></button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div>

                        <!-- Email Address -->
                        <div class="form-outline mb-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" id="email" class="form-control form-control-lg" name="email"
                                value="{{ old('email') }}" required autofocus autocomplete="username" />
                            @error('email')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-outline mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg" name="password"
                                required autocomplete="current-password" />
                            @error('password')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                <label class="form-check-label" for="remember_me">Remember me</label>
                            </div>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-body">Forgot password?</a>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Log in</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#"
                                    class="link-danger">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script>
    $(document).ready(function() {
        // Hide loading screen after page load
        $("#loadingScreen").fadeOut();
    });

    $("#loginButton, #registerButton").click(function(event) {
        event.preventDefault(); // Prevent immediate navigation
        $("#loadingScreen").fadeIn();

        let newPage = $(this).attr("href");
        setTimeout(function() {
            window.location.href = newPage;
        }, 1000); // Delay navigation for 1 second
    });
    </script>


</body>

</html>


<!-- 

<form method="POST" action="{{ route('login') }}">
        @csrf

       
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

       
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

       
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> -->