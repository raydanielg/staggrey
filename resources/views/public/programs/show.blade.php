@extends('layouts.public')

@section('title', $program->name . ' - SACHS')

@section('content')
<!-- Page Header -->
<section style="background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%); padding: 40px 0;">
    <div class="container">
        <div class="text-center text-lg-start">
            <h1 class="text-white mb-3" style="font-weight: 700;">{{ $program->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 justify-content-center justify-content-lg-start" style="background: transparent;">
                    <li class="breadcrumb-item"><a href="{{ route('landing.home') }}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('public.programs') }}" class="text-white text-decoration-none">Programmes</a></li>
                    <li class="breadcrumb-item text-warning active" aria-current="page">Programme Info</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Programme Details -->
<section class="py-5" style="background: #f8fafc;">
    <div class="container">
        <div class="row g-4">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Programme Overview Card -->
                <div class="card border-0 shadow-sm mb-4" style="border-radius: 0;">
                    <div class="card-header bg-white border-bottom" style="border-bottom-color: #e2e8f0 !important;">
                        <h5 class="mb-0" style="color: #1e3a8a; font-weight: 600;">
                            <i class="fas fa-info-circle me-2" style="color: #f59e0b;"></i>Programme Overview
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center p-3" style="background: #f8fafc; border-radius: 8px;">
                                    <i class="fas fa-book fa-lg me-3" style="color: #1e3a8a;"></i>
                                    <div>
                                        <small class="text-muted d-block">Programme Name</small>
                                        <span class="fw-bold" style="color: #1e3a8a;">{{ $program->name }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center p-3" style="background: #f8fafc; border-radius: 8px;">
                                    <i class="fas fa-code fa-lg me-3" style="color: #1e3a8a;"></i>
                                    <div>
                                        <small class="text-muted d-block">Programme Code</small>
                                        <span class="fw-bold" style="color: #1e3a8a;">{{ $program->code ?? 'SACHS-' . str_pad($program->id, 3, '0', STR_PAD_LEFT) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center p-3" style="background: #f8fafc; border-radius: 8px;">
                                    <i class="fas fa-layer-group fa-lg me-3" style="color: #1e3a8a;"></i>
                                    <div>
                                        <small class="text-muted d-block">NTA Level</small>
                                        <span class="fw-bold" style="color: #1e3a8a;">{{ $program->nta_level ?? '4-6' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center p-3" style="background: #f8fafc; border-radius: 8px;">
                                    <i class="fas fa-clock fa-lg me-3" style="color: #1e3a8a;"></i>
                                    <div>
                                        <small class="text-muted d-block">Duration</small>
                                        <span class="fw-bold" style="color: #1e3a8a;">{{ $program->duration }} Years</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center p-3" style="background: #f8fafc; border-radius: 8px;">
                                    <i class="fas fa-calendar fa-lg me-3" style="color: #1e3a8a;"></i>
                                    <div>
                                        <small class="text-muted d-block">Session</small>
                                        <span class="fw-bold" style="color: #1e3a8a;">{{ $program->study_mode ?? 'Full Time' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center p-3" style="background: #f8fafc; border-radius: 8px;">
                                    <i class="fas fa-building fa-lg me-3" style="color: #1e3a8a;"></i>
                                    <div>
                                        <small class="text-muted d-block">Department</small>
                                        <span class="fw-bold" style="color: #1e3a8a;">{{ $program->department ?? 'Health Sciences' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Entry Requirements -->
                <div class="card border-0 shadow-sm mb-4" style="border-radius: 0;">
                    <div class="card-header bg-white border-bottom" style="border-bottom-color: #e2e8f0 !important;">
                        <h5 class="mb-0" style="color: #1e3a8a; font-weight: 600;">
                            <i class="fas fa-clipboard-list me-2" style="color: #f59e0b;"></i>Entry Requirements
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <h6 class="fw-bold mb-3" style="color: #1e3a8a;">Minimum Admission Qualifications</h6>
                        <p class="text-muted mb-4">
                            Qualified applicants should be holders of one of the following qualifications:
                        </p>
                        
                        <div class="mb-4">
                            <h6 class="fw-bold mb-2" style="color: #dc2626;">a) Advanced Certificate of Secondary Education (ACSEE)</h6>
                            <p class="text-muted mb-0">
                                At least two principal passes in any of the following subjects: Physics, Chemistry, Biology, Mathematics, Geography, or any other science subject with total points not below 4.0.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold mb-2" style="color: #dc2626;">b) Ordinary Diploma (NTA Level 6)</h6>
                            <p class="text-muted mb-0">
                                Holders of Ordinary Diploma in related fields such as Clinical Medicine, Nursing, Pharmaceutical Sciences, Medical Laboratory Sciences, or any other Health Sciences with at least GPA of 3.0.
                            </p>
                        </div>

                        <div class="mb-0">
                            <h6 class="fw-bold mb-2" style="color: #dc2626;">c) Equivalent Qualifications</h6>
                            <p class="text-muted mb-0">
                                Equivalent foreign qualifications as established by either NACTE or relevant authorities. All qualifications must be recognized by the Ministry of Education and Ministry of Health.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Programme Description -->
                <div class="card border-0 shadow-sm mb-4" style="border-radius: 0;">
                    <div class="card-header bg-white border-bottom" style="border-bottom-color: #e2e8f0 !important;">
                        <h5 class="mb-0" style="color: #1e3a8a; font-weight: 600;">
                            <i class="fas fa-file-alt me-2" style="color: #f59e0b;"></i>Programme Description
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <p class="text-muted" style="line-height: 1.8;">
                            {{ $program->description ?? 'This programme provides comprehensive training in ' . $program->name . '. Students will gain both theoretical knowledge and practical skills necessary for professional practice in the healthcare industry. The curriculum is designed to meet NACTE standards and prepares graduates for registration with professional bodies.' }}
                        </p>
                        
                        <h6 class="fw-bold mt-4 mb-3" style="color: #1e3a8a;">Career Opportunities</h6>
                        <ul class="list-unstyled">
                            @if(strpos($program->name, 'Pharmaceutical') !== false)
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Hospital Pharmacist</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Community Pharmacist</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Pharmaceutical Sales Representative</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Drug Quality Control Officer</li>
                            @elseif(strpos($program->name, 'Clinical Medicine') !== false)
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Clinical Officer</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Primary Healthcare Provider</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Emergency Medical Officer</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Public Health Officer</li>
                            @elseif(strpos($program->name, 'Nursing') !== false)
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Registered Nurse</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Midwife</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Community Health Nurse</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Nursing Administrator</li>
                            @elseif(strpos($program->name, 'Laboratory') !== false)
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Medical Laboratory Technician</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Pathology Technician</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Blood Bank Technician</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Research Laboratory Technician</li>
                            @else
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Healthcare Professional</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Hospital Administrator</li>
                                <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #059669;"></i>Public Health Specialist</li>
                            @endif
                        </ul>
                    </div>
                </div>

                <!-- Apply Button -->
                <div class="text-center">
                    <a href="{{ route('public.application') }}" class="btn btn-lg px-5" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; border: none; font-weight: 600;">
                        <i class="fas fa-paper-plane me-2"></i>Apply for This Programme
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Programme Summary -->
                <div class="card border-0 shadow-sm mb-4" style="border-radius: 0; border-top: 3px solid #1e3a8a;">
                    <div class="card-header bg-white border-0">
                        <h5 class="mb-0" style="color: #1e3a8a; font-weight: 600;">Quick Info</h5>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                                <span class="text-muted">Tuition Fee</span>
                                <span class="fw-bold" style="color: #1e3a8a;">{{ number_format($program->tuition_fee ?? 1800000) }} TZS/year</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                                <span class="text-muted">Application Fee</span>
                                <span class="fw-bold" style="color: #1e3a8a;">50,000 TZS</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                                <span class="text-muted">Intake</span>
                                <span class="fw-bold" style="color: #1e3a8a;">October & March</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                                <span class="text-muted">Class Size</span>
                                <span class="fw-bold" style="color: #1e3a8a;">Max 60 Students</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Related Programmes -->
                <div class="card border-0 shadow-sm mb-4" style="border-radius: 0; border-top: 3px solid #f59e0b;">
                    <div class="card-header bg-white border-0">
                        <h5 class="mb-0" style="color: #1e3a8a; font-weight: 600;">Related Programmes</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            @foreach($relatedPrograms ?? [] as $related)
                            <a href="{{ route('public.program.show', $related) }}" class="list-group-item list-group-item-action py-3" style="border: none; color: #1e3a8a;">
                                <i class="fas fa-chevron-right fa-xs me-2" style="color: #f59e0b;"></i>
                                {{ $related->name }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Contact Card -->
                <div class="card border-0 shadow-sm" style="border-radius: 0; background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);">
                    <div class="card-body p-4 text-center text-white">
                        <i class="fas fa-phone-alt fa-2x mb-3" style="color: #fbbf24;"></i>
                        <h6 class="mb-2">Have Questions?</h6>
                        <p class="mb-3" style="font-size: 0.85rem; opacity: 0.9;">Contact our admissions office for more information.</p>
                        <a href="tel:0717327632" class="btn btn-warning btn-sm w-100">
                            <i class="fas fa-phone me-2"></i>0717327632
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
