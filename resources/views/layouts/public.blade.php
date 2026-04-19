<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'St. Aggrey College of Arts') | SACA Mbeya</title>
    <meta name="description" content="St. Aggrey College of Arts - Quality Education in Mbeya, Tanzania">
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS - Blue Theme -->
    <style>
        :root {
            --primary-blue: #1e3a8a;
            --primary-blue-light: #3b82f6;
            --primary-blue-dark: #1e40af;
            --secondary-blue: #60a5fa;
            --accent-gold: #f59e0b;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-light: #f8fafc;
            --white: #ffffff;
        }
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background-color: var(--bg-light);
            color: var(--text-dark);
        }
        
        /* Blue Navbar */
        .navbar-main {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-blue-dark) 100%);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-main .navbar-brand,
        .navbar-main .nav-link {
            color: var(--white) !important;
            font-weight: 500;
        }
        
        .navbar-main .nav-link:hover {
            color: var(--secondary-blue) !important;
        }
        
        .navbar-main .dropdown-menu {
            border: none;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        /* Blue Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-blue-light) 50%, var(--primary-blue-dark) 100%);
            min-height: 80vh;
            display: flex;
            align-items: center;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="rgba(255,255,255,0.05)"/></svg>');
            background-size: 100px;
            opacity: 0.3;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            font-weight: 300;
            opacity: 0.9;
        }
        
        /* Blue Buttons */
        .btn-primary-blue {
            background: linear-gradient(135deg, var(--accent-gold) 0%, #d97706 100%);
            border: none;
            color: var(--white);
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .btn-primary-blue:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(245, 158, 11, 0.4);
            color: var(--white);
        }
        
        .btn-outline-blue {
            border: 2px solid var(--white);
            color: var(--white);
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
            background: transparent;
        }
        
        .btn-outline-blue:hover {
            background: var(--white);
            color: var(--primary-blue);
        }
        
        /* Blue Cards */
        .card-blue {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            background: var(--white);
        }
        
        .card-blue:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .card-blue .card-header {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-blue-dark) 100%);
            color: var(--white);
            border: none;
            padding: 1.5rem;
        }
        
        .card-blue .card-body {
            padding: 1.5rem;
        }
        
        /* Blue Stats */
        .stat-box {
            background: var(--white);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .stat-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .stat-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-blue-light) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: var(--white);
            font-size: 1.5rem;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-blue);
        }
        
        .stat-label {
            color: var(--text-light);
            font-weight: 500;
        }
        
        /* Blue Footer */
        .footer-blue {
            background: linear-gradient(135deg, var(--primary-blue-dark) 0%, var(--primary-blue) 100%);
            color: var(--white);
            padding: 4rem 0 2rem;
        }
        
        .footer-blue a {
            color: var(--secondary-blue);
            text-decoration: none;
        }
        
        .footer-blue a:hover {
            color: var(--white);
        }
        
        /* Section Headers */
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-header h2 {
            color: var(--primary-blue);
            font-weight: 700;
            font-size: 2.5rem;
        }
        
        .section-header .divider {
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-gold));
            margin: 1rem auto;
            border-radius: 2px;
        }
        
        /* WhatsApp Float Button */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: #25d366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.5rem;
            box-shadow: 0 10px 20px -5px rgba(37, 211, 102, 0.4);
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .whatsapp-float:hover {
            transform: scale(1.1);
            color: var(--white);
        }
        
        /* Program Cards */
        .program-card {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.15);
        }
        
        .program-card .program-level {
            background: var(--accent-gold);
            color: var(--white);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .program-card .program-title {
            color: var(--primary-blue);
            font-weight: 700;
            font-size: 1.25rem;
        }
        
        /* Animations */
        .fade-in-up {
            animation: fadeInUp 0.8s ease;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .section-header h2 {
                font-size: 1.75rem;
            }
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-main sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('public.home') }}">
                <i class="fas fa-graduation-cap me-2"></i>
                <strong>SACA</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.programs') }}">Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.staff') }}">Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.news') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public.contact') }}">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Portal
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-user-graduate me-2"></i>Student Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-chalkboard-teacher me-2"></i>Staff Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-user-tie me-2"></i>Alumni Login</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-blue" href="{{ route('public.application') }}">
                            <i class="fas fa-paper-plane me-2"></i>Apply Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h4 class="mb-3"><i class="fas fa-graduation-cap me-2"></i>St. Aggrey College of Arts</h4>
                    <p>Empowering minds, shaping futures. Quality education in Mbeya, Tanzania since establishment.</p>
                    <div class="mt-3">
                        <a href="#" class="me-3"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('public.about') }}">About Us</a></li>
                        <li><a href="{{ route('public.programs') }}">Programs</a></li>
                        <li><a href="{{ route('public.fees') }}">Fee Structure</a></li>
                        <li><a href="{{ route('public.application') }}">Apply Online</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5>Contact Info</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i>P.O. Box 2954, Mbeya, Tanzania</li>
                        <li><i class="fas fa-phone me-2"></i>+255 XXX XXX XXX</li>
                        <li><i class="fas fa-envelope me-2"></i>info@staggrey.ac.tz</li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5>Working Hours</h5>
                    <ul class="list-unstyled">
                        <li>Mon - Fri: 8:00 AM - 5:00 PM</li>
                        <li>Saturday: 8:00 AM - 1:00 PM</li>
                        <li>Sunday: Closed</li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="text-center">
                <p class="mb-0">&copy; {{ date('Y') }} St. Aggrey College of Arts. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/255XXXXXXXXX" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('scripts')
</body>
</html>
