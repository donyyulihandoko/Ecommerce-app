@extends('layouts.auth')
@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="login-box">
            <div class="login-form">
                <a href="index.html" class="login-logo">
                    <img src="assets/images/logo.svg" alt="Vico Admin" />
                </a>
                <div class="login-welcome">
                    {{ $title ?? config('APP_NAME') }}, <br />Please create your Arise admin account.
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                        value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Username</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Username"
                        value="{{ old('name') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password_confirmation">Password Confirmation</label>
                    </div>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        placeholder="Password">
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="login-form-actions">
                    <button type="submit" class="btn"> <span class="icon"> <i class="bi bi-arrow-right-circle"></i>
                        </span>
                        Signup</button>
                </div>

                <div class="login-form-footer">
                    <div class="additional-link">
                        Already have an account? <a href="{{ route('login') }}"> Login</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
