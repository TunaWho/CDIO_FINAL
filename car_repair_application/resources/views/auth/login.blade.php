@extends('layouts_auth.app')

@section('content')
<section class="sign-in">
  <div class="container">
      <div class="signin-content">
          <div class="signin-image">
              <figure><img src="{{ asset('assets/images/signin-image.jpg') }}" alt="sing up image"></figure>
              <a href="{{ route('customer.register_form') }}" class="signup-image-link">Create an account</a>
          </div>

          <div class="signin-form">
              <h2 class="form-title">Sign up</h2>
                {!! Form::open(['class' => 'register-form', 'id' => 'login-form', 'method' => 'POST', 'route' => ['customer.login']]) !!}
                  <div class="form-group">
                      <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                      <input type="text" name="email" value="{{ old('email') ?? '' }}" id="your_name" placeholder="Your Email"/>
                  </div>
                  @error('email')
                  <h5 class="text-danger">
                      <strong>{{ $message }}</strong>
                  </h5>
                  @enderror
                  <div class="form-group">
                      <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                      <input type="password" name="password" id="your_pass" placeholder="Password"/>
                  </div>
                  @error('password')
                  <h5 class="text-danger">
                      <strong>{{ $message }}</strong>
                  </h5>
                  @enderror
                  <div class="form-group">
                      <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                      <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                  </div>
                  <div class="form-group form-button">
                      <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                  </div>
                {!! Form::close() !!}
              <div class="social-login">
                  <span class="social-label">Or login with</span>
                  <ul class="socials">
                      <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                      <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                      <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
