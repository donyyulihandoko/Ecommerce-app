@extends('layouts.auth')
@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="login-box">
            <div class="login-form">
                <a href="#" class="login-logo" style="justify-content: center">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Vico Admin" />
                </a>
                <div class="login-welcome">
                    {{ $title ?? config('APP_NAME') }}, <br />Please login to your Arise admin account.
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="email"
                        value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Password</label>
                        <a href="{{ route('password.request') }}" class="btn-link ml-auto">Forgot password?</a>
                    </div>
                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="login-form-actions">
                    <button type="submit" class="btn"> <span class="icon"> <i class="bi bi-arrow-right-circle"></i>
                        </span>
                        Login</button>
                </div>


                <div class="login-form-footer">
                    <div class="additional-link">
                        Don't have an account? <a href="{{ route('register') }}"> Signup</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
