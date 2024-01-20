@extends('layouts/login')

@section('title', 'Create an Account')

@section('meta-description', 'Real Estate Agency in Sacramento')

@section('vendor-style')
@endsection

@section('content')
<div class="contact-section">
    <div class="container-fluid">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0 form-section">
                <div class="form-inner">
                    
                    <h3 class="mt-3">Create An Cccount</h3>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group form-box">
                            <input type="text" name="name" class="input-text" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group form-box">
                            <input type="email" name="email" class="input-text" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email">
                            <i class="flaticon-mail-2"></i>
                        </div>
                        <div class="form-group form-box">
                            <input type="password" name="password" class="input-text" placeholder="Password" required autocomplete="new-password">
                            <i class="flaticon-password"></i>
                        </div>
                        <div class="form-group form-box">
                            <input type="password" name="password_confirmation" class="input-text" placeholder="Confirm Password" required autocomplete="new-password">
                            <i class="flaticon-password"></i>
                        </div>
                        <div class="checkbox form-group clearfix">
                            <div class="form-check checkbox-theme">
                                <input class="form-check-input" type="checkbox" value="" id="rememberMe" required>
                                <label class="form-check-label" for="rememberMe">
                                    I agree to the <a href="#">terms of service</a>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-4 btn-block">Register</button>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger mb-3" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                @foreach ($errors->all() as $error) 
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <div class="extra-login form-group clearfix">
                            <span>Or Login With</span>
                        </div>
                        <div class="clearfix"></div>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg">Facebook</a></li>
                            <li><a href="#" class="google-bg">Google</a></li>
                        </ul>
                    </form>
                    <div class="clearfix"></div>
                    <p>Already a member? <a href="/login">Login here</a></p>
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <h1>Welcome to <a href="/home">Terra Homes</a></h1>
                    <p>Welcome to Terra homes real estate, your trusted ally in finding the perfect home. At Terra homes, we are dedicated to simplifying your house-hunting journey. With transparency, a diverse property portfolio, and personalized service, we go beyond transactions to help you discover a rental that truly feels like home. Explore our listings and let us be your partner in finding your ideal living space.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
