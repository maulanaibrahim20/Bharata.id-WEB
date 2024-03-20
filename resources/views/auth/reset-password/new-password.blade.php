@extends('auth.login.index')
@section('content')
    <section>
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="login-card">
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
                        <form
                            action="{{ route('new-password.process', ['token' => request('token'), 'email' => request('email')]) }}"
                            method="POST" class="theme-form login-form">
                            @csrf
                            <h4 class="mb-3">Create Your Password </h4>
                            <div class="form-group">
                                <label>New Password</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" name="password" id="password"
                                        required="" placeholder="*********">
                                    <div class="show-hide"><span class="show"></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" name="confirm_password"
                                        id="confirm_password" required="" placeholder="*********">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Done</button>
                            </div>
                            <p>Don't have account?<a class="ps-2" href="sign-up.html">Create Account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
