<!DOCTYPE html>
<html lang="en" class="h-100" id="login-page1">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> الأنظمة الشاملة - لوحه التحكم </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/web-assets/img/favicon.png')}}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('public/admin/css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100" dir="rtl" style="background: url('assets/images/background/login-register.png');">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="login-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content login-form">
                        <div class="card">
                            <div class="card-body">
                                <div class="logo text-center">
                                    <a href="#">
                                        <!--img src="{{ asset('public/admin/logo.png')}}" alt=""-->
                                        الأنظمة الشاملة - لوحة التحكم
                                    </a>
                                </div>
                                <h4 class="text-center mt-4">تسجيل الدخول</h4>
                                @if(\Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <div class="alert-body">
                                        {{ \Session::get('success') }}
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                {{ \Session::forget('success') }}
                                @if(\Session::get('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <div class="alert-body">
                                        {{ \Session::get('error') }}
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                <form class="mt-5 mb-5" action="{{route('adminLoginPost')}}" method="post">
                                    @csrf
                                    <div class="form-group">

                                        <input type="email" class="form-control" placeholder="البريد الالكترونى" id="email" name="email" value="{{old('email') }}" autofocus>
                                        @if ($errors->has('email'))
                                        <span class="help-block font-red-mint">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                    <div class="form-group">

                                        <input type="password" class="form-control" placeholder="كلمه المرور" id="password" name="password" tabindex="2" />


                                        @if ($errors->has('password'))
                                        <span class="help-block font-red-mint">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="text-center mb-4 mt-4">
                                        <button type="submit" class="btn btn-primary">تسجيل الدخول </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="{{ asset('public/admin/assets/plugins/common/common.min.js')}}"></script>
    <!-- Custom script -->
    <script src="{{ asset('public/admin/js/custom.min.js')}}"></script>
    <script src="{{ asset('public/admin/js/settings.js')}}"></script>
    <script src="{{ asset('public/admin/js/gleek.js')}}"></script>
</body>

</html>