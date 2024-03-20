@extends('auth.index_login')
@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7"><img class="bg-img-cover bg-center" src="{{ url('/assets') }}/images/login/2.jpg"
                        alt="looginpage"></div>
                <div class="col-xl-5 p-0">
                    <div class="login-card">
                        <form action="{{ route('login.process') }}" method="post" enctype="multipart/form-data"
                            class="theme-form login-form">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (session('warning'))
                                <div class="alert alert-warning">
                                    {{ session('warning') }}
                                </div>
                            @endif
                            @if (session('danger'))
                                <div class="alert alert-danger">
                                    {{ session('danger') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @csrf
                            <h4>Login</h4>
                            <h6>Welcome back! Log in to your account.</h6>
                            <div class="form-group">
                                <label>Email Address</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                                    <input class="form-control" type="email" name="email" required=""
                                        placeholder="Test@gmail.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" name="password" required=""
                                        placeholder="*********">
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label class="text-muted" for="checkbox1">Remember password</label>
                                </div><a class="link" href="{{ route('reset-password.index') }}">Forgot password?</a>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                            </div>
                            <div class="login-social-title">
                                <h5>Sign in with</h5>
                            </div>
                            <div class="form-group">
                                <ul class="login-social">
                                    <li><a href="https://www.linkedin.com" target="_blank"><i
                                                data-feather="linkedin"></i></a></li>
                                    <li><a href="https://twitter.com" target="_blank"><i data-feather="twitter"></i></a>
                                    </li>
                                    <li><a href="https://www.facebook.com" target="_blank"><i
                                                data-feather="facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com" target="_blank"><i data-feather="instagram">
                                            </i></a></li>
                                </ul>
                            </div>
                            <p>Don't have account?<a class="ms-2" href="{{ route('register.index') }}">Create Account</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
