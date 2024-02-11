@extends('layouts.auth')

@section('body')
    <div class="register-page">
        <div class="register-box">
            <div class="card card-outline card-danger">
                <div class="card-header text-center">
                    <a href="/" class="h1">Zona Magang <b>SIG</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Register Account</p>

                    <form action="../../index.html" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Full name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Retype password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger btn-block">Register</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <a href="/auth/login" class="text-center d-block mt-3 text-secondary">I already have an account</a>

                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
    </div>
@endsection
