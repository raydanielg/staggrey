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
                    <i class="fas fa-phone me-1"></i> +255 000 000 000
                    <span class="mx-2">|</span>
                    <i class="fas fa-envelope me-1"></i> info@saca.ac.tz
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation - ATC Style -->
<nav id="navbar" class="navbar navbar-expand-lg" style="background: linear-gradient(90deg, #1e3a8a 0%, #1e40af 100%); padding: 0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);">
    <div class="container d-flex align-items-center justify-content-center">
        <ul class="navbar-nav align-items-center" style="list-style: none; margin: 0; padding: 0; display: flex;">
            <!-- Logo -->
            <li class="nav-item me-3" style="border-right: 1px solid rgba(255,255,255,0.2);">
                <a href="{{ route('landing.home') }}" class="d-flex align-items-center text-decoration-none px-3 py-2">
                    <img src="https://ui-avatars.com/api/?name=SACA&background=1e3a8a&color=fff&size=40&rounded=true" alt="SACA Logo" style="height: 40px; border-radius: 50%; border: 2px solid rgba(255,255,255,0.3);">
                </a>
            </li>
            
            <!-- Home -->
            <li class="nav-item">
                <a class="nav-link text-white fw-medium py-3 px-3" href="{{ route('landing.home') }}" style="border-right: 1px solid rgba(255,255,255,0.2); transition: all 0.3s;">
                    <i class="fas fa-home me-1"></i> Home
                </a>
            </li>
            
            <!-- About Dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-3" data-bs-toggle="dropdown" style="border-right: 1px solid rgba(255,255,255,0.2);">
                    <span>About</span> <i class="fas fa-chevron-down small ms-1"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark border-0 shadow-lg" style="background: #1e3a8a; min-width: 250px;">
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> About Us</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Organizational Structure</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> SACA Leadership</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Governing Board</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Management Staff</a></li>
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
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Business Studies Department</a>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Information Technology Department</a>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Accounting & Finance Department</a>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Human Resource Department</a>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Library & Information Science</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                                <div class="list-group list-group-flush">
                                    <h6 class="text-warning mb-3 px-2 border-bottom border-secondary pb-2">SACA Centres</h6>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Entrepreneurship Centre</a>
                                    <a href="#" class="list-group-item px-2 py-2 border-0 text-white" style="background: transparent; transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Career Development Centre</a>
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
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-3" data-bs-toggle="dropdown" style="border-right: 1px solid rgba(255,255,255,0.2);">
                    <span>Admission</span> <i class="fas fa-chevron-down small ms-1"></i>
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
            <li class="nav-item dropdown dropdown-hover position-static">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-3" data-bs-toggle="dropdown" style="border-right: 1px solid rgba(255,255,255,0.2);">
                    <span>Students</span> <i class="fas fa-chevron-down small ms-1"></i>
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
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-3" data-bs-toggle="dropdown" style="border-right: 1px solid rgba(255,255,255,0.2);">
                    <span>Staff</span> <i class="fas fa-chevron-down small ms-1"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark border-0 shadow-lg" style="background: #1e3a8a; min-width: 250px;">
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Academic Staff</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Administrative Staff</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Staff Portal</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Staff Mail</a></li>
                </ul>
            </li>
            
            <!-- News -->
            <li class="nav-item">
                <a class="nav-link text-white fw-medium py-3 px-3" href="#" style="border-right: 1px solid rgba(255,255,255,0.2);">
                    News
                </a>
            </li>
            
            <!-- Research Dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-3" data-bs-toggle="dropdown" style="border-right: 1px solid rgba(255,255,255,0.2);">
                    <span>Research</span> <i class="fas fa-chevron-down small ms-1"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark border-0 shadow-lg" style="background: #1e3a8a; min-width: 250px;">
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Research Projects</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Consultancy Services</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Publications</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Partnerships</a></li>
                </ul>
            </li>
            
            <!-- ICT Services Dropdown -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white fw-medium py-3 px-3" data-bs-toggle="dropdown" style="border-right: 1px solid rgba(255,255,255,0.2);">
                    <span>ICT Services</span> <i class="fas fa-chevron-down small ms-1"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark border-0 shadow-lg" style="background: #1e3a8a; min-width: 250px;">
                    <li><a class="dropdown-item text-white py-2" href="#" target="_blank" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Electronic Payments</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" target="_blank" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Staff Mail</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" target="_blank" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Student Portal</a></li>
                    <li><a class="dropdown-item text-white py-2" href="#" target="_blank" style="transition: all 0.3s;"><i class="fas fa-angle-right me-2 small"></i> Online Application</a></li>
                </ul>
            </li>
            
            <!-- Short Courses -->
            <li class="nav-item">
                <a class="nav-link text-warning fw-bold py-3 px-3" href="#" style="border-right: 1px solid rgba(255,255,255,0.2);">
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
