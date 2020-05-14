<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('admins/login/images/icons/favicon.ico')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/login/vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/login/vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/login/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/login/vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/login/css/main.css')}}">

</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url({{ asset('admins/login/images/bg-01.jpg')}});">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Admin Login
                </span>
                    <form method="POST" action="{{ route('admin.login.submit') }}" 
                        class="login100-form validate-form p-b-33 p-t-5">
                        @csrf

                    <div class="wrap-input100 validate-input" data-validate = "Enter email">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Login') }}
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
    <script src="{{ asset('admins/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('admins/login/vendor/animsition/js/animsition.min.js')}}"></script>
    <script src="{{ asset('admins/login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{ asset('admins/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admins/login/vendor/select2/select2.min.js')}}"></script>
    <script src="{{ asset('admins/login/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{ asset('admins/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('admins/login/vendor/countdowntime/countdowntime.js')}}"></script>
    <script src="{{ asset('admins/login/js/main.js')}}"></script>

</body>
</html>