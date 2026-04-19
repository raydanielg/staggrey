@extends('layouts.landing')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    @include('landing.partials.hero')

    <!-- Programs Section -->
    <section class="py-5" style="background: white;">
        <div class="container py-5">
            <div class="text-center" data-aos="fade-up">
                <div class="section-title">
                    <h2>Our Academic Programmes</h2>
                </div>
                <p class="text-muted mb-5">Choose from our wide range of certificate and diploma programmes</p>
            </div>
            
            <div class="row g-4">
                <!-- Certificate in Business Management -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm card-hover" style="border-radius: 15px; overflow: hidden;">
                        <div style="height: 200px; background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-briefcase fa-4x text-white opacity-75"></i>
                        </div>
                        <div class="card-body p-4">
                            <span class="badge mb-2" style="background: #dbeafe; color: #1e3a8a;">Certificate</span>
                            <h5 class="fw-bold mb-3" style="color: #1e3a8a;">Business Management</h5>
                            <p class="text-muted small mb-3">Learn fundamentals of business administration, marketing, and entrepreneurship.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold" style="color: #f59e0b;">12 Months</span>
                                <a href="#" class="btn btn-sm" style="background: #1e3a8a; color: white;">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Certificate in IT -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm card-hover" style="border-radius: 15px; overflow: hidden;">
                        <div style="height: 200px; background: linear-gradient(135deg, #059669 0%, #10b981 100%); display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-laptop-code fa-4x text-white opacity-75"></i>
                        </div>
                        <div class="card-body p-4">
                            <span class="badge mb-2" style="background: #d1fae5; color: #059669;">Certificate</span>
                            <h5 class="fw-bold mb-3" style="color: #1e3a8a;">Information Technology</h5>
                            <p class="text-muted small mb-3">Learn programming, networking, web development, and software applications.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold" style="color: #f59e0b;">12 Months</span>
                                <a href="#" class="btn btn-sm" style="background: #1e3a8a; color: white;">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Diploma in Business Management -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm card-hover" style="border-radius: 15px; overflow: hidden;">
                        <div style="height: 200px; background: linear-gradient(135deg, #7c3aed 0%, #8b5cf6 100%); display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-chart-line fa-4x text-white opacity-75"></i>
                        </div>
                        <div class="card-body p-4">
                            <span class="badge mb-2" style="background: #ede9fe; color: #7c3aed;">Diploma</span>
                            <h5 class="fw-bold mb-3" style="color: #1e3a8a;">Business Management</h5>
                            <p class="text-muted small mb-3">Advanced studies in strategic management, finance, HR, and operations.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold" style="color: #f59e0b;">24 Months</span>
                                <a href="#" class="btn btn-sm" style="background: #1e3a8a; color: white;">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="#" class="btn btn-outline-gold btn-lg">
                    View All Programmes <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%); position: relative; overflow: hidden;">
        <div class="position-absolute w-100 h-100" style="background: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><circle cx=\"50\" cy=\"50\" r=\"40\" fill=\"rgba(255,255,255,0.05)\"/></svg>'); background-size: 150px;"></div>
        
        <div class="container py-4 position-relative">
            <div class="row g-4 text-center text-white">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-3">
                        <div class="display-4 fw-bold mb-2" style="color: #fbbf24;">15+</div>
                        <p class="opacity-75 mb-0">Years of Excellence</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-3">
                        <div class="display-4 fw-bold mb-2" style="color: #fbbf24;">500+</div>
                        <p class="opacity-75 mb-0">Active Students</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-3">
                        <div class="display-4 fw-bold mb-2" style="color: #fbbf24;">30+</div>
                        <p class="opacity-75 mb-0">Expert Staff</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-3">
                        <div class="display-4 fw-bold mb-2" style="color: #fbbf24;">2000+</div>
                        <p class="opacity-75 mb-0">Successful Alumni</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5" style="background: #f8fafc;">
        <div class="container py-5">
            <div class="text-center" data-aos="fade-up">
                <div class="section-title">
                    <h2>Why Choose SACA?</h2>
                </div>
            </div>
            
            <div class="row g-4 mt-3">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm p-4 card-hover" style="border-radius: 15px;">
                        <div class="mb-3">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-certificate fa-2x" style="color: #1e3a8a;"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: #1e3a8a;">Accredited Programs</h5>
                        <p class="text-muted mb-0">All our programs are fully accredited and recognized by the relevant education authorities in Tanzania.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm p-4 card-hover" style="border-radius: 15px;">
                        <div class="mb-3">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-chalkboard-teacher fa-2x" style="color: #d97706;"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: #1e3a8a;">Expert Faculty</h5>
                        <p class="text-muted mb-0">Learn from experienced lecturers with industry experience and advanced academic qualifications.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm p-4 card-hover" style="border-radius: 15px;">
                        <div class="mb-3">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-briefcase fa-2x" style="color: #059669;"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: #1e3a8a;">Industry Connections</h5>
                        <p class="text-muted mb-0">Strong partnerships with local businesses for internships, practical training, and job placements.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 border-0 shadow-sm p-4 card-hover" style="border-radius: 15px;">
                        <div class="mb-3">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-laptop fa-2x" style="color: #db2777;"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: #1e3a8a;">Modern Facilities</h5>
                        <p class="text-muted mb-0">State-of-the-art computer labs, library with digital resources, and comfortable learning spaces.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="card h-100 border-0 shadow-sm p-4 card-hover" style="border-radius: 15px;">
                        <div class="mb-3">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-dollar-sign fa-2x" style="color: #4f46e5;"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: #1e3a8a;">Affordable Fees</h5>
                        <p class="text-muted mb-0">Quality education at competitive rates with flexible payment options for all students.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="card h-100 border-0 shadow-sm p-4 card-hover" style="border-radius: 15px;">
                        <div class="mb-3">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #fed7aa 0%, #fdba74 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-users fa-2x" style="color: #c2410c;"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: #1e3a8a;">Vibrant Community</h5>
                        <p class="text-muted mb-0">Join a diverse community of learners with cultural events, sports, and student organizations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
