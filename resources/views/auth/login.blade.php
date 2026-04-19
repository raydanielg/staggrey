@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="auth-container">
    <!-- Left Side - Branding -->
    <div class="auth-branding">
        <div class="brand-content">
            <div class="brand-logo">
                <i class="fas fa-graduation-cap me-2"></i>SACA
            </div>
            <h1 class="brand-title">Welcome to<br>St. Aggrey College</h1>
            <p class="brand-subtitle">
                Sign in to access your student portal, manage courses, 
                check results, and stay connected with the college.
            </p>
            <ul class="brand-features">
                <li><i class="fas fa-check"></i> Academic Management</li>
                <li><i class="fas fa-check"></i> Fee Payments & Receipts</li>
                <li><i class="fas fa-check"></i> Results & Transcripts</li>
                <li><i class="fas fa-check"></i> Course Registration</li>
            </ul>
        </div>
    </div>

    <!-- Right Side - Form -->
    <div class="auth-form-section">
        <a href="{{ route('public.home') }}" class="go-back-btn">
            <i class="fas fa-arrow-left"></i> Go Back
        </a>

        <div class="form-header">
            <div class="brand-small">St. Aggrey College of Arts</div>
            <h2>Login</h2>
        </div>

        <form class="auth-form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control-custom @error('email') is-invalid @enderror" 
                       value="{{ old('email') }}" placeholder="Enter your email" required autofocus>
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control-custom @error('password') is-invalid @enderror" 
                       placeholder="Enter your password" required>
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-options">
                <div class="form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-link">Forgot Password?</a>
                @endif
            </div>

            <button type="submit" class="btn-login">
                <i class="fas fa-sign-in-alt me-2"></i>Login
            </button>

            <div class="form-footer">
                <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
            </div>
        </form>

        <div class="copyright">
            © {{ date('Y') }} St. Aggrey College of Arts. All Rights Reserved.
        </div>
    </div>
</div>
@endsection
