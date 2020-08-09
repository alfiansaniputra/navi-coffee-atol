
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from admincast.com/adminca/preview/admin_1/html/login-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Aug 2019 08:37:18 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Dashboard Admin - Perkindo Jabar</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendors/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendors/animate.css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendors/toastr/toastr.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <!-- THEME STYLES-->
    <link href="https://perkindojabar.org/assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url({{url('img/bg-login.jpg')}});
        }


        .cover {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(117, 54, 230, .1);
        }

        .auth-head-icon {
            position: relative;
            height: 60px;
            width: 60px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            background: rgba(0, 0, 0, .6);
            color: #fff;
            box-shadow: 0 5px 20px #d6dee4;
            border-radius: 50%;
            z-index: 2;
        }

        .login-box {
            background: rgba(0, 0, 0, .6);
            color: rgba(255, 255, 255, .8);
        }

        .login-box .form-control {
            background-color: transparent;
            border-color: rgba(255, 255, 255, .6);
            color: #fff;

        }

        .login-box .form-control:focus {
            border-color: rgba(255, 255, 255, 1);
        }
    </style>
</head>

<body>
    <div class="cover"></div>
    <div style="max-width: 400px;margin: 100px auto 50px;">
        <div class="text-center mb-5">
            <span class="auth-head-icon"><i class="la la-user"></i></span>
        </div>
        <div class="ibox login-box">
            <form class="ibox-body" id="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <h4 class="font-strong text-center mb-5">LOG IN</h4>
                <div class="form-group mb-4">
                    <input class="form-control form-control-line @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email">
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                <div class="form-group mb-4">
                    <input class="form-control form-control-line @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                <div class="flexbox mb-5">
                    <label class="checkbox checkbox-primary">
                        <input type="checkbox"  {{ old('remember') ? 'checked' : '' }}>
                        <span class="input-span"></span> Remember</label>
                    <!-- <a class="color-inherit" href="forgot_password.html">Forgot password?</a> -->
                </div>
                <div class="text-center mb-4">
                    <button class="btn btn-primary btn-rounded btn-block">LOGIN</button>
                    <div class="cow pt-2">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Lupa Password?') }}
                                    </a>
                                @endif

                                @if (Route::has('register'))
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __('Buat Akun Baru') }}
                                    </a>
                                @endif
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- CORE PLUGINS-->
    <script src="{{url('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{url('assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/vendors/metisMenu/dist/metisMenu.min.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-idletimer/dist/idle-timer.min.js')}}"></script>
    <script src="{{url('assets/vendors/toastr/toastr.min.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{url('assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <!-- CORE SCRIPTS-->
    <script src="{{url('assets/js/app.min.js')}}"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script>
        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>


<!-- Mirrored from admincast.com/adminca/preview/admin_1/html/login-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Aug 2019 08:37:19 GMT -->
</html>