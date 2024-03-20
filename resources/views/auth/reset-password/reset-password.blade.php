@extends('auth.index_login')
@section('content')
    <section>
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="login-card">
                        <div class="login-main">
                            <form action="{{ route('reset-password.process') }}" method="POST" class="theme-form login-form">
                                @csrf
                                <h4 class="mb-3">Forgot Password ?</h4>
                                <p class="mb-4">Enter your email and we'll send you instructions to reset your password</p>
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group"><span class="input-group-text"><i
                                                class="icon-email"></i></span>
                                        <input class="form-control" type="email" name="email" id="email"
                                            value="{{ old('email') }}" required="" placeholder="example@mail.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Done </button>
                                </div>
                                <p>Already have an account?<a class="ms-2" href="{{ route('login.index') }}">Sign in</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-wrapper end-->
    </section>
@endsection
