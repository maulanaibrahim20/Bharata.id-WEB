@extends('auth.index_login')
@section('content')
    <div class="container p-3 mx-auto">
        <section>
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen md:h-screen lg:py-0">
                <a href="{{ route('login.index') }}"
                    class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    {{-- <img class="w-8 h-8 mr-2" src="" alt="logo"> --}}
                    Bharata.id
                </a>
                <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 max-w-md sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 shadow">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Sign in to your account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{ route('login.process') }}" method="POST">
                            @csrf
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@gmail.com">
                                @error('email')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @error('password')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                            required="">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500 dark:text-gray-300">Remember
                                            me</label>
                                    </div>
                                </div>
                                <a href="{{ route('reset-password.index') }}"
                                    class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot
                                    password?</a>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign
                                in</button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Don’t have an account yet? <a href="{{ route('register.index') }}"
                                    class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register
                                    here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- <div class="page login-page">
        <div>
            <div class="container-login100">
                <div class="wrap-login100 p-0">
                    <div class="card-body">
                        <form action="{{ route('login.process') }}" method="POST" class="login100-form validate-form">
                            @csrf
                            <span class="login100-form-title">
                                Login
                            </span>
                            <div class="wrap-input100 validate-input"
                                data-bs-validate = "Valid email is required: ex@abc.xyz">
                                <input class="input100" type="text" name="email" placeholder="Email">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                                <input class="input100" type="password" name="password" placeholder="Password">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="text-end pt-1">
                                <p class="mb-0"><a href="{{ route('reset-password.index') }}"
                                        class="text-primary ms-1">Forgot
                                        Password?</a></p>
                            </div>
                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn btn-primary">
                                    Login
                                </button>
                            </div>
                            <div class="text-center pt-3">
                                <p class="text-dark mb-0">Not a member?<a href="{{ route('register.index') }}"
                                        class="text-primary ms-1">Create an Account</a></p>
                            </div>
                        </form>
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
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div> --}}
@endsection
