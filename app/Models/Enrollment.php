<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_id',
        'semester',
        'academic_year',
        'status',
        'registered_by',
    ];

    protected $casts = [
        'semester' => 'integer',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function registrar()
    {
        return $this->belongsTo(User::class, 'registered_by');
    }
}
