<!-- Top Bar - Desktop -->
<div class="top-bar d-none d-lg-block" style="background: linear-gradient(90deg, #1e3a8a 0%, #2563eb 100%); padding: 8px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="d-flex flex-wrap gap-4">
                    <a href="#" class="text-white text-decoration-none d-flex align-items-center" style="opacity: 0.95; font-size: 0.8rem; transition: all 0.3s;">
                        <i class="fas fa-calendar-alt me-2"></i> Academic Calendar
                    </a>
                    <a href="#" class="text-white text-decoration-none d-flex align-items-center" style="opacity: 0.95; font-size: 0.8rem; transition: all 0.3s;">
                        <i class="fas fa-file-alt me-2"></i> Admissions
                    </a>
                    <a href="#" class="text-white text-decoration-none d-flex align-items-center" style="opacity: 0.95; font-size: 0.8rem; transition: all 0.3s;">
                        <i class="fas fa-comments me-2"></i> Feedback
                    </a>
                    <a href="#" class="text-white text-decoration-none d-flex align-items-center" style="opacity: 0.95; font-size: 0.8rem; transition: all 0.3s;">
                        <i class="fas fa-globe me-2"></i> e-Services
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="d-flex justify-content-lg-end gap-3">
                    <a href="tel:0717327632" class="text-white text-decoration-none d-flex align-items-center" style="opacity: 0.95; font-size: 0.8rem; transition: all 0.3s;">
                        <i class="fas fa-phone-alt me-2 text-warning"></i> 0717327632
                    </a>
                    <a href="mailto:staggreyhealth@gmail.com" class="text-white text-decoration-none d-flex align-items-center" style="opacity: 0.95; font-size: 0.8rem; transition: all 0.3s;">
                        <i class="fas fa-envelope me-2 text-warning"></i> staggreyhealth@gmail.com
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Top Bar - Tablet -->
<div class="d-none d-md-block d-lg-none" style="background: linear-gradient(90deg, #1e3a8a 0%, #2563eb 100%); padding: 6px 0;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex gap-3">
                <a href="#" class="text-white text-decoration-none" style="font-size: 0.75rem;">
                    <i class="fas fa-calendar-alt"></i> Calendar
                </a>
                <a href="#" class="text-white text-decoration-none" style="font-size: 0.75rem;">
                    <i class="fas fa-file-alt"></i> Admissions
                </a>
            </div>
            <div class="d-flex gap-3">
                <a href="tel:0717327632" class="text-white text-decoration-none" style="font-size: 0.75rem;">
                    <i class="fas fa-phone-alt text-warning"></i> 0717327632
                </a>
                <a href="mailto:staggreyhealth@gmail.com" class="text-white text-decoration-none" style="font-size: 0.75rem;">
                    <i class="fas fa-envelope text-warning"></i> Email
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Top Bar - Mobile (Blue Bar with Phone & Login) -->
<div class="d-md-none" style="background: linear-gradient(90deg, #1e3a8a 0%, #2563eb 100%); padding: 10px 0;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <!-- Left: Phone Number -->
            <a href="tel:0717327632" class="text-white text-decoration-none d-flex align-items-center" style="font-size: 0.85rem; font-weight: 500;">
                <i class="fas fa-phone-alt me-2"></i>
                <span>0717327632</span>
            </a>
            
            <!-- Right: Login Button -->
            <a href="{{ route('login') }}" class="btn btn-sm text-white fw-bold d-flex align-items-center" style="background: rgba(255,255,255,0.2); border: 1px solid rgba(255,255,255,0.3); font-size: 0.8rem; padding: 6px 12px; border-radius: 20px;">
                <i class="fas fa-sign-in-alt me-2"></i> LOGIN
            </a>
        </div>
    </div>
</div>

