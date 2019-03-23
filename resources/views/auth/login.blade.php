{{--  <div class="row">

        <div class="float-left">

        </div>
          <div class="float-right">
            <h1>WELCOME TO CFFforums</h1>
            <p>Join our community of scientists and academics from around the globe</p>
          {{-- </div>
          <a href="signup.php"><button class="btn btn-primary" type="submit">SIGN UP</button></a>
        </div> --}}

        {{-- <div class="column2" style="background-color:#ffffff">
          <div class="container">


          <img src="{{URL::asset('/img/logo.jpg')}}">

          <br />
          <br />
          <br />




          <!DOCTYPE html>
          <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
          <head>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">

              <!-- CSRF Token -->
              <meta name="csrf-token" content="{{ csrf_token() }}">

              <!-- Scripts -->
              <script src="{{ asset('js/app.js') }}" defer></script>

              <!-- Fonts -->
              <link rel="dns-prefetch" href="//fonts.gstatic.com">
              <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

              <!-- Styles -->
              <link href="{{ asset('css/app.css') }}" rel="stylesheet">
              <style>
                  .message{
                  padding-left:27%;
                  padding-right: 2%;
                  padding-top:15%;
                  padding-bottom:0%;
                   }


                    .centered {
                        position: absolute;
                        top: 60%;
                        left: 40%;
                        transform: translate(-50%, -50%);
                        color: white;
                    }
              </style>
          </head>

        <body>

 <div class="container">
    <div class="float-left">
        <img src="{{URL::asset('/img/Picture1.png')}}"  height=100% width = 80% >
    </div>
    <div class="row justify-content-center">
         <div class="col-md-10">

            {{-- <div class="card">
                <div class="card-header">{{ __('Login') }}</div> --}}

                {{-- <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="form-group row">
                            <label for="email" class="col-md-15 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-14">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-14 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </body> --}}

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
                <div class="wrap-login100" style="padding-top:40px;padding-right:110px;padding-left:80px;width:930px;border-radius:20px;">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="{{URL::asset('/img/img-02.png')}}" alt="IMG">
                    </div>

                    <form class="login100-form validate-form">
                        <span class="login100-form-title">
                                <span style="font-size:22px;font-weight:500;font-family:poppins;">Login to </span><span style="color:#6F9E76;font-weight:700;font-family:poppins;">CFFforum</span>                        </span>

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




