@extends('layouts.app')

@section('content')


<div class="login-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="form-section">
                    <div class="logo-2">
                        <a href="login-2.html">
                        <img src="{{ asset('public/login-style/assets/img/logo.png')}}" alt="logo" style="width: 200px;
    height: 150px;">
                        </a>
                    </div>
                <div>{{ __('Reset Password') }}</div>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf      <!-- {{ csrf_field() }}-->

                        <input type="hidden" class="input-text"  name="token" value="{{ $token }}">
                        <div class="form-group form-box">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="input-text @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group form-box">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input-text @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group form-box">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input-text" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group form-box">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn-md btn-theme btn-block">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection