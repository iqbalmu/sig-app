@extends('layouts.auth')

@section('body')
    <div class="login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-danger">
                <div class="card-header text-center">
                    <a href="/" class="h1">Zona Magang <b>SIG</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form action="{{ route('authenticate') }}" method="post">
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
                            <div class="col-5">
                                <a href="/auth/register" class="btn btn-secondary btn-block">Register</a>
                            </div>
                            <!-- /.col -->
                            <div class="col-7">
                                <button type="submit" class="btn btn-danger btn-block">Login</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <p class="mt-4 mb-0 text-center">
                        <a href="/" class="text-secondary">I forgot my password</a>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
