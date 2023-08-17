@extends('layouts.app_auth')

@section('content')


<div class="login-box bg-white box-shadow border-radius-10">
  <div class="login-title">
    <h2 class="text-center text-primary">Login To Income</h2>
  </div>
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="input-group custom">
      <input
        type="text"
        class="form-control form-control-lg"
        placeholder="Username"
        name="email" value="{{ old('email') }}" required
      />
      <div class="input-group-append custom">
        <span class="input-group-text"
          ><i class="icon-copy dw dw-user1"></i
        ></span>
      </div>

      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      {{-- @if (session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
      @endif --}}
    </div>
    <div class="input-group custom">
      <input
        type="password"
        class="form-control form-control-lg"
        placeholder="**********"
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
    <div class="row pb-30">
      <div class="col-6">
        <div class="custom-control custom-checkbox">
          <input
            type="checkbox"
            class="custom-control-input"
            id="customCheck"
            name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
          />
          <label class="custom-control-label" for="customCheck"
            >Remember</label
          >
        </div>
      </div>
      <div class="col-6">
        <div class="forgot-password">
          @if (Route::has('password.request'))
              <a  href="{{ route('password.request') }}">
                  {{ __('Forgot Password?') }}
              </a>
          @endif
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="input-group mb-0">
          <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">

          {{-- <a
            class="btn btn-primary btn-lg btn-block"
            href="index.html"
            >Sign In</a
          > --}}
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
            href="{{route('register')}}"
            >Register To Create Account</a
          >
        </div>
      </div>
    </div>
  </form>
</div>

<button class="welcome-modal-btn">
<a href="{{ route('welcome-page') }}">
  <i class="fa fa-home"></i> Home
</a>
</button>



@include('layouts.partials.js.custom_sweetalert_message')



@endsection


