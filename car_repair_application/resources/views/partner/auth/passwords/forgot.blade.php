@extends('layouts_auth.app')

@section('content')
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="{{ asset('assets/images/signin-image.jpg') }}" alt="sing up image"></figure>
                <a href="{{ route('partner.register_form') }}" class="signup-image-link"><strong>Create an
                        account</strong></a>
            </div>
            <div class="signin-form">
                <h2 class="form-title">Forgot Password</h2>
                {!! Form::open(['class' => 'register-form', 'id' => 'login-form', 'method' => 'POST', 'route' => ['partner.password.email']]) !!}
                @csrf
                @include('customer.layouts.message.notice')   
                <div class="form-group">
                    <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    <input type="text" name="email" value="" id="your_name" placeholder="Your Email" />
                </div>
                @error('email')
                    <h5 class="text-danger">
                        <strong>{{ $message }}</strong>
                    </h5>
                @enderror
                <div class="form-group">
                    <input type="submit" name="signin" id="signin" class="btn btn-success" value="CONTINUE" />
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@endsection
