<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Login') | SACA</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS - Modern Split Design -->
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: #e8e6e1;
        }
        
        .auth-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .auth-container {
            display: flex;
            width: 100%;
            max-width: 1000px;
            min-height: 550px;
            background: #d4d0c8;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        /* Left Side - Branding */
        .auth-branding {
            flex: 1;
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px;
            color: white;
            position: relative;
        }
        
        .auth-branding::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="rgba(255,255,255,0.03)"/></svg>');
            background-size: 80px;
        }
        
        .brand-content {
            position: relative;
            z-index: 1;
        }
        
        .brand-logo {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .brand-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .brand-subtitle {
            font-size: 1rem;
            opacity: 0.8;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        
        .brand-features {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .brand-features li {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            font-size: 0.95rem;
            opacity: 0.9;
        }
        
        .brand-features li i {
            width: 24px;
            height: 24px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-size: 0.7rem;
        }
        
        /* Right Side - Form */
        .auth-form-section {
            flex: 1;
            background: #d4d0c8;
            display: flex;
            flex-direction: column;
            padding: 40px 50px;
            position: relative;
        }
        
        .go-back-btn {
            position: absolute;
            top: 25px;
            right: 25px;
            background: #3d3d3d;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
        }
        
        .go-back-btn:hover {
            background: #2d2d2d;
            color: white;
            transform: translateY(-1px);
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 35px;
            margin-top: 20px;
        }
        
        .form-header .brand-small {
            font-size: 0.75rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #6b7280;
            margin-bottom: 10px;
        }
        
        .form-header h2 {
            font-size: 1.75rem;
            font-weight: 600;
            color: #1f2937;
            margin: 0;
        }
        
        .auth-form {
            flex: 1;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            font-size: 0.8rem;
            font-weight: 500;
            color: #4b5563;
            margin-bottom: 8px;
            display: block;
        }
        
        .form-control-custom {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #c4c0b8;
            border-radius: 12px;
            background: #c4c0b8;
            font-size: 0.95rem;
            color: #1f2937;
            transition: all 0.3s ease;
        }
        
        .form-control-custom:focus {
            outline: none;
            border-color: #1e3a8a;
            background: #b8b4ac;
        }
        
        .form-control-custom::placeholder {
            color: #9ca3af;
        }
        
        .form-control-custom.is-invalid {
            border-color: #ef4444;
        }
        
        .invalid-feedback {
            font-size: 0.8rem;
            color: #ef4444;
            margin-top: 5px;
        }
        
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .form-check {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .form-check-input {
            width: 18px;
            height: 18px;
            border: 2px solid #c4c0b8;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .form-check-label {
            font-size: 0.85rem;
            color: #4b5563;
            cursor: pointer;
        }
        
        .forgot-link {
            font-size: 0.85rem;
            color: #1e3a8a;
            text-decoration: none;
            font-weight: 500;
        }
        
        .forgot-link:hover {
            text-decoration: underline;
        }
        
        .btn-login {
            width: 100%;
            padding: 14px;
            background: #2d2d3d;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-login:hover {
            background: #1e1e2d;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.2);
        }
        
        .form-footer {
            text-align: center;
            margin-top: 25px;
        }
        
        .form-footer p {
            font-size: 0.9rem;
            color: #6b7280;
            margin: 0;
        }
        
        .form-footer a {
            color: #1e3a8a;
            text-decoration: none;
            font-weight: 600;
        }
        
        .form-footer a:hover {
            text-decoration: underline;
        }
        
        .copyright {
            text-align: center;
            font-size: 0.75rem;
            color: #9ca3af;
            margin-top: auto;
            padding-top: 20px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .auth-container {
                flex-direction: column;
                max-width: 450px;
            }
            
            .auth-branding {
                padding: 40px 30px;
                min-height: 200px;
            }
            
            .brand-title {
                font-size: 1.75rem;
            }
            
            .auth-form-section {
                padding: 30px;
            }
        }
        
        @media (max-width: 480px) {
            .auth-wrapper {
                padding: 10px;
            }
            
            .auth-container {
                border-radius: 15px;
            }
            
            .auth-branding {
                padding: 30px 20px;
            }
            
            .auth-form-section {
                padding: 25px 20px;
            }
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <div class="auth-wrapper">
        @yield('content')
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('scripts')
</body>
</html>
