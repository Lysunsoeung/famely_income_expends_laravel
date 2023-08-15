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

{{-- <div class="welcome-modal" style="display: none;"> --}}
  {{-- <button class="welcome-modal-close">
    <i class="bi bi-x-lg"></i>
  </button> --}}
  {{-- <iframe class="w-100 border-0" src="https://embed.lottiefiles.com/animation/31548"></iframe>
  <div class="text-center">
    <h3 class="h5 weight-500 text-center mb-2">
      Open source
      <span role="img" aria-label="gratitude">❤️</span>
    </h3>
    <div class="pb-2">
      <a class="github-button" href="https://github.com/dropways/deskapp" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star dropways/deskapp dashboard on GitHub">Star</a>
      <a class="github-button" href="https://github.com/dropways/deskapp/fork" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-repo-forked" data-size="large" data-show-count="true" aria-label="Fork dropways/deskapp dashboard on GitHub">Fork</a>
    </div>
  </div>
  <div class="text-center mb-1">
    <div>
      <a href="https://github.com/dropways/deskapp" target="_blank" class="btn btn-light btn-block btn-sm">
        <span class="text-danger weight-600">STAR US</span>
        <span class="weight-600">ON GITHUB</span>
        <i class="fa fa-github"></i>
      </a>
    </div>
    <script async="" defer="defer" src="https://buttons.github.io/buttons.js"></script>
  </div>
  <a href="https://github.com/dropways/deskapp" target="_blank" class="btn btn-success btn-sm mb-0 mb-md-3 w-100">
    DOWNLOAD
    <i class="fa fa-download"></i>
  </a>
  <p class="font-14 text-center mb-1 d-none d-md-block">
    Available in the following technologies:
  </p>
  <div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
    <i class="fa fa-html5"></i>
  </div> --}}
{{-- </div> --}}

<button class="welcome-modal-btn">
  <a href="{{ route('welcome-page') }}">
    <i class="fa fa-home"></i> Home
  </a>
  </button>

@endsection
