@extends('layouts.public')

@section('title', 'Programmes - SACHS')

@section('content')
<!-- Page Header -->
<section style="background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%); padding: 40px 0;">
    <div class="container text-center">
        <h1 class="text-white mb-3" style="font-weight: 700;">SACHS Offered Programmes</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0" style="background: transparent;">
                <li class="breadcrumb-item"><a href="{{ route('landing.home') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item text-warning active" aria-current="page">Programmes</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Programmes Section -->
<section class="py-5" style="background: #f8fafc;">
    <div class="container">
        <div class="row g-4">
            <!-- Main Content -->
            <div class="col-lg-9">
                <!-- Programme Tabs -->
                <div class="card border-0 shadow-sm mb-4" style="border-radius: 0;">
                    <div class="card-header bg-white border-0 p-0">
                        <ul class="nav nav-tabs" id="programmeTabs" role="tablist" style="border-bottom: 2px solid #e2e8f0;">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active fw-bold" id="degree-tab" data-bs-toggle="tab" data-bs-target="#degree" type="button" role="tab" style="border: none; border-bottom: 3px solid transparent; color: #1e3a8a; padding: 15px 25px;">
                                    Diploma Programmes
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold" id="certificate-tab" data-bs-toggle="tab" data-bs-target="#certificate" type="button" role="tab" style="border: none; border-bottom: 3px solid transparent; color: #6b7280; padding: 15px 25px;">
                                    Certificate Programmes
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold" id="short-tab" data-bs-toggle="tab" data-bs-target="#short" type="button" role="tab" style="border: none; border-bottom: 3px solid transparent; color: #6b7280; padding: 15px 25px;">
                                        Short Courses
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-4">
                        <!-- Search and Filter -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="small text-muted mb-1">Show entries</label>
                                <select class="form-select form-select-sm" style="width: 80px;">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text bg-white border-end-0">
                                        <i class="fas fa-search text-muted"></i>
                                    </span>
                                    <input type="text" class="form-control border-start-0" placeholder="Search programmes..." id="searchProgrammes">
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="programmeTabContent">
                            <!-- Diploma Programmes -->
                            <div class="tab-pane fade show active" id="degree" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="programmesTable">
                                        <thead style="background: #f1f5f9;">
                                            <tr>
                                                <th style="color: #1e3a8a; font-weight: 600;">Programme Name</th>
                                                <th style="color: #1e3a8a; font-weight: 600; width: 120px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($programs ?? [] as $program)
                                                @if($program->level == 'Diploma')
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-3" style="width: 50px; height: 50px; background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                                                <i class="fas fa-graduation-cap text-white"></i>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1" style="color: #1e3a8a; font-weight: 600;">{{ $program->name }}</h6>
                                                                <small class="text-muted">NTA Level {{ $program->nta_level }} • {{ $program->duration }} Years</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('public.program.show', $program) }}" class="btn btn-sm" style="background: #e0e7ff; color: #1e3a8a; border: none;">
                                                            <i class="fas fa-eye me-1"></i> View Details
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endif
                                            @empty
                                                <tr>
                                                    <td colspan="2" class="text-center py-4">
                                                        <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>
                                                        <p class="text-muted">No diploma programmes available at the moment.</p>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Certificate Programmes -->
                            <div class="tab-pane fade" id="certificate" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead style="background: #f1f5f9;">
                                            <tr>
                                                <th style="color: #1e3a8a; font-weight: 600;">Programme Name</th>
                                                <th style="color: #1e3a8a; font-weight: 600; width: 120px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($programs ?? [] as $program)
                                                @if($program->level == 'Certificate')
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-3" style="width: 50px; height: 50px; background: linear-gradient(135deg, #059669 0%, #10b981 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                                                <i class="fas fa-certificate text-white"></i>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1" style="color: #1e3a8a; font-weight: 600;">{{ $program->name }}</h6>
                                                                <small class="text-muted">NTA Level {{ $program->nta_level }} • {{ $program->duration }} Years</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('public.program.show', $program) }}" class="btn btn-sm" style="background: #e0e7ff; color: #1e3a8a; border: none;">
                                                            <i class="fas fa-eye me-1"></i> View Details
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endif
                                            @empty
                                                <tr>
                                                    <td colspan="2" class="text-center py-4">
                                                        <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>
                                                        <p class="text-muted">No certificate programmes available at the moment.</p>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Short Courses -->
                            <div class="tab-pane fade" id="short" role="tabpanel">
                                <div class="text-center py-5">
                                    <i class="fas fa-clock fa-3x text-muted mb-3"></i>
                                    <h5 class="text-muted">Short Courses Coming Soon</h5>
                                    <p class="text-muted">We are developing exciting short courses in healthcare. Stay tuned!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm" style="border-radius: 0; border-top: 3px solid #1e3a8a;">
                    <div class="card-header bg-white border-0">
                        <h5 class="mb-0" style="color: #1e3a8a; font-weight: 600;">Related Pages</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <a href="{{ route('landing.home') }}" class="list-group-item list-group-item-action py-3" style="border: none; color: #1e3a8a;">
                                <i class="fas fa-chevron-right fa-xs me-2" style="color: #f59e0b;"></i> Programmes Offered
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-3" style="border: none; color: #1e3a8a;">
                                <i class="fas fa-chevron-right fa-xs me-2" style="color: #f59e0b;"></i> Admission Information
                            </a>
                            <a href="{{ route('public.application') }}" class="list-group-item list-group-item-action py-3" style="border: none; color: #1e3a8a;">
                                <i class="fas fa-chevron-right fa-xs me-2" style="color: #f59e0b;"></i> How To Apply
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-3" style="border: none; color: #1e3a8a;">
                                <i class="fas fa-chevron-right fa-xs me-2" style="color: #f59e0b;"></i> Fee Structure
                            </a>
                            <a href="{{ route('public.application') }}" class="list-group-item list-group-item-action py-3" style="border: none; color: #1e3a8a;">
                                <i class="fas fa-chevron-right fa-xs me-2" style="color: #f59e0b;"></i> Online Application System
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Quick Contact -->
                <div class="card border-0 shadow-sm mt-4" style="border-radius: 0; background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);">
                    <div class="card-body p-4 text-center text-white">
                        <i class="fas fa-question-circle fa-2x mb-3" style="color: #fbbf24;"></i>
                        <h6 class="mb-2">Need Help?</h6>
                        <p class="mb-3" style="font-size: 0.85rem; opacity: 0.9;">Contact our admissions office for more information about our programmes.</p>
                        <a href="tel:0717327632" class="btn btn-warning btn-sm w-100">
                            <i class="fas fa-phone me-2"></i>Call Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .nav-tabs .nav-link.active {
        color: #1e3a8a !important;
        border-bottom-color: #1e3a8a !important;
        background: transparent !important;
    }
    .nav-tabs .nav-link:hover {
        border-color: transparent !important;
        color: #1e3a8a !important;
    }
</style>

<script>
    // Simple search functionality
    document.getElementById('searchProgrammes').addEventListener('keyup', function() {
        var value = this.value.toLowerCase();
        var rows = document.querySelectorAll('#programmesTable tbody tr');
        
        rows.forEach(function(row) {
            var text = row.textContent.toLowerCase();
            row.style.display = text.indexOf(value) > -1 ? '' : 'none';
        });
    });
</script>
@endsection
