@extends('layouts.public')

@section('title', 'Online Application')

@section('content')
    <!-- Page Header -->
    <section style="background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-blue-dark) 100%); padding: 60px 0;">
        <div class="container text-center text-white">
            <h1 class="fw-bold mb-3">Online Application</h1>
            <p class="lead opacity-75">Apply for your desired program at St. Aggrey College of Arts</p>
        </div>
    </section>

    <!-- Application Form -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card-blue">
                        <div class="card-header">
                            <h4 class="mb-0"><i class="fas fa-edit me-2"></i>Application Form</h4>
                        </div>
                        <div class="card-body p-4">
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <form action="{{ route('public.application.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- Program Selection -->
                                <div class="mb-4">
                                    <h5 class="text-primary mb-3">1. Program Selection</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-bold">Select Program <span class="text-danger">*</span></label>
                                            <select name="program_id" class="form-select form-select-lg @error('program_id') is-invalid @enderror" required>
                                                <option value="">-- Choose a Program --</option>
                                                @foreach($programs as $program)
                                                <option value="{{ $program->id }}" {{ old('program_id') == $program->id ? 'selected' : '' }}>
                                                    {{ $program->name }} ({{ ucfirst($program->level) }})
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('program_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle me-2"></i>
                                        <strong>Application Fee:</strong> TZS {{ number_format($applicationFee) }} (to be paid after acceptance)
                                    </div>
                                </div>

                                <hr class="my-4">

                                <!-- Personal Information -->
                                <div class="mb-4">
                                    <h5 class="text-primary mb-3">2. Personal Information</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                                            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" 
                                                   value="{{ old('first_name') }}" required>
                                            @error('first_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Middle Name</label>
                                            <input type="text" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" 
                                                   value="{{ old('middle_name') }}">
                                            @error('middle_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" 
                                                   value="{{ old('last_name') }}" required>
                                            @error('last_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                            <input type="date" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" 
                                                   value="{{ old('date_of_birth') }}" required>
                                            @error('date_of_birth')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Gender <span class="text-danger">*</span></label>
                                            <select name="gender" class="form-select @error('gender') is-invalid @enderror" required>
                                                <option value="">-- Select --</option>
                                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                            </select>
                                            @error('gender')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Nationality <span class="text-danger">*</span></label>
                                            <input type="text" name="nationality" class="form-control @error('nationality') is-invalid @enderror" 
                                                   value="{{ old('nationality', 'Tanzanian') }}" required>
                                            @error('nationality')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <!-- Contact Information -->
                                <div class="mb-4">
                                    <h5 class="text-primary mb-3">3. Contact Information</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                                                   value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                            <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" 
                                                   value="{{ old('phone') }}" placeholder="+255 XXX XXX XXX" required>
                                            @error('phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Physical Address <span class="text-danger">*</span></label>
                                            <textarea name="address" class="form-control @error('address') is-invalid @enderror" 
                                                      rows="2" required>{{ old('address') }}</textarea>
                                            @error('address')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">ID/Passport Number (Optional)</label>
                                            <input type="text" name="id_number" class="form-control @error('id_number') is-invalid @enderror" 
                                                   value="{{ old('id_number') }}">
                                            @error('id_number')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <!-- Education Background -->
                                <div class="mb-4">
                                    <h5 class="text-primary mb-3">4. Education Background</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Previous School/Institution <span class="text-danger">*</span></label>
                                            <input type="text" name="previous_school" class="form-control @error('previous_school') is-invalid @enderror" 
                                                   value="{{ old('previous_school') }}" required>
                                            @error('previous_school')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Education Qualifications <span class="text-danger">*</span></label>
                                            <textarea name="education_background" class="form-control @error('education_background') is-invalid @enderror" 
                                                      rows="3" placeholder="E.g., CSEE with Division II, ACSEE with Division III, etc." required>{{ old('education_background') }}</textarea>
                                            @error('education_background')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <!-- Documents Upload -->
                                <div class="mb-4">
                                    <h5 class="text-primary mb-3">5. Supporting Documents</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Certificate/Transcript (PDF, JPG, PNG)</label>
                                            <input type="file" name="certificate_attachment" class="form-control @error('certificate_attachment') is-invalid @enderror" 
                                                   accept=".pdf,.jpg,.jpeg,.png">
                                            <small class="text-muted">Maximum file size: 2MB</small>
                                            @error('certificate_attachment')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Passport Photo</label>
                                            <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" 
                                                   accept="image/*">
                                            <small class="text-muted">Maximum file size: 1MB</small>
                                            @error('photo')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <!-- Terms and Conditions -->
                                <div class="mb-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="agree_terms" class="form-check-input @error('agree_terms') is-invalid @enderror" 
                                               id="agree_terms" {{ old('agree_terms') ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="agree_terms">
                                            I agree that the information provided is accurate and complete. 
                                            I understand that providing false information may result in rejection of my application. <span class="text-danger">*</span>
                                        </label>
                                        @error('agree_terms')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="reset" class="btn btn-outline-secondary btn-lg">
                                        <i class="fas fa-undo me-2"></i>Reset
                                    </button>
                                    <button type="submit" class="btn btn-primary-blue btn-lg">
                                        <i class="fas fa-paper-plane me-2"></i>Submit Application
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Status Check -->
    <section class="py-5" style="background: #f8fafc;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card-blue text-center p-4">
                        <h5 class="text-primary mb-3">Already Applied?</h5>
                        <p class="text-muted mb-4">Check your application status using your application number</p>
                        <form action="{{ route('public.application.status.check') }}" method="POST" class="d-flex gap-2">
                            @csrf
                            <input type="text" name="application_number" class="form-control" 
                                   placeholder="Enter Application Number (e.g., APP/2024/00001)" required>
                            <button type="submit" class="btn btn-primary-blue">
                                <i class="fas fa-search me-2"></i>Check
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
