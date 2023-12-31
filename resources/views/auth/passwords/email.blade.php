@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
            <link rel="icon" type="image/png" href="{{asset('logins/images/icons/favicon.ico')}}"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/bootstrap/css/bootstrap.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('logins/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" >
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/animate/animate.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/css-hamburgers/hamburgers.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('logins/vendor/select2/select2.min.css')}}" >
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('logins/css/util.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('logins/css/main.css')}}">
        <!--===============================================================================================-->
    </head>
<body>

	<div class="limiter">
		<div class="container-login100">
            
			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt >
					<img src="{{asset('logins/images/img-01.png')}}" alt="IMG" >
				</div>

				<form class="login100-form validate-form"  method="POST" action="{{ route('password.email') }}">
                    @csrf

					<span class="login100-form-title">
						Reset Password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input
                            id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                            
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>

                        @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror

					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							{{ __('Send Password Reset Link') }}
						</button>
					</div>
                    

					<div class="text-center p-t-136"> 

						<a class="txt2" href="{{ route('register') }}">
							Back to Home
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
                        
					</div>


				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('login/js/main.js')}}"></script>

</body>
</html> --}}
