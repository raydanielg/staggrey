<!-- Top Bar -->
<div class="top-bar" style="background: linear-gradient(90deg, #1e3a8a 0%, #2563eb 100%); padding: 8px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="d-flex flex-wrap gap-4 small text-white">
                    <a href="#" class="text-white text-decoration-none" style="opacity: 0.9; transition: opacity 0.3s;">
                        <i class="fas fa-calendar-alt me-1"></i> Academic Calendar
                    </a>
                    <a href="#" class="text-white text-decoration-none" style="opacity: 0.9; transition: opacity 0.3s;">
                        <i class="fas fa-file-alt me-1"></i> Admissions
                    </a>
                    <a href="#" class="text-white text-decoration-none" style="opacity: 0.9; transition: opacity 0.3s;">
                        <i class="fas fa-comments me-1"></i> Feedback
                    </a>
                    <a href="#" class="text-white text-decoration-none" style="opacity: 0.9; transition: opacity 0.3s;">
                        <i class="fas fa-globe me-1"></i> e-Services
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-md-end">
                <span class="small text-white" style="opacity: 0.9;">
                    <i class="fas fa-phone me-1"></i> 0717327632 / 0755660616
                    <span class="mx-2">|</span>
                    <i class="fas fa-envelope me-1"></i> staggreyhealth@gmail.com
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Government Header Section - Clean Layout -->
<div class="gov-header" style="background: #ffffff; border-bottom: 4px solid #f59e0b;">
    <div class="container py-3">
        <div class="row align-items-center justify-content-between">
            
            <!-- Left: SACHS Logo -->
            <div class="col-lg-2 col-md-3 col-sm-4 text-center text-md-start mb-2 mb-md-0">
                <a href="{{ route('landing.home') }}" class="text-decoration-none d-inline-block">
                    <div class="d-flex flex-column align-items-center align-items-md-start">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 16px rgba(30, 58, 138, 0.3);">
                            <i class="fas fa-user-md text-white" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="mt-2 text-center text-md-start">
                            <h5 class="mb-0 fw-bold" style="color: #1e3a8a; font-size: 1.3rem; letter-spacing: 1px;">SACHS</h5>
                            <small class="text-muted" style="font-size: 0.7rem;">St. Aggrey College</small>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Center: Government Title -->
            <div class="col-lg-7 col-md-6 col-sm-12 text-center mb-2 mb-md-0">
                <div class="gov-title" style="line-height: 1.4;">
                    <div style="color: #dc2626; font-weight: 700; font-size: 0.9rem; letter-spacing: 2px; text-transform: uppercase;">
                        UNITED REPUBLIC OF TANZANIA
                    </div>
                    <div style="color: #4b5563; font-weight: 600; font-size: 0.85rem; margin-top: 2px;">
                        Ministry of Health
                    </div>
                    <div style="color: #1e3a8a; font-weight: 800; font-size: 1.3rem; margin-top: 8px; letter-spacing: 0.5px;">
                        ST. AGGREY COLLEGE OF HEALTH SCIENCES
                    </div>
                    <div style="color: #6b7280; font-size: 0.75rem; margin-top: 5px;">
                        <span style="color: #f59e0b; font-weight: 600;">Registration No: REG/HAS/116</span> | P.O. Box 2954, Mbeya - Tanzania
                    </div>
                </div>
            </div>
            
            <!-- Right: Coat of Arms -->
            <div class="col-lg-2 col-md-3 col-sm-4 text-center text-md-end">
                <div class="d-flex flex-column align-items-center align-items-md-end">
                    <img src="{{ asset('emblem.png') }}" 
                         alt="Tanzania Coat of Arms" 
                         style="height: 100px; width: auto; filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));">
                    <small class="mt-1 text-muted" style="font-size: 0.65rem;">Tanzania Emblem</small>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Main Navigation - ATC Style Full Width -->
