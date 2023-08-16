@extends('layouts.app_auth')

@section('content')



<div class="login-box bg-white box-shadow border-radius-10">

  <div class="login-title">
    <h2 class="text-center text-primary">Register</h2>
  </div>

  <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="input-group custom">
      <input
        type="text"
        class="form-control form-control-lg"
        placeholder="Username"
        name="name" value="{{ old('name') }}" required
      />
      <div class="input-group-append custom">
        <span class="input-group-text"
          ><i class="icon-copy dw dw-user1"></i
        ></span>
      </div>

      @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="input-group custom">
      <input
        type="email"
        class="form-control form-control-lg"
        placeholder="Email Address"
        name="email" value="{{ old('email') }}" required
      />
      <div class="input-group-append custom">
        <span class="input-group-text"
          ><i class="icon-copy dw dw-user1"></i>
      </span>
      </div>

      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>


    <div class="input-group custom">
      <input
        type="password"
        class="form-control form-control-lg"
        placeholder="Password "
        name="password" required
      />
      <div class="input-group-append custom">
        <span class="input-group-text"
          ><i class="dw dw-padlock1"></i
        ></span>
      </div>
      @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="input-group custom">
      <input
        type="password"
        class="form-control form-control-lg"
        placeholder="Confirm Password"
        name="password_confirmation" required
      />
      <div class="input-group-append custom">
        <span class="input-group-text"
          ><i class="dw dw-padlock1"></i
        ></span>
      </div>
      @error('password_confirmation')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>


    <div class="row">
      <div class="col-sm-12">
        <div class="input-group mb-0">
          <input class="btn btn-primary btn-lg btn-block" type="submit" value="Register">

        </div>
        <div
          class="font-16 weight-600 pt-10 pb-10 text-center"
          data-color="#707373"
        >
          OR
        </div>
        <div class="input-group mb-0">
          <a
            class="btn btn-outline-primary btn-lg btn-block"
            href="{{route('login')}}"
            >Have An Account?</a
          >
        </div>
      </div>
    </div>
  </form>


</div>







{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
</div> --}}
@endsection
