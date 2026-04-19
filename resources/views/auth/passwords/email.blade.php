@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
<div class="auth-container">
    <!-- Left Side - Branding -->
    <div class="auth-branding">
        <div class="brand-content">
            <div class="brand-logo">
                <i class="fas fa-graduation-cap me-2"></i>SACA
            </div>
            <h1 class="brand-title">Forgot<br>Password?</h1>
            <p class="brand-subtitle">
                Don't worry! Enter your email address and we'll send you 
                a link to reset your password and regain access to your account.
            </p>
            <ul class="brand-features">
                <li><i class="fas fa-check"></i> Secure Password Reset</li>
                <li><i class="fas fa-check"></i> Instant Email Delivery</li>
                <li><i class="fas fa-check"></i> 24/7 Access Recovery</li>
                <li><i class="fas fa-check"></i> Easy Account Access</li>
            </ul>
        </div>
    </div>

    <!-- Right Side - Form -->
    <div class="auth-form-section">
        <a href="{{ route('login') }}" class="go-back-btn">
            <i class="fas fa-arrow-left"></i> Back to Login
        </a>

        <div class="form-header">
            <div class="brand-small">St. Aggrey College of Arts</div>
            <h2>Reset Password</h2>
        </div>

        @if (session('status'))
            <div class="alert alert-success mb-3">
                {{ session('status') }}
            </div>
        @endif

        <form class="auth-form" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control-custom @error('email') is-invalid @enderror" 
                       value="{{ old('email') }}" placeholder="Enter your registered email" required autofocus>
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn-login">
                <i class="fas fa-paper-plane me-2"></i>Send Reset Link
            </button>

            <div class="form-footer">
                <p>Remember your password? <a href="{{ route('login') }}">Login here</a></p>
            </div>
        </form>

        <div class="copyright">
            © {{ date('Y') }} St. Aggrey College of Arts. All Rights Reserved.
        </div>
    </div>
</div>
@endsection
