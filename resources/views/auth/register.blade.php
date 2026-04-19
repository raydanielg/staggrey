@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="auth-container">
    <!-- Left Side - Branding -->
    <div class="auth-branding">
        <div class="brand-content">
            <div class="brand-logo">
                <i class="fas fa-graduation-cap me-2"></i>SACA
            </div>
            <h1 class="brand-title">Create Your<br>Account</h1>
            <p class="brand-subtitle">
                Join St. Aggrey College community. Register to access 
                your personalized student dashboard and stay connected.
            </p>
            <ul class="brand-features">
                <li><i class="fas fa-check"></i> View Academic Records</li>
                <li><i class="fas fa-check"></i> Access Course Materials</li>
                <li><i class="fas fa-check"></i> Check Exam Results</li>
                <li><i class="fas fa-check"></i> Connect with Faculty</li>
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
            <h2>Register</h2>
        </div>

        <form class="auth-form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control-custom @error('name') is-invalid @enderror" 
                       value="{{ old('name') }}" placeholder="Enter your full name" required autofocus>
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control-custom @error('email') is-invalid @enderror" 
                       value="{{ old('email') }}" placeholder="Enter your email" required>
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control-custom @error('password') is-invalid @enderror" 
                       placeholder="Create a password" required>
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control-custom" 
                       placeholder="Confirm your password" required>
            </div>

            <button type="submit" class="btn-login">
                <i class="fas fa-user-plus me-2"></i>Create Account
            </button>

            <div class="form-footer">
                <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
            </div>
        </form>

        <div class="copyright">
            © {{ date('Y') }} St. Aggrey College of Arts. All Rights Reserved.
        </div>
    </div>
</div>
@endsection
