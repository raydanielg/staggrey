@extends('layouts.landing')

@section('title', 'Home')

@section('content')
    <!-- Hero Section - Image Only -->
    <section style="width: 100%; line-height: 0;">
        <img src="{{ asset('1708099969.jpg') }}" 
             alt="St. Aggrey College of Health Sciences" 
             style="width: 100%; height: auto; display: block;">
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
