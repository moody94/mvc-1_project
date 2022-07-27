@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem; box-shadow: -2px 4px  7px 5px #262626; margin-top:10px;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            @if (session()->has('fail-login'))
                            @if (old('email'))
                            <div class="alert alert-danger">
                                {{ session()->get('fail-login') }}
                            </div>
                            @endif
                            @endif
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control form-control-lg" style="color: #FFFFFF; background-color: #262626;" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control form-control-lg" style="color: #FFFFFF; background-color: #262626;" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">

                                </div>
                                <button type="submit" class="btn btn-outline-light btn-lg px-5">
                                    {{ __('Login') }}
                                </button>

                                <p class="small mb-5 pb-lg-2">
                                    @if (Route::has('password.request'))
                                    <a class="text-white-50" href="{{ route('password.request') }}">
                                        Forgot password?
                                    </a>
                                    @endif
                                </p>
                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>
                            </form>
                        </div>

                        <div>
                            <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-white-50 fw-bold">Sign Up</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


<!-- insert into users (id, email) values (1, bashikr@gmail.com);


INSERT INTO users (name, email, password) values (1, 1@1,12345678);  -->