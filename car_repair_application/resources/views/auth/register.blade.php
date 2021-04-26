@extends('layouts_auth.app')

@section('content')
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                  {!! Form::open(['class' => 'register-form', 'id' => 'register-form', 'method' => 'POST', 'route' => ['customer.register']]) !!}
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" value="{{ old('name') ?? '' }}" id="name" placeholder="Your Name"/>
                    </div>
                    @error('name')
                    <h5 class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </h5>
                    @enderror
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" value="{{ old('email') ?? '' }}" id="email" placeholder="Your Email"/>
                    </div>
                    @error('email')
                    <h5 class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </h5>
                    @enderror
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="pass" placeholder="Password"/>
                    </div>
                    @error('password')
                    <h5 class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </h5>
                    @enderror
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                    </div>
                  {!! Form::close() !!}
            </div>
            <div class="signup-image">
                <figure><img src="{{ asset('assets/images/signup-image.jpg') }}" alt="sing up image"></figure>
                <a href="#" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>

@endsection