@extends('layouts.landing')

@section('title', 'Home')

@section('content')
    <!-- Hero Section for Health Sciences -->
    <section class="hero-section position-relative" style="min-height: 600px; background: linear-gradient(135deg, rgba(30, 58, 138, 0.95) 0%, rgba(37, 99, 235, 0.9) 100%), url('https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=1920&h=800&fit=crop') center/cover no-repeat;">
        <div class="position-absolute w-100 h-100" style="background: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><circle cx=\"50\" cy=\"50\" r=\"40\" fill=\"rgba(255,255,255,0.03)\"/></svg>'); background-size: 150px;"></div>
        
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center" style="min-height: 600px; padding: 80px 0;">
                <div class="col-lg-7 text-white">
                    <div class="mb-3">
                        <span class="badge px-3 py-2" style="background: #f59e0b; color: #1e3a8a; font-size: 0.85rem; font-weight: 600;">
                            <i class="fas fa-certificate me-1"></i> REG/HAS/116 - FULL REGISTRATION
                        </span>
                    </div>
                    
                    <h1 class="display-3 fw-bold mb-4" style="line-height: 1.2; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">
                        Welcome to<br>
                        <span style="color: #fbbf24;">St. Aggrey College</span><br>
                        <span class="fs-2">of Health Sciences</span>
                    </h1>
                    
                    <p class="lead mb-4 opacity-90" style="max-width: 600px;">
                        Excellence in Healthcare Education since 2000. Join us for accredited diploma programmes in 
                        Pharmaceutical Sciences, Clinical Medicine, Nursing & Midwifery, and Medical Laboratory Sciences.
                    </p>
                    
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="#" class="btn btn-lg px-4 py-3 fw-bold" style="background: #f59e0b; color: #1e3a8a; border-radius: 8px; box-shadow: 0 10px 30px rgba(245, 158, 11, 0.4); transition: all 0.3s ease;">
                            <i class="fas fa-paper-plane me-2"></i>APPLY NOW
                        </a>
                        <a href="#" class="btn btn-lg px-4 py-3 fw-bold btn-outline-light" style="border: 2px solid white; border-radius: 8px; transition: all 0.3s ease;">
                            <i class="fas fa-book-open me-2"></i>EXPLORE PROGRAMMES
                        </a>
                    </div>
                    
                    <!-- Stats -->
                    <div class="row g-4 text-center">
                        <div class="col-4">
                            <div class="p-3 rounded" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                                <h3 class="fw-bold mb-1" style="color: #fbbf24;">24+</h3>
                                <small class="opacity-75">Years Experience</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 rounded" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                                <h3 class="fw-bold mb-1" style="color: #fbbf24;">4</h3>
                                <small class="opacity-75">NTA 4-6 Programmes</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 rounded" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                                <h3 class="fw-bold mb-1" style="color: #fbbf24;">1000+</h3>
                                <small class="opacity-75">Graduates</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links Card -->
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="card border-0 shadow-lg" style="background: rgba(255,255,255,0.95); backdrop-filter: blur(20px); border-radius: 20px;">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-4" style="color: #1e3a8a;">
                                <i class="fas fa-bolt me-2 text-warning"></i>QUICK LINKS
                            </h5>
                            
                            <div class="row g-3">
                                <div class="col-6">
                                    <a href="#" class="quick-link-card text-center text-decoration-none p-3 rounded d-block" style="background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%); transition: all 0.3s ease;">
                                        <i class="fas fa-file-alt fa-2x mb-2" style="color: #1e3a8a;"></i>
                                        <small class="d-block fw-semibold" style="color: #1e3a8a;">Apply Online</small>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="quick-link-card text-center text-decoration-none p-3 rounded d-block" style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); transition: all 0.3s ease;">
                                        <i class="fas fa-money-bill-wave fa-2x mb-2" style="color: #d97706;"></i>
                                        <small class="d-block fw-semibold" style="color: #92400e;">Fee Structure</small>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="quick-link-card text-center text-decoration-none p-3 rounded d-block" style="background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%); transition: all 0.3s ease;">
                                        <i class="fas fa-calendar-alt fa-2x mb-2" style="color: #059669;"></i>
                                        <small class="d-block fw-semibold" style="color: #047857;">Academic Calendar</small>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="quick-link-card text-center text-decoration-none p-3 rounded d-block" style="background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 100%); transition: all 0.3s ease;">
                                        <i class="fas fa-clipboard-list fa-2x mb-2" style="color: #db2777;"></i>
                                        <small class="d-block fw-semibold" style="color: #be185d;">Check Results</small>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="quick-link-card text-center text-decoration-none p-3 rounded d-block" style="background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%); transition: all 0.3s ease;">
                                        <i class="fas fa-flask fa-2x mb-2" style="color: #4f46e5;"></i>
                                        <small class="d-block fw-semibold" style="color: #4338ca;">Laboratory</small>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="quick-link-card text-center text-decoration-none p-3 rounded d-block" style="background: linear-gradient(135deg, #fed7aa 0%, #fdba74 100%); transition: all 0.3s ease;">
                                        <i class="fas fa-user-md fa-2x mb-2" style="color: #c2410c;"></i>
                                        <small class="d-block fw-semibold" style="color: #9a3412;">Clinical Skills</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Wave Bottom -->
        <div class="position-absolute bottom-0 w-100" style="height: 60px; overflow: hidden;">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="width: 100%; height: 100%;">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="#f8fafc"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="#f8fafc"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    <!-- Message from Rector Section -->
    @include('landing.partials.message')

    <!-- News, Announcements & Documents Section -->
    @include('landing.partials.news')

    <!-- Call to Action -->
    <section class="py-5" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); position: relative; overflow: hidden;">
        <div class="position-absolute w-100 h-100" style="background: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><circle cx=\"50\" cy=\"50\" r=\"40\" fill=\"rgba(255,255,255,0.1)\"/></svg>'); background-size: 150px;"></div>
        
        <div class="container py-4 position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="fw-bold text-white mb-3">Ready to Start Your Journey?</h2>
                    <p class="text-white opacity-75 mb-0 fs-5">
                        Apply now for our certificate and diploma programmes. Your future starts here at SACA.
                    </p>
                </div>
                <div class="col-lg-4 text-center text-lg-end" data-aos="fade-left">
                    <a href="#" class="btn btn-light btn-lg px-5 fw-bold" style="color: #d97706; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                        <i class="fas fa-paper-plane me-2"></i>APPLY NOW
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
