@extends('layouts.auth')
@section('content')
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <div class="login-box">
            <div class="login-form">
                <a href="#" class="login-logo">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Vico Admin" />
                </a>
                <div class="login-welcome">
                    {{ $title ?? config('APP_NAME') }}, <br />Please login to your Arise admin account.
                </div>

                <input type="hidden" name="token" value="{{ $request->token }}">
                <input type="hidden" name="email" id="email" value="{{ $request->email }}">

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Password</label>
                        <a href="{{ route('login') }}" class="btn-link ml-auto">Remember Password?</a>
                    </div>
                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
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
                        Reset Password</button>
                </div>



            </div>
        </div>
    </form>
@endsection
