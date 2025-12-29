@extends('layouts.auth')
@section('content')
    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="login-box">
            <div class="login-form">
                <a href="index.html" class="login-logo">
                    <img src="assets/images/logo.svg" alt="Vico Admin" />
                </a>
                <div class="login-welcome">
                    {{ $title ?? config('APP_NAME') }},<br />Please enter the email id you provided during the
                    registration
                    process.
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email"
                        value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="login-form-actions">
                    <button type="submit" class="btn"> <span class="icon"> <i class="bi bi-arrow-right-circle"></i>
                        </span>
                        Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
