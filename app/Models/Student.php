<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'student_id',
        'program_id',
        'enrollment_status',
        'academic_year',
        'current_semester',
        'date_of_birth',
        'gender',
        'nationality',
        'id_number',
        'address',
        'emergency_contact_name',
        'emergency_contact_phone',
        'education_background',
        'enrollment_date',
        'expected_graduation_date',
        'actual_graduation_date',
        'photo',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'enrollment_date' => 'date',
        'expected_graduation_date' => 'date',
        'actual_graduation_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function hostelAllocation()
    {
        return $this->hasOne(HostelAllocation::class)->where('status', 'active');
    }

    public function libraryBorrowings()
    {
        return $this->hasMany(LibraryBorrowing::class, 'user_id');
    }

    public function assignmentSubmissions()
    {
        return $this->hasMany(AssignmentSubmission::class);
    }

    public function getFullNameAttribute()
    {
        return $this->user->name;
    }

    public function getFeeBalanceAttribute()
    {
        $totalFees = FeeStructure::where('program_id', $this->program_id)
            ->where('semester', '<=', $this->current_semester)
            ->sum('total_fee');
        
        $totalPayments = $this->payments()->where('status', 'completed')->sum('amount');
        
        return $totalFees - $totalPayments;
    }

    public function getGpaAttribute()
    {
        $results = $this->results()->whereNotNull('grade_points')->get();
        
        if ($results->isEmpty()) {
            return 0;
        }

        $totalPoints = $results->sum('grade_points');
        $totalCourses = $results->count();

        return round($totalPoints / $totalCourses, 2);
    }
}
