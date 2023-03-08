<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="Themepixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/assets/img/favicon.png')}}">

    <title>DashByte - Premium Dashboard Template</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('backend/lib/remixicon/fonts/remixicon.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.min.css')}}">
  </head>
  <body class="page-sign">

    <div class="card card-sign">
      <div class="card-header">
        <a href="../" class="header-logo mb-4">Admin Login</a>
        <h3 class="card-title">Sign In</h3>
        <p class="card-text">Welcome back! Please signin to continue.</p>
      </div><!-- card-header -->

      @if (session('status'))
      <div class="mb-4 font-medium text-sm text-green-600">
          {{ session('status') }}
      </div>
  @endif
      <form method="POST" action="{{ route('login') }}">
        @csrf
      <div class="card-body">
        <div class="mb-4">
          <label class="form-label">Email address</label>
          <input id="email" type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Enter your email address">
        </div>
        <div class="mb-4">
          <label class="form-label d-flex justify-content-between">Password 
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">Forgot password?</a>
          
            @endif
          </label>
          <input  id="password"  type="password" name="password" autocomplete="current-password"  class="form-control" value="{{old('password')}}" placeholder="Enter your password">
        </div>
        <button class="btn btn-primary btn-sign">Sign In</button>

        <div class="divider"><span>or sign in with</span></div>

        <div class="row gx-2">
          <div class="col"><button class="btn btn-facebook"><i class="ri-facebook-fill"></i> Facebook</button></div>
          <div class="col"><button class="btn btn-google"><i class="ri-google-fill"></i> Google</button></div>
        </div><!-- row -->
      </div><!-- card-body -->
      </form>
      {{-- <div class="card-footer">
        Don't have an account? <a href="">Create an Account</a>
      </div><!-- card-footer --> --}}
    </div><!-- card -->

    <script src="{{asset('backend/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script>
      'use script'

      var skinMode = localStorage.getItem('skin-mode');
      if(skinMode) {
        $('html').attr('data-skin', 'dark');
      }
    </script>
  </body>
</html>
