<!-- Top Bar -->
<div class="top-bar bg-primary text-white py-2" style="background: linear-gradient(90deg, #1e3a8a 0%, #2563eb 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="d-flex flex-wrap gap-4 small">
                    <a href="#" class="text-white text-decoration-none hover-opacity">
                        <i class="fas fa-book-reader me-1"></i> Academic Calendar
                    </a>
                    <a href="#" class="text-white text-decoration-none hover-opacity">
                        <i class="fas fa-graduation-cap me-1"></i> Admissions
                    </a>
                    <a href="#" class="text-white text-decoration-none hover-opacity">
                        <i class="fas fa-comments me-1"></i> Feedback
                    </a>
                    <a href="#" class="text-white text-decoration-none hover-opacity">
                        <i class="fas fa-info-circle me-1"></i> e-Services
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-md-end">
                <span class="small">
                    <i class="fas fa-phone me-1"></i> +255 000 000 000
                    <span class="mx-2">|</span>
                    <i class="fas fa-envelope me-1"></i> info@saca.ac.tz
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Government Header Section -->
<div class="gov-header py-3" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); border-bottom: 3px solid #f59e0b;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-lg-3 col-md-4 mb-3 mb-md-0">
                <a href="{{ route('landing.home') }}" class="d-flex align-items-center text-decoration-none">
                    <div class="logo-icon me-3" style="width: 70px; height: 70px; background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 20px -5px rgba(30, 58, 138, 0.3);">
                        <i class="fas fa-graduation-cap text-white fa-2x"></i>
                    </div>
                    <div>
                        <h4 class="mb-0 fw-bold" style="color: #1e3a8a;">SACA</h4>
                        <small class="text-muted d-block" style="font-size: 0.7rem;">St. Aggrey College</small>
                    </div>
                </a>
            </div>
            
            <!-- Center Text -->
            <div class="col-lg-6 col-md-8 text-center mb-3 mb-lg-0">
                <div class="gov-title">
                    <h6 class="mb-1" style="color: #dc2626; font-weight: 600; font-size: 0.85rem; letter-spacing: 1px;">UNITED REPUBLIC OF TANZANIA</h6>
                    <p class="mb-0 small" style="color: #4b5563; font-weight: 500;">Ministry of Education, Science and Technology</p>
                    <h5 class="mb-0 mt-1" style="color: #1e3a8a; font-weight: 700;">ST. AGGREY COLLEGE OF ARTS</h5>
                    <small class="text-muted">P.O. Box 2954, Mbeya - Tanzania</small>
                </div>
            </div>
            
            <!-- Coat of Arms -->
            <div class="col-lg-3 text-lg-end text-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Coat_of_arms_of_Tanzania.svg/1200px-Coat_of_arms_of_Tanzania.svg.png" 
                     alt="Tanzania Coat of Arms" 
                     style="height: 80px; filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));">
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<nav class="main-nav navbar navbar-expand-lg" style="background: linear-gradient(90deg, #1e3a8a 0%, #2563eb 50%, #1e40af 100%); padding: 0;">
    <div class="container">
        <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <i class="fas fa-bars fa-lg"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link text-white fw-medium py-3 px-4" href="{{ route('landing.home') }}" style="border-right: 1px solid rgba(255,255,255,0.1);">
                        <i class="fas fa-home me-1"></i> HOME
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-medium py-3 px-4" href="#" data-bs-toggle="dropdown" style="border-right: 1px solid rgba(255,255,255,0.1);">
                        <i class="fas fa-info-circle me-1"></i> ABOUT US
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" style="background: #1e3a8a;">
                        <li><a class="dropdown-item text-white" href="#"><i class="fas fa-history me-2"></i>Our History</a></li>
                        <li><a class="dropdown-item text-white" href="#"><i class="fas fa-bullseye me-2"></i>Mission & Vision</a></li>
                        <li><a class="dropdown-item text-white" href="#"><i class="fas fa-users me-2"></i>Leadership</a></li>
                        <li><a class="dropdown-item text-white" href="#"><i class="fas fa-trophy me-2"></i>Achievements</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-medium py-3 px-4" href="#" style="border-right: 1px solid rgba(255,255,255,0.1);">
                        <i class="fas fa-address-book me-1"></i> CONTACT US
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-medium py-3 px-4" href="#" style="border-right: 1px solid rgba(255,255,255,0.1);">
                        <i class="fas fa-book me-1"></i> PROGRAMMES
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-medium py-3 px-4" href="#" style="border-right: 1px solid rgba(255,255,255,0.1);">
                        <i class="fas fa-file-alt me-1"></i> ADMISSIONS
                        <span class="badge bg-warning text-dark ms-1" style="font-size: 0.6rem;">OPEN</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-medium py-3 px-4" href="#" data-bs-toggle="dropdown" style="border-right: 1px solid rgba(255,255,255,0.1);">
                        <i class="fas fa-chalkboard-teacher me-1"></i> ACADEMICS
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" style="background: #1e3a8a;">
                        <li><a class="dropdown-item text-white" href="#"><i class="fas fa-calendar-alt me-2"></i>Academic Calendar</a></li>
                        <li><a class="dropdown-item text-white" href="#"><i class="fas fa-clock me-2"></i>Timetables</a></li>
                        <li><a class="dropdown-item text-white" href="#"><i class="fas fa-clipboard-list me-2"></i>Examinations</a></li>
                        <li><a class="dropdown-item text-white" href="#"><i class="fas fa-chart-bar me-2"></i>Results</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-medium py-3 px-4" href="#" style="border-right: 1px solid rgba(255,255,255,0.1);">
                        <i class="fas fa-newspaper me-1"></i> NEWS
                        <span class="badge bg-danger ms-1" style="font-size: 0.6rem;">NEW</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-medium py-3 px-4" href="#" style="border-right: 1px solid rgba(255,255,255,0.1);">
                        <i class="fas fa-flask me-1"></i> RESEARCH
                    </a>
                </li>
            </ul>
            
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white fw-medium py-3 px-3" href="#" title="Staff Portal">
                        <i class="fas fa-user-tie me-1"></i> STAFF PORTAL
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-medium py-3 px-3" href="{{ route('login') }}" style="background: #f59e0b; color: #1e3a8a !important; font-weight: 700;">
                        <i class="fas fa-sign-in-alt me-1"></i> LOGIN
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .hover-opacity:hover {
        opacity: 0.8;
    }
    
    .main-nav .nav-link {
        transition: all 0.3s ease;
        position: relative;
    }
    
    .main-nav .nav-link:hover {
        background: rgba(255,255,255,0.1);
    }
    
    .main-nav .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 3px;
        background: #f59e0b;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }
    
    .main-nav .nav-link:hover::after {
        width: 80%;
    }
    
    .dropdown-menu-dark {
        border: none;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }
    
    .dropdown-menu-dark .dropdown-item:hover {
        background: rgba(255,255,255,0.1) !important;
    }
    
    @media (max-width: 991px) {
        .main-nav .navbar-collapse {
            background: #1e3a8a;
            padding: 1rem;
            border-radius: 0 0 10px 10px;
        }
        
        .main-nav .nav-link {
            border-right: none !important;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
    }
</style>