<nav id="navbar" class="navbar navbar-expand-lg" style="background: linear-gradient(90deg, #1e3a8a 0%, #1e40af 100%); padding: 0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);">
    <div class="container-fluid px-0">
        <ul class="navbar-nav align-items-stretch flex-wrap" style="list-style: none; margin: 0; padding: 0; display: flex; width: 100%;">
            <!-- Home -->
            <li class="nav-item" style="border-right: 1px solid rgba(255,255,255,0.15);">
                <a class="nav-link text-white fw-medium py-3 px-4 d-flex align-items-center h-100" href="{{ route('landing.home') }}" style="transition: all 0.3s; white-space: nowrap;">
                    <i class="fas fa-home me-1"></i> Home
                </a>
            </li>
            
            <!-- About -->
            <li class="nav-item dropdown" style="border-right: 1px solid rgba(255,255,255,0.15);">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-4 d-flex align-items-center h-100" data-bs-toggle="dropdown" style="white-space: nowrap;">
                    About <i class="fas fa-chevron-down small ms-2"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark border-0 shadow-lg" style="background: #1e3a8a; min-width: 250px;">
                    <li><a class="dropdown-item text-white py-2" href="#"><i class="fas fa-angle-right me-2 small"></i> About Us</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#"><i class="fas fa-angle-right me-2 small"></i> Organizational Structure</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#"><i class="fas fa-angle-right me-2 small"></i> SACHS Leadership</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#"><i class="fas fa-angle-right me-2 small"></i> Governing Board</a></li>
                </ul>
            </li>
            
            <!-- Academics Mega Menu -->
            <li class="nav-item dropdown dropdown-hover position-static">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-3" data-bs-toggle="dropdown" style="border-right: 1px solid rgba(255,255,255,0.2);">
                    <span>Academics</span> <i class="fas fa-chevron-down small ms-1"></i>
                </a>
                <div class="dropdown-menu w-100 mt-0 mega-menu border-0 shadow-lg" style="background: #1e3a8a; left: 0; right: 0;">
                    <div class="container py-4">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                                <div class="list-group list-group-flush">
                                    <h6 class="text-warning mb-3 px-2 border-bottom border-secondary pb-2">Academic Departments</h6>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Pharmaceutical Sciences</a>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Clinical Medicine</a>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Nursing & Midwifery</a>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Medical Laboratory Sciences</a>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Basic Sciences</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                                <div class="list-group list-group-flush">
                                    <h6 class="text-warning mb-3 px-2 border-bottom border-secondary pb-2">SACHS Centres</h6>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Clinical Skills Centre</a>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Medical Laboratory Centre</a>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Research & Innovation Centre</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-3 mb-md-0">
                                <div class="list-group list-group-flush">
                                    <h6 class="text-warning mb-3 px-2 border-bottom border-secondary pb-2">Campuses</h6>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Main Campus - Mbeya</a>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> City Centre Campus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            
            <!-- Admission Dropdown -->
            <li class="nav-item dropdown" style="border-right: 1px solid rgba(255,255,255,0.15);">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-4 d-flex align-items-center h-100" data-bs-toggle="dropdown" style="white-space: nowrap;">
                    Admission <i class="fas fa-chevron-down small ms-2"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark border-0 shadow-lg" style="background: #1e3a8a; min-width: 250px;">
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Programmes Offered</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Admission Information</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> How to Apply</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Fee Structure</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" target="_blank" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Online Application System</a></li>
                </ul>
            </li>
            
            <!-- Students Dropdown -->
            <li class="nav-item dropdown dropdown-hover position-static" style="border-right: 1px solid rgba(255,255,255,0.15);">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-4 d-flex align-items-center h-100" data-bs-toggle="dropdown" style="white-space: nowrap;">
                    Students <i class="fas fa-chevron-down small ms-2"></i>
                </a>
                <div class="dropdown-menu w-100 mt-0 border-0 shadow-lg" style="background: #1e3a8a; left: 0; right: 0;">
                    <div class="container py-4">
                        <div class="row">
                            <div class="col-md-4 mb-3 mb-lg-0">
                                <h6 class="text-warning mb-3 border-bottom border-secondary pb-2">Student Life</h6>
                                <a href="#" class="d-block text-white py-1 text-decoration-none" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Dean of Students</a>
                                <a href="#" class="d-block text-white py-1 text-decoration-none" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Student Organization</a>
                                <a href="#" class="d-block text-white py-1 text-decoration-none" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Sports & Games</a>
                                <a href="#" class="d-block text-white py-1 text-decoration-none" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Accommodations</a>
                            </div>
                            <div class="col-md-4 mb-3 mb-lg-0">
                                <h6 class="text-warning mb-3 border-bottom border-secondary pb-2">Services</h6>
                                <a href="#" class="d-block text-white py-1 text-decoration-none" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Library</a>
                                <a href="#" class="d-block text-white py-1 text-decoration-none" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Health Centre</a>
                                <a href="#" class="d-block text-white py-1 text-decoration-none" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Cafeteria</a>
                                <a href="#" class="d-block text-white py-1 text-decoration-none" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Counselling</a>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <h6 class="text-warning mb-3 border-bottom border-secondary pb-2">Resources</h6>
                                <a href="#" class="d-block text-white py-1 text-decoration-none" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Student By-Laws</a>
                                <a href="#" class="d-block text-white py-1 text-decoration-none" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Academic Calendar</a>
                                <a href="#" class="d-block text-white py-1 text-decoration-none" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Timetables</a>
                                <a href="#" class="d-block text-white py-1 text-decoration-none" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Results</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            
            <!-- Staff Dropdown -->
            <li class="nav-item dropdown" style="border-right: 1px solid rgba(255,255,255,0.15);">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-4 d-flex align-items-center h-100" data-bs-toggle="dropdown" style="white-space: nowrap;">
                    Staff <i class="fas fa-chevron-down small ms-2"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark border-0 shadow-lg" style="background: #1e3a8a; min-width: 250px;">
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Academic Staff</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Administrative Staff</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Staff Portal</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Staff Mail</a></li>
                </ul>
            </li>
            
            <!-- News -->
            <li class="nav-item" style="border-right: 1px solid rgba(255,255,255,0.15);">
                <a class="nav-link text-white fw-medium py-3 px-4 d-flex align-items-center h-100" href="#" style="white-space: nowrap;">
                    News
                </a>
            </li>
            
            <!-- Research Dropdown -->
            <li class="nav-item dropdown" style="border-right: 1px solid rgba(255,255,255,0.15);">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-4 d-flex align-items-center h-100" data-bs-toggle="dropdown" style="white-space: nowrap;">
                    Research <i class="fas fa-chevron-down small ms-2"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark border-0 shadow-lg" style="background: #1e3a8a; min-width: 250px;">
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Research Projects</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Consultancy Services</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Publications</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Partnerships</a></li>
                </ul>
            </li>
            
            <!-- ICT Services Dropdown -->
            <li class="nav-item dropdown" style="border-right: 1px solid rgba(255,255,255,0.15);">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-4 d-flex align-items-center h-100" data-bs-toggle="dropdown" style="white-space: nowrap;">
                    ICT Services <i class="fas fa-chevron-down small ms-2"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark border-0 shadow-lg" style="background: #1e3a8a; min-width: 250px;">
                    <li><a class="dropdown-item text-white py-2" href="#" target="_blank" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Electronic Payments</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" target="_blank" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Staff Mail</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" target="_blank" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Student Portal</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" target="_blank" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Online Application</a></li>
                </ul>
            </li>
            
            <!-- Short Courses -->
            <li class="nav-item" style="border-right: 1px solid rgba(255,255,255,0.15);">
                <a class="nav-link text-warning fw-bold py-3 px-4 d-flex align-items-center h-100" href="#" style="white-space: nowrap;">
                    <i class="fas fa-star me-1"></i> Short-Courses
                </a>
            </li>
            
            <!-- Mobile Toggle -->
            <li class="nav-item d-lg-none ms-auto">
                <button class="btn btn-link text-white p-3" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNav">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
            </li>
        </ul>
    </div>
    
    <!-- Mobile Navigation -->
    <div class="collapse d-lg-none" id="mobileNav" style="background: #1e3a8a;">
        <div class="container py-3">
            <ul class="list-unstyled mb-0">
                <li class="mb-2"><a href="{{ route('landing.home') }}" class="text-white text-decoration-none d-block py-2"><i class="fas fa-home me-2"></i> Home</a></li>
                <li class="mb-2"><a href="#" class="text-white text-decoration-none d-block py-2"><i class="fas fa-info-circle me-2"></i> About Us</a></li>
                <li class="mb-2"><a href="#" class="text-white text-decoration-none d-block py-2"><i class="fas fa-book me-2"></i> Academics</a></li>
                <li class="mb-2"><a href="#" class="text-white text-decoration-none d-block py-2"><i class="fas fa-file-alt me-2"></i> Admission</a></li>
                <li class="mb-2"><a href="#" class="text-white text-decoration-none d-block py-2"><i class="fas fa-users me-2"></i> Students</a></li>
                <li class="mb-2"><a href="#" class="text-white text-decoration-none d-block py-2"><i class="fas fa-chalkboard-teacher me-2"></i> Staff</a></li>
                <li class="mb-2"><a href="#" class="text-white text-decoration-none d-block py-2"><i class="fas fa-newspaper me-2"></i> News</a></li>
                <li class="mb-2"><a href="#" class="text-white text-decoration-none d-block py-2"><i class="fas fa-flask me-2"></i> Research</a></li>
                <li class="mb-2"><a href="#" class="text-white text-decoration-none d-block py-2"><i class="fas fa-laptop me-2"></i> ICT Services</a></li>
                <li class="mt-3 pt-3 border-top border-secondary">
                    <a href="{{ route('login') }}" class="btn btn-warning w-100 fw-bold"><i class="fas fa-sign-in-alt me-2"></i> LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .dropdown-hover:hover > .dropdown-menu {
        display: block;
    }
    
    .dropdown-hover > .dropdown-menu {
        margin-top: 0;
    }
    
    .mega-menu .list-group-item:hover,
    .dropdown-item:hover {
        background: rgba(255,255,255,0.1) !important;
        padding-left: 1rem !important;
    }
    
    .navbar .nav-link:hover {
        background: rgba(255,255,255,0.1);
    }
    
    @media (min-width: 992px) {
        .dropdown-hover:hover > .dropdown-menu {
            display: block;
        }
    }
</style>
