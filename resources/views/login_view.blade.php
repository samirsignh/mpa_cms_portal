<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from workload.dexignlab.com/codeigniter/demo/page-login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2024 06:37:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Workload - CodeIgniter Project Management Admin Dashboard Template" />
    <meta property="og:title" content="Workload - CodeIgniter Project Management Admin Dashboard Template" />
    <meta property="og:description" content="Workload - CodeIgniter Project Management Admin Dashboard Template" />
    <meta property="og:image" content="../social-image.html" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Login :: Mormugao Port Authority, Goa</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/mpa_logo.jpeg') }}">
    <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .mpalogo {
            max-height: 95px;
            width: auto;
        }

        .authincation {
            position: relative;
            background-image: url('images/bg.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 99vh;
        }

        .auth-form {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        }

        .auth-form .btn {
            background-color: #0092D9;
            font-size: 16px;
        }

        .btn-primary,
        .form-control:focus,
        .btn-primary:hover {
            border-color: #0092D9;
        }

        .form-check {
            text-align: right;
            font-size: larger;
        }
    </style>
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="javascript:;"><img class="mpalogo"
                                                src="{{ asset('images/mpa_logo.jpeg') }}" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="{{ route('dashboard') }}">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" value="hello@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" value="Password">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <a href="page-forgot-password.html">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('js/global.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>
</body>

<!-- Mirrored from workload.dexignlab.com/codeigniter/demo/page-login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2024 06:37:17 GMT -->

</html>