<!-- Government Header - Responsive -->
<div class="gov-header" style="background: #ffffff; border-bottom: 3px solid #f59e0b;">
    <div class="container py-2 py-md-3">
        <div class="row align-items-center justify-content-between">
            
            <!-- Mobile: Government Title + Emblem (Like EMaS Design) -->
            <div class="col-12 d-lg-none">
                <!-- Row 1: Government Title & Emblem -->
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <!-- Left: SACHS Logo -->
                    <div class="d-flex align-items-center">
                        <div style="width: 45px; height: 45px; background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-user-md text-white" style="font-size: 1.5rem;"></i>
                        </div>
                    </div>
                    
                    <!-- Center: Government Title -->
                    <div class="text-center flex-grow-1 px-2">
                        <div style="color: #dc2626; font-weight: 700; font-size: 0.7rem; letter-spacing: 1px;">JAMHURI YA MUUNGANO WA TANZANIA</div>
                        <div style="color: #4b5563; font-weight: 600; font-size: 0.65rem;">WIZARA YA AFYA</div>
                        <div style="color: #1e3a8a; font-weight: 800; font-size: 0.85rem; margin-top: 2px;">ST. AGGREY COLLEGE</div>
                        <div style="color: #1e3a8a; font-weight: 800; font-size: 0.85rem;">OF HEALTH SCIENCES</div>
                    </div>
                    
                    <!-- Right: Emblem -->
                    <img src="{{ asset('emblem.png') }}" alt="Tanzania" style="height: 50px; width: auto;">
                </div>
                
                <!-- Row 2: Hamburger Menu Bar -->
                <div class="d-flex align-items-center" style="background: #f8fafc; margin: 0 -12px; padding: 8px 12px; border-top: 1px solid #e5e7eb;">
                    <button class="btn btn-link text-decoration-none p-0 d-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar" style="color: #1e3a8a;">
                        <div style="background: #1e3a8a; padding: 8px 10px; border-radius: 4px;">
                            <i class="fas fa-bars text-white"></i>
                        </div>
                        <span class="ms-2 fw-bold" style="color: #1e3a8a; font-size: 0.9rem;">MENU</span>
                    </button>
                    
                    <div class="ms-auto">
                        <span class="badge" style="background: #f59e0b; color: #1e3a8a; font-size: 0.7rem;">REG/HAS/116</span>
                    </div>
                </div>
            </div>
            
            <!-- Desktop: Full Header -->
            <!-- Left: SACHS Logo -->
            <div class="col-lg-2 col-md-3 d-none d-lg-block text-center text-md-start">
                <a href="{{ route('landing.home') }}" class="text-decoration-none d-inline-block">
                    <div class="d-flex flex-column align-items-center align-items-md-start">
                        <div class="logo-box" style="width: 70px; height: 70px; background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 12px rgba(30, 58, 138, 0.3);">
                            <i class="fas fa-user-md text-white" style="font-size: 2rem;"></i>
                        </div>
                        <div class="mt-2 text-center text-md-start">
                            <h5 class="mb-0 fw-bold" style="color: #1e3a8a; font-size: 1.1rem; letter-spacing: 1px;">SACHS</h5>
                            <small class="text-muted" style="font-size: 0.65rem;">St. Aggrey College</small>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Center: Government Title -->
            <div class="col-lg-7 col-md-6 d-none d-lg-block text-center">
                <div class="gov-title" style="line-height: 1.3;">
                    <div style="color: #dc2626; font-weight: 700; font-size: 0.8rem; letter-spacing: 2px; text-transform: uppercase;">
                        UNITED REPUBLIC OF TANZANIA
                    </div>
                    <div style="color: #4b5563; font-weight: 600; font-size: 0.75rem;">
                        Ministry of Health
                    </div>
                    <div style="color: #1e3a8a; font-weight: 800; font-size: 1.1rem; margin-top: 4px; letter-spacing: 0.5px;">
                        ST. AGGREY COLLEGE OF HEALTH SCIENCES
                    </div>
                    <div style="color: #6b7280; font-size: 0.7rem; margin-top: 3px;">
                        <span style="color: #f59e0b; font-weight: 600;">Registration No: REG/HAS/116</span> | P.O. Box 2954, Mbeya
                    </div>
                </div>
            </div>
            
            <!-- Right: Coat of Arms -->
            <div class="col-lg-2 col-md-3 d-none d-lg-block text-center text-md-end">
                <div class="d-flex flex-column align-items-center align-items-md-end">
                    <img src="{{ asset('emblem.png') }}" 
                         alt="Tanzania Coat of Arms" 
                         style="height: 85px; width: auto; filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));">
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
            <li class="nav-item dropdown dropdown-hover position-static" style="border-right: 1px solid rgba(255,255,255,0.15);">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-4 d-flex align-items-center h-100" data-bs-toggle="dropdown" style="white-space: nowrap;">
                    Academics <i class="fas fa-chevron-down small ms-2"></i>
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
            
        </ul>
    </div>
