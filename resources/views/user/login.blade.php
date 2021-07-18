
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Страница Входа</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/admin.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <b>Вход в аккаунт</b>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            {{--            <div class="social-auth-links text-center">--}}
            {{--                <p>- OR -</p>--}}
            {{--                <a href="#" class="btn btn-block btn-primary">--}}
            {{--                    <i class="fab fa-facebook mr-2"></i>--}}
            {{--                    Sign up using Facebook--}}
            {{--                </a>--}}
            {{--                <a href="#" class="btn btn-block btn-danger">--}}
            {{--                    <i class="fab fa-google-plus mr-2"></i>--}}
            {{--                    Sign up using Google+--}}
            {{--                </a>--}}
            {{--            </div>--}}


        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<script src="{{ asset('assets/admin/js/admin.js') }}"></script>

</body>
</html>
