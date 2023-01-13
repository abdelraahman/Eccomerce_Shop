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
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title">
                        Member Login
                    </span>


                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100 @error('email') is-invalid @enderror" type="email" name="email"
                            placeholder="Email" required>
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
                        <button type="submit" class="login100-form-btn"
                            style="background-color: #ff0055">Login</button>
                    </div>

                    <div class="text-center p-t-12">
                        @if (Route::has('password.request'))
                            <a class="txt2" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                    </div>

                    <div class="text-center p-t-50">
                        <a class="txt2" href="register">
                            Create your Account
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
