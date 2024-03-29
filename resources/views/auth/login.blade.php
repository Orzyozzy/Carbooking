@extends('layouts.login')

@section('content')

<!--Login form functions-->
<form method="POST" action="{{ route('login') }}">
@csrf
    <div class="wrapper">
            <div class="logo">
                <img src="{{ asset('assets/img/garagelogo.png') }}" alt="">
            </div>
            <div class="text-center mt-4 name">
                <div>{{ __('USER LOGIN') }}</div>
            </div>
          
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input id="email" type="email  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Username">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <button type="submit" class="btn">
                    {{ __('Login') }}
                </button>
          
            <div class="text-center fs-6">
                @if (Route::has('password.request'))
                    <a  href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }} </a> or <a href="{{ route('register') }}">Sign up</a>
                @endif
            </div>
            <div class="text-center fs-6">
             
                <a  href="{{ url('admin/login') }}"> {{ __('Sign in as Staff') }}</a>
           
            </div>
        </div>
</form>

@endsection
