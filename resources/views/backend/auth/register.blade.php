<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashwheelz | Login</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ '/' }}backend/assets/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="login-page bg-body-secondary">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Dashwheelz</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Register to get exciting offers</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name" />
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" />
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" />
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" />
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    </div>
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-6">
                            <div class="d-grid gap-2">
                                <a href="{{ route('login') }}" class="btn btn-warning">Log In</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">Sign Up</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!--end::Row-->
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

</body>
<!--end::Body-->

</html>
