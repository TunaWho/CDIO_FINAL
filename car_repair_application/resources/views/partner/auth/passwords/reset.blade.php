@extends('layouts_auth.app')

@section('content')
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="{{ asset('assets/images/signin-image.jpg') }}" alt="sing up image"></figure>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Reset Password</h2>
                {!! Form::open(['class' => 'register-form', 'id' => 'login-form', 'method' => 'POST', 'route' => ['partner.password.update']]) !!}
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email }}">
                <div class="form-group">
                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                    <input type="password" name="password" value="" autocomplete="new-password" placeholder="New Password" />
                </div>
                @error('password')
                    <h5 class="text-danger">
                        <strong>{{ $message }}</strong>
                    </h5>
                @enderror
                <div class="form-group">
                    <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                    <input type="password" name="password_confirmation" value="" autocomplete="new-password" placeholder="Repeat your password" />
                </div>
                @error('password_confirmation')
                    <h5 class="text-danger">
                        <strong>{{ $message }}</strong>
                    </h5>
                @enderror
                <div class="form-group">
                    <input type="submit" id="confirm" class="btn btn-success" value="CONFIRM" />
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@endsection