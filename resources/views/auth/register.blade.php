<!DOCTYPE html>
<html lang="en">
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

{!! NoCaptcha::renderJs() !!} --}}
@include('auth/include/header')

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="loginpage/images/img-01.png" alt="IMG">
                </div>
                <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title">
                        Member Register
                    </span>


                    <div class="wrap-input100 validate-input">
                        <input id="name" type="text" class="input100 @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name"placeholder="Name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>



                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100 @error('email') is-invalid @enderror" type="email" name="email"
                            placeholder="Email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100 @error('password') is-invalid @enderror" type="password" name="password"
                            placeholder="Password" required>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>



                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password-confirm" class="input100" type="password" name="password_confirmation"
                            placeholder="Confirm Password" required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    {{-- <div class="wrap-input100 validate-input" data-validate="Password is required">

                        <div class="{{ $errors->has('g-recaptcha-response') ? 'has-error' : '' }}">
                            {!! NoCaptcha::display(['data-theme' => 'light']) !!}
                        </div>
                        @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @endif

                    </div> --}}


                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Register
                        </button>
                    </div>

                    <div class="text-center p-t-50">
                        <a class="txt2" href="login">
                            Login
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>




    @include('auth/include/footer')

</body>

</html>






























{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
