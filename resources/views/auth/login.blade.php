@extends('layouts.app')

@section('content')
<div class="container mt-5 flex">
    <div class="row mt-5">
        <h1 class="text-center mb-5">
            <b>
                SIGN IN
            </b>
        </h1>
        <br>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-3">
                <label for="email">{{ __('Email Address') }}</label>

                <div class="col">
                    <input id="email" style="width: 100%;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password">{{ __('Password') }}</label>

                <div class="col">
                    <input id="password" style="width: 100%;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mt-4">
                    <button type="submit" class="btn btn-primary m-2" style="width: 100%; background-color: #5E7B87; color: white;">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" style="text-align: right;" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>

            <!-- <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div> -->

        </form>
    </div>
</div>
@endsection