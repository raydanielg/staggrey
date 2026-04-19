@extends('layouts.public')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-7 fade-in-up">
                    <h1 class="hero-title">Welcome to<br>St. Aggrey College of Arts</h1>
                    <p class="hero-subtitle mb-4">
                        Empowering minds and shaping futures through quality education. 
                        Join us in Mbeya, Tanzania for an exceptional learning experience.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('public.programs') }}" class="btn btn-primary-blue">
                            <i class="fas fa-book-open me-2"></i>Explore Programs
                        </a>
                        <a href="{{ route('public.application') }}" class="btn btn-outline-blue">
                            <i class="fas fa-paper-plane me-2"></i>Apply Now
                        </a>
                    </div>
                    <div class="mt-5 row g-4">
                        <div class="col-sm-4 text-center">
                            <div class="display-4 fw-bold">{{ $stats['students'] }}+</div>
                            <small>Active Students</small>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="display-4 fw-bold">{{ $stats['programs'] }}+</div>
                            <small>Academic Programs</small>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="display-4 fw-bold">{{ $stats['staff'] }}+</div>
                            <small>Expert Staff</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=500&h=500&fit=crop" 
                         alt="College Campus" 
                         class="img-fluid rounded-4 shadow-lg"
                         style="border: 5px solid rgba(255,255,255,0.2);">
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="py-5">
        <div class="container">
            <div class="section-header">
                <h2>Our Academic Programs</h2>
                <div class="divider"></div>
                <p class="text-muted">Choose from our wide range of certificate and diploma programs</p>
            </div>
            
            <div class="row g-4">
                @foreach($programs as $program)
                <div class="col-md-6 col-lg-4">
                    <div class="program-card h-100">
                        <div class="position-relative">
                            <img src="{{ $program->image ?? 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=400&h=250&fit=crop' }}" 
                                 class="card-img-top" 
                                 alt="{{ $program->name }}"
                                 style="height: 200px; object-fit: cover;">
                            <span class="program-level position-absolute top-0 end-0 m-3">
                                {{ $program->level }}
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="program-title">{{ $program->name }}</h5>
                            <p class="text-muted small">{{ Str::limit($program->description, 100) }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="text-primary fw-bold">
                                    <i class="fas fa-clock me-1"></i>{{ $program->duration_months }} months
                                </span>
                                <a href="{{ route('public.program.show', $program) }}" class="btn btn-sm btn-outline-primary">
                                    Learn More <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('public.programs') }}" class="btn btn-primary-blue">
                    View All Programs <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose SACA?</h2>
                <div class="divider"></div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="stat-box">
                        <div class="stat-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Years of Excellence</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-number">{{ $stats['students'] }}+</div>
                        <div class="stat-label">Active Students</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <div class="stat-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="stat-number">{{ $stats['staff'] }}+</div>
                        <div class="stat-label">Expert Lecturers</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <div class="stat-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="stat-number">{{ $stats['alumni'] }}+</div>
                        <div class="stat-label">Successful Alumni</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="py-5">
        <div class="container">
            <div class="section-header">
                <h2>Latest News & Updates</h2>
                <div class="divider"></div>
            </div>
            
            <div class="row g-4">
                @foreach($latest_news as $news)
                <div class="col-md-6 col-lg-4">
                    <div class="card-blue h-100">
                        <img src="{{ $news->featured_image ?? 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=400&h=250&fit=crop' }}" 
                             class="card-img-top" 
                             alt="{{ $news->title }}"
                             style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">{{ $news->category }}</span>
                            <h5 class="card-title">{{ Str::limit($news->title, 60) }}</h5>
                            <p class="text-muted small">{{ Str::limit($news->excerpt ?? $news->content, 100) }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <small class="text-muted">
                                    <i class="fas fa-calendar me-1"></i>{{ $news->published_at?->format('M d, Y') }}
                                </small>
                                <a href="{{ route('public.news.show', $news) }}" class="btn btn-sm btn-primary">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('public.news') }}" class="btn btn-primary-blue">
                    View All News <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);">
        <div class="container">
            <div class="text-center text-white mb-5">
                <h2 class="fw-bold">Upcoming Events</h2>
                <p class="opacity-75">Join us for exciting academic and cultural events</p>
            </div>
            
            <div class="row g-4">
                @foreach($upcoming_events as $event)
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                        <div class="card-body text-white">
                            <span class="badge bg-warning text-dark mb-2">{{ $event->event_type }}</span>
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="opacity-75 small">{{ Str::limit($event->description, 80) }}</p>
                            <div class="mt-3">
                                <p class="mb-1 small">
                                    <i class="fas fa-calendar me-2"></i>{{ $event->event_date->format('F d, Y') }}
                                </p>
                                <p class="mb-0 small">
                                    <i class="fas fa-map-marker-alt me-2"></i>{{ $event->venue }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('public.events') }}" class="btn btn-outline-light">
                    View All Events <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5">
        <div class="container">
            <div class="card-blue text-center p-5" style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);">
                <h2 class="text-white fw-bold mb-3">Ready to Start Your Journey?</h2>
                <p class="text-white opacity-75 mb-4">
                    Apply now for our certificate and diploma programs. Your future starts here at SACA.
                </p>
                <a href="{{ route('public.application') }}" class="btn btn-primary-blue btn-lg">
                    <i class="fas fa-paper-plane me-2"></i>Apply Online Now
                </a>
            </div>
        </div>
    </section>
@endsection
