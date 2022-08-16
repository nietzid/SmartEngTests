@extends('layouts.app')

@section('content')
<div class="container flex mt-5">
    <div class="row mt-3">
        <h1 class="text-center mb-3">
            <b>
                SIGN UP
            </b>
        </h1>
        <br>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
                <label for="name">{{ __('Name') }}</label>

                <div class="col">
                    <input id="name" style="width: 100%" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email">{{ __('Email Address') }}</label>

                <div class="col">
                    <input id="email" style="width: 100%" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                    <input id="password" style="width: 100%" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                <div class="col">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <button type="submit" style="width: 100%; background-color: #3E6D81;" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
    @endsection