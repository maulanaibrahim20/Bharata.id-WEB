@extends('auth.index_login')
@section('content')
    <div class="page login-page">
        <div>
            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto mt-7">
                <div class="text-center">
                    <img src="{{ '/assets' }}/images/brand/logo.png" class="header-brand-img" alt="">
                </div>
            </div>
            <div class="container-login100">
                <div class="row">
                    <div class="col col-login mx-auto">
                        <form action="{{ route('reset-password.process') }}" method="POST" class="card shadow-none">
                            @csrf
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="login100-form-title">
                                        Forgot Password
                                    </span>
                                    <p class="text-muted">Enter the email address registered on your account</p>
                                </div>
                                <div class="pt-3" id="forgot">
                                    <div class="form-group">
                                        <label class="form-label">E-Mail</label>
                                        <input class="form-control" placeholder="Enter Your Email" type="email">
                                    </div>
                                    <div class="submit">
                                        <button class="btn btn-primary d-grid" type="submit">Submit</button>
                                    </div>
                                    <div class="text-center mt-4">
                                        <p class="text-dark mb-0">Forgot It?<a class="text-primary ms-1"
                                                href="javascript:void(0);">Send me Back</a></p>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-center my-3">
                                    <a href="" class="social-login  text-center me-4">
                                        <i class="fa fa-google"></i>
                                    </a>
                                    <a href="" class="social-login  text-center me-4">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="" class="social-login  text-center">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
@endsection
