{{-- <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>

  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">

</head>
<body>

  <div class="container mt-2">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-5">
        <div class="card">
          <div class="card-header">Admin Login</div>
          @include('frontend.partials.messages')

          <div class="card-body">
            <form method="POST" action="{{ route('admin.login.submit') }}">
              @csrf

              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Login
                  </button>

                  <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                    Forgot Your Password?
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Admin Login</title>

  @include('backend.partials.styles')

</head>
  <body class="bg-light-gray" id="body">
          <div class="container d-flex flex-column justify-content-between vh-100">
          <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
              <div class="card">

                <div class="card-header bg-primary">
                  <div class="app-brand">
                    <a href="#">
                      <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                        height="33" viewBox="0 0 30 33">
                        <g fill="none" fill-rule="evenodd">
                          <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                          <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                        </g>
                      </svg>
                      <span class="brand-name">Bangla Bazar Admin</span>
                    </a>
                  </div>
                </div>
                <div class="card-body p-5">
                  @include('frontend.partials.messages')
                  <h4 class="text-dark mb-5">Sign In</h4>

                    <form method="POST" action="{{ route('admin.login.submit') }}">
                      @csrf
                      <div class="row">
                        <div class="form-group col-md-12 mb-4">
                          <label for="email" class="col-form-label text-md-right">E-Mail Address</label>

                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                              <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                              </span>
                            @endif

                        </div>

                        <div class="form-group col-md-12 mb-4">
                          <label for="password" class="col-form-label text-md-right">Password</label>

                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                              <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                              </span>
                            @endif

                        </div>

                        <div class="col-md-12">
                          <div class="d-flex my-2 justify-content-between">
                            <div class="d-inline-block mr-3">
                              <label class="control control-checkbox">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                <div class="control-indicator"></div>
                              </label>

                            </div>
                            <p><a class="btn btn-link" href="{{ route('admin.password.request') }}">
                              Forgot Your Password?
                            </a></p>
                          </div>
                          <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>
                          {{-- <p>Don't have an account yet ?
                            <a class="text-blue" href="sign-up.html">Sign Up</a>
                          </p> --}}
                        </div>

                      </div>
                    </form>

                </div>
              </div>
            </div>
          </div>

        </div>

        @include('backend.partials.scripts')
</body>
</html>