@extends('layouts.admin')

@section('title', 'Students')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-primary">Student Management</h3>
            <p class="text-muted mb-0">Manage all registered students</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.students.import') }}" class="btn btn-outline-secondary">
                <i class="fas fa-file-import me-2"></i>Bulk Import
            </a>
            <a href="{{ route('admin.students.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Add New Student
            </a>
        </div>
    </div>

    <!-- Filters -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="" method="GET" class="row g-3">
                <div class="col-md-3">
                    <input type="text" name="search" class="form-control" placeholder="Search students...">
                </div>
                <div class="col-md-2">
                    <select name="program" class="form-select">
                        <option value="">All Programs</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="status" class="form-select">
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="completed">Completed</option>
                        <option value="suspended">Suspended</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="semester" class="form-select">
                        <option value="">All Semesters</option>
                        @for($i = 1; $i <= 8; $i++)
                        <option value="{{ $i }}">Semester {{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="fas fa-filter me-2"></i>Filter
                    </button>
                    <button type="reset" class="btn btn-outline-secondary">
                        <i class="fas fa-undo me-2"></i>Reset
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Students Table -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th>#</th>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Program</th>
                            <th>Semester</th>
                            <th>Status</th>
                            <th>Contact</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                        <tr>
                            <td>{{ $loop->iteration + ($students->currentPage() - 1) * $students->perPage() }}</td>
                            <td><span class="badge bg-primary">{{ $student->student_id }}</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $student->photo ? asset('storage/'.$student->photo) : 'https://ui-avatars.com/api/?name='.urlencode($student->user->name).'&background=1e3a8a&color=fff&size=40' }}" 
                                         class="rounded-circle me-2" width="40" height="40" alt="">
                                    <div>
                                        <div class="fw-bold">{{ $student->user->name }}</div>
                                        <small class="text-muted">{{ $student->user->email }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $student->program->name ?? 'N/A' }}</td>
                            <td>Semester {{ $student->current_semester }}</td>
                            <td>
                                <span class="badge bg-{{ $student->enrollment_status == 'active' ? 'success' : ($student->enrollment_status == 'completed' ? 'info' : 'warning') }}">
                                    {{ ucfirst($student->enrollment_status) }}
                                </span>
                            </td>
                            <td>
                                <small><i class="fas fa-phone me-1"></i>{{ $student->user->phone }}</small>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.students.show', $student) }}" class="btn btn-outline-info" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.students.edit', $student) }}" class="btn btn-outline-primary" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.students.destroy', $student) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center py-5 text-muted">
                                <i class="fas fa-users fa-3x mb-3"></i>
                                <p>No students found.</p>
                                <a href="{{ route('admin.students.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus me-2"></i>Add First Student
                                </a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @if($students->hasPages())
        <div class="card-footer">
            {{ $students->links() }}
        </div>
        @endif
    </div>
@endsection
