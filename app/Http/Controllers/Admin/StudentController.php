<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Student;
use App\Models\User;
use App\Models\Role;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with(['user', 'program'])->latest()->paginate(20);
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        $programs = Program::where('status', 'active')->get();
        return view('admin.students.create', compact('programs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string',
            'program_id' => 'required|exists:programs,id',
            'gender' => 'required|in:male,female,other',
            'date_of_birth' => 'required|date',
            'address' => 'required|string',
            'emergency_contact_name' => 'required|string',
            'emergency_contact_phone' => 'required|string',
        ]);

        // Create user
        $studentRole = Role::where('slug', 'student')->first();
        $user = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => Hash::make(Str::random(10)),
            'role_id' => $studentRole->id,
            'phone' => $request->phone,
        ]);

        // Generate student ID
        $year = now()->year;
        $count = Student::whereYear('created_at', $year)->count() + 1;
        $studentId = 'ST/' . $year . '/' . str_pad($count, 4, '0', STR_PAD_LEFT);

        // Create student
        $student = Student::create([
            'user_id' => $user->id,
            'student_id' => $studentId,
            'program_id' => $request->program_id,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'emergency_contact_name' => $request->emergency_contact_name,
            'emergency_contact_phone' => $request->emergency_contact_phone,
            'enrollment_date' => now(),
            'academic_year' => Setting::get('academic_year', '2024/2025'),
            'current_semester' => Setting::get('semester', 1),
        ]);

        return redirect()->route('admin.students.index')
            ->with('success', 'Student created successfully.');
    }

    public function show(Student $student)
    {
        $student->load(['user', 'program', 'enrollments.course', 'payments', 'results']);
        return view('admin.students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        $programs = Program::where('status', 'active')->get();
        return view('admin.students.edit', compact('student', 'programs'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'program_id' => 'required|exists:programs,id',
            'enrollment_status' => 'required|in:active,completed,suspended,withdrawn',
            'address' => 'required|string',
            'emergency_contact_name' => 'required|string',
            'emergency_contact_phone' => 'required|string',
        ]);

        $student->update($request->only([
            'program_id', 'enrollment_status', 'address',
            'emergency_contact_name', 'emergency_contact_phone'
        ]));

        // Update user info
        $student->user->update([
            'name' => $request->first_name . ' ' . $request->last_name,
            'phone' => $request->phone,
            'status' => $request->user_status,
        ]);

        return redirect()->route('admin.students.index')
            ->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->user->delete();
        return redirect()->route('admin.students.index')
            ->with('success', 'Student deleted successfully.');
    }

    public function bulkImport(Request $request)
    {
        // Handle Excel/CSV import
        return view('admin.students.import');
    }
}
