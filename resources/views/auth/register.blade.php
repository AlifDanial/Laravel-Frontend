<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
            <div class="wrap-login100" style="padding-top:40px;border-radius:20px;">


            <form class="login100-form validate-form" action="{{route('custom.register')}}" method="post">
                {{csrf_field()}}
                    <span class="login100-form-title">
                            <span style="font-size:22px;font-weight:500;font-family:poppins;">Create a new Account</span>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "First Name is required">
                        <input class="input100" type="text" name="UserFirstName" value="{{old('UserFirstName')}}" placeholder="First Name">
                        <span class="symbol-input100">
                            <i class="fas fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Last Name is required">
                        <input class="input100" type="text" name="UserLastName" value="{{old('UserLastName')}}" placeholder="Last Name">
                        <span class="symbol-input100">
                            <i class="fas fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Occupation is required">
                        <input class="input100" type="text" name="UserOccupation" value="{{old('UserOccupation')}}" placeholder="Occupation">
                        <span class="symbol-input100">
                            <i class="fas fa-briefcase" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" value="{{old('email')}}" placeholder="Email">
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            {{-- <span toggle="#password-field" class="far fa-eye field-icon toggle-password" style="position:absolute;right:11px;bottom:17px;"></span> --}}
                         <input class="input100" type="password" name="password" placeholder="Password" id="pass">
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                    @endif

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Already Have an Account?
                        </span>
                        <a class="txt2" href="/login">
                            Login.
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

    <script>

$(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    });
    </script>
</body>
</html>




