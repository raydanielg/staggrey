@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-primary">Dashboard Overview</h3>
        <span class="text-muted">{{ now()->format('F d, Y') }}</span>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="icon bg-primary bg-opacity-10 text-primary">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div class="number">{{ $stats['total_students'] }}</div>
                <div class="label">Total Students</div>
                <small class="text-success"><i class="fas fa-arrow-up me-1"></i>{{ $stats['active_students'] }} Active</small>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="icon bg-success bg-opacity-10 text-success">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="number">{{ $stats['total_staff'] }}</div>
                <div class="label">Total Staff</div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="icon bg-warning bg-opacity-10 text-warning">
                    <i class="fas fa-users"></i>
                </div>
                <div class="number">{{ $stats['total_alumni'] }}</div>
                <div class="label">Total Alumni</div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="icon bg-info bg-opacity-10 text-info">
                    <i class="fas fa-book"></i>
                </div>
                <div class="number">{{ $stats['total_programs'] }}</div>
                <div class="label">Active Programs</div>
            </div>
        </div>
    </div>

    <!-- More Stats -->
    <div class="row g-4 mb-4">
        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="icon bg-danger bg-opacity-10 text-danger">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="number">{{ $stats['pending_applications'] }}</div>
                <div class="label">Pending Applications</div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="icon bg-primary bg-opacity-10 text-primary">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="number">TZS {{ number_format($stats['monthly_payments'], 0) }}</div>
                <div class="label">This Month Payments</div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="icon bg-success bg-opacity-10 text-success">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="number">TZS {{ number_format($stats['total_donations'], 0) }}</div>
                <div class="label">Total Donations</div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="icon bg-secondary bg-opacity-10 text-secondary">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="number">{{ $stats['total_courses'] }}</div>
                <div class="label">Active Courses</div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="row g-4">
        <!-- Recent Applications -->
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold"><i class="fas fa-file-alt text-primary me-2"></i>Recent Applications</h5>
                    <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @forelse($recent_applications as $application)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">{{ $application->full_name }}</h6>
                                <small class="text-muted">{{ $application->program->name }} • {{ $application->created_at->diffForHumans() }}</small>
                            </div>
                            <span class="badge bg-{{ $application->status == 'pending' ? 'warning' : ($application->status == 'accepted' ? 'success' : 'danger') }}">
                                {{ ucfirst($application->status) }}
                            </span>
                        </div>
                        @empty
                        <div class="list-group-item text-center text-muted py-4">
                            No recent applications
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Payments -->
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold"><i class="fas fa-money-bill-wave text-success me-2"></i>Recent Payments</h5>
                    <a href="#" class="btn btn-sm btn-outline-success">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @forelse($recent_payments as $payment)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">{{ $payment->student->user->name }}</h6>
                                <small class="text-muted">{{ ucfirst($payment->payment_type) }} • {{ $payment->created_at->diffForHumans() }}</small>
                            </div>
                            <span class="badge bg-success">TZS {{ number_format($payment->amount, 0) }}</span>
                        </div>
                        @empty
                        <div class="list-group-item text-center text-muted py-4">
                            No recent payments
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent News -->
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold"><i class="fas fa-newspaper text-info me-2"></i>Recent News</h5>
                    <a href="#" class="btn btn-sm btn-outline-info">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @forelse($recent_news as $news)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">{{ Str::limit($news->title, 40) }}</h6>
                                <small class="text-muted">{{ $news->category }} • {{ $news->created_at->diffForHumans() }}</small>
                            </div>
                            <span class="badge bg-{{ $news->is_published ? 'success' : 'secondary' }}">
                                {{ $news->is_published ? 'Published' : 'Draft' }}
                            </span>
                        </div>
                        @empty
                        <div class="list-group-item text-center text-muted py-4">
                            No recent news
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Events -->
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold"><i class="fas fa-calendar-alt text-warning me-2"></i>Upcoming Events</h5>
                    <a href="#" class="btn btn-sm btn-outline-warning">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @forelse($upcoming_events as $event)
                        <div class="list-group-item">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="mb-1">{{ $event->title }}</h6>
                                    <small class="text-muted">
                                        <i class="fas fa-calendar me-1"></i>{{ $event->event_date->format('M d, Y') }}
                                        <i class="fas fa-map-marker-alt ms-2 me-1"></i>{{ $event->venue }}
                                    </small>
                                </div>
                                <span class="badge bg-primary">{{ ucfirst($event->event_type) }}</span>
                            </div>
                        </div>
                        @empty
                        <div class="list-group-item text-center text-muted py-4">
                            No upcoming events
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
