    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,300,700,700i,800,900" rel="stylesheet">
    <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="{{ asset('/img/icons/favicon.ico') }}"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
    <!--===============================================================================================-->
    </head>
    <body>

        <div class="limiter">
            <div class="container-login100" style="background-image: url(/img/crops-3.jpg);background-repeat: no-repeat;background-size:100% 100%;">
                <div class="wrap-login100" style="padding-top:40px;width:930px;border-radius:20px;">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="{{URL::asset('/img/img-02.png')}}" alt="IMG">
                    </div>

                    <form class="login100-form validate-form">
                        <span class="login100-form-title">
                                <span style="font-size:22px;font-weight:500;font-family:poppins;">Login to </span><span style="color:#6F9E76;font-weight:700;font-family:poppins;">CFFforum</span></span>

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email">
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" name="pass" placeholder="Password">
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <span class="txt1">
                                Forgot
                            </span>
                            <a class="txt2" href="#">
                                Username / Password?
                            </a>
                        </div>

                        <div class="text-center p-t-1" style="padding-bottom:10px;">
                            <a class="txt2" href="#">
                                Create your Account
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>




    <!--===============================================================================================-->
        <script src="{{ asset('/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('/vendor/bootstrap/js/popper.js') }}"></script>
        <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('/vendor/tilt/tilt.jquery.min.js') }}"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
    <!--===============================================================================================-->
        <script src="{{ asset('/js/main.js') }}"></script>

    </body>
    </html>




