@extends('layouts.app')

@section('content')

<main class="site-main content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
                <div class="page-content-block">
                    <div class="col-md-12 rtcl-login-form-wrap">
                        <h2>Login</h2>
                        <form action="{{ route('login') }}" class="form-horizontal" method="post" novalidate="novalidate">
                            @csrf
                            <div class="form-group">
                                <label for="rtcl-user-login" class="control-label">
                                    Username or E-mail
                                    <strong class="rtcl-required">*</strong>
                                </label>
                                <input type="email" name="email" autocomplete="username" value="" class="form-control" required=""/>
                                @error('email')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="rtcl-user-pass" class="control-label">
                                    Password <strong class="rtcl-required">*</strong>
                                </label>
                                <input type="password" name="password" autocomplete="current-password" class="form-control" required=""/>
                                @error('password')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group d-flex align-items-center">
                            <button type="submit" name="rtcl-login" class="btn btn-primary" value="login">
                                Login
                            </button>
                            <div class="form-check">
                                <input  type="checkbox" name="rememberme" id="rtcl-rememberme" value="forever"/>
                                <label  class="form-check-label" for="rtcl-rememberme"> Remember Me</label>
                            </div>
                            </div>
                            <div class="form-group">
                                <p class="rtcl-forgot-password">
                                    <a href="#">Forgot Your Password</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