</nav>

<!-- Mobile Sidebar Offcanvas -->
<div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel" style="width: 300px; background: linear-gradient(180deg, #1e3a8a 0%, #1e40af 100%);">
    <div class="offcanvas-header border-bottom border-secondary">
        <div class="d-flex align-items-center">
            <img src="{{ asset('emblem.png') }}" alt="Tanzania" style="height: 40px; margin-right: 10px;">
            <div>
                <h5 class="offcanvas-title text-white mb-0" id="mobileSidebarLabel" style="font-size: 0.9rem;">SACHS</h5>
                <small class="text-warning" style="font-size: 0.65rem;">St. Aggrey College of Health Sciences</small>
            </div>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div class="sidebar-nav">
            <!-- Main Menu -->
            <a href="{{ route('landing.home') }}" class="sidebar-link d-flex align-items-center text-decoration-none text-white py-3 px-3 border-bottom border-secondary" style="transition: all 0.3s;">
                <i class="fas fa-home me-3" style="width: 20px;"></i>
                <span>Home</span>
            </a>
            
            <!-- About -->
            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white py-3 px-3 border-bottom border-secondary" style="transition: all 0.3s;">
                <i class="fas fa-info-circle me-3" style="width: 20px;"></i>
                <span>About Us</span>
            </a>
            
            <!-- Academics -->
            <div class="accordion accordion-flush" id="academicsAccordion">
                <div class="accordion-item bg-transparent border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-transparent text-white py-3 px-3 border-bottom border-secondary shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#academicsMenu" style="transition: all 0.3s;">
                            <i class="fas fa-book me-3" style="width: 20px;"></i>
                            <span>Academics</span>
                        </button>
                    </h2>
                    <div id="academicsMenu" class="accordion-collapse collapse" data-bs-parent="#academicsAccordion">
                        <div class="accordion-body p-0 ps-4">
                            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white-50 py-2 px-3" style="font-size: 0.85rem;">
                                <i class="fas fa-pills me-2 small"></i> Pharmaceutical Sciences
                            </a>
                            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white-50 py-2 px-3" style="font-size: 0.85rem;">
                                <i class="fas fa-user-md me-2 small"></i> Clinical Medicine
                            </a>
                            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white-50 py-2 px-3" style="font-size: 0.85rem;">
                                <i class="fas fa-heartbeat me-2 small"></i> Nursing & Midwifery
                            </a>
                            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white-50 py-2 px-3" style="font-size: 0.85rem;">
                                <i class="fas fa-microscope me-2 small"></i> Medical Laboratory
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Admission -->
            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white py-3 px-3 border-bottom border-secondary" style="transition: all 0.3s;">
                <i class="fas fa-file-alt me-3" style="width: 20px;"></i>
                <span>Admission</span>
            </a>
            
            <!-- Students -->
            <div class="accordion accordion-flush" id="studentsAccordion">
                <div class="accordion-item bg-transparent border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-transparent text-white py-3 px-3 border-bottom border-secondary shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#studentsMenu" style="transition: all 0.3s;">
                            <i class="fas fa-users me-3" style="width: 20px;"></i>
                            <span>Students</span>
                        </button>
                    </h2>
                    <div id="studentsMenu" class="accordion-collapse collapse" data-bs-parent="#studentsAccordion">
                        <div class="accordion-body p-0 ps-4">
                            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white-50 py-2 px-3" style="font-size: 0.85rem;">
                                <i class="fas fa-angle-right me-2 small"></i> Dean of Students
                            </a>
                            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white-50 py-2 px-3" style="font-size: 0.85rem;">
                                <i class="fas fa-angle-right me-2 small"></i> Student Services
                            </a>
                            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white-50 py-2 px-3" style="font-size: 0.85rem;">
                                <i class="fas fa-angle-right me-2 small"></i> Library
                            </a>
                            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white-50 py-2 px-3" style="font-size: 0.85rem;">
                                <i class="fas fa-angle-right me-2 small"></i> Health Centre
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Staff -->
            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white py-3 px-3 border-bottom border-secondary" style="transition: all 0.3s;">
                <i class="fas fa-chalkboard-teacher me-3" style="width: 20px;"></i>
                <span>Staff</span>
            </a>
            
            <!-- News -->
            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white py-3 px-3 border-bottom border-secondary" style="transition: all 0.3s;">
                <i class="fas fa-newspaper me-3" style="width: 20px;"></i>
                <span>News</span>
            </a>
            
            <!-- Research -->
            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white py-3 px-3 border-bottom border-secondary" style="transition: all 0.3s;">
                <i class="fas fa-flask me-3" style="width: 20px;"></i>
                <span>Research</span>
            </a>
            
            <!-- ICT Services -->
            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-white py-3 px-3 border-bottom border-secondary" style="transition: all 0.3s;">
                <i class="fas fa-laptop me-3" style="width: 20px;"></i>
                <span>ICT Services</span>
            </a>
            
            <!-- Short Courses -->
            <a href="#" class="sidebar-link d-flex align-items-center text-decoration-none text-warning py-3 px-3 border-bottom border-secondary" style="transition: all 0.3s;">
                <i class="fas fa-star me-3" style="width: 20px;"></i>
                <span class="fw-bold">Short-Courses</span>
            </a>
            
            <!-- Contact Info -->
            <div class="mt-4 px-3">
                <h6 class="text-warning mb-3" style="font-size: 0.8rem;">Contact Us</h6>
                <div class="text-white-50" style="font-size: 0.75rem;">
                    <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i> P.O. Box 2954, Mbeya</p>
                    <p class="mb-1"><i class="fas fa-phone me-2"></i> 0717327632</p>
                    <p class="mb-1"><i class="fas fa-envelope me-2"></i> staggreyhealth@gmail.com</p>
                </div>
            </div>
            
            <!-- Login Button -->
            <div class="mt-4 px-3 pb-4">
                <a href="{{ route('login') }}" class="btn btn-warning w-100 fw-bold py-2">
                    <i class="fas fa-sign-in-alt me-2"></i> LOGIN
                </a>
            </div>
        </div>
    </div>
</div>

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
    
    /* Sidebar Navigation Styles */
    .sidebar-link {
        transition: all 0.3s ease;
    }
    
    .sidebar-link:hover {
        background: rgba(255,255,255,0.1) !important;
        padding-left: 1.5rem !important;
    }
    
    .sidebar-link:active {
        background: rgba(255,255,255,0.2) !important;
    }
    
    /* Accordion in Sidebar */
    .sidebar-nav .accordion-button::after {
        filter: invert(1);
    }
    
    .sidebar-nav .accordion-button:not(.collapsed) {
        background: rgba(255,255,255,0.1) !important;
    }
    
    .sidebar-nav .accordion-button:hover {
        background: rgba(255,255,255,0.15) !important;
    }
    
    /* Offcanvas Animation */
    .offcanvas {
        transition: transform 0.3s ease-in-out;
    }
    
    /* Mobile Header Compact */
    @media (max-width: 991px) {
        .gov-header {
            padding: 8px 0;
        }
        
        .logo-box {
            width: 50px !important;
            height: 50px !important;
        }
        
        .logo-box i {
            font-size: 1.5rem !important;
        }
    }
    
    /* Top Bar Hover Effects */
    .top-bar a:hover {
        opacity: 1 !important;
        transform: translateY(-1px);
    }
    
    .top-bar a:active {
        transform: translateY(0);
    }
</style>
