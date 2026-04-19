<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'exam_id',
        'course_id',
        'assignment_score',
        'exam_score',
        'total_score',
        'grade',
        'grade_points',
        'remarks',
        'entered_by',
        'entered_at',
        'verified_by',
        'verified_at',
        'is_published',
    ];

    protected $casts = [
        'assignment_score' => 'decimal:2',
        'exam_score' => 'decimal:2',
        'total_score' => 'decimal:2',
        'grade_points' => 'decimal:2',
        'entered_at' => 'datetime',
        'verified_at' => 'datetime',
        'is_published' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($result) {
            if ($result->assignment_score !== null && $result->exam_score !== null) {
                $result->total_score = $result->assignment_score + $result->exam_score;
                $result->calculateGrade();
            }
        });
    }

    public function calculateGrade()
    {
        $score = $this->total_score;

        if ($score >= 80) {
            $this->grade = 'A';
            $this->grade_points = 5.0;
            $this->remarks = 'Distinction';
        } elseif ($score >= 70) {
            $this->grade = 'B+';
            $this->grade_points = 4.0;
            $this->remarks = 'Very Good';
        } elseif ($score >= 60) {
            $this->grade = 'B';
            $this->grade_points = 3.0;
            $this->remarks = 'Good';
        } elseif ($score >= 50) {
            $this->grade = 'C';
            $this->grade_points = 2.0;
            $this->remarks = 'Pass';
        } elseif ($score >= 40) {
            $this->grade = 'D';
            $this->grade_points = 1.0;
            $this->remarks = 'Marginal Pass';
        } else {
            $this->grade = 'F';
            $this->grade_points = 0.0;
            $this->remarks = 'Fail';
        }
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function enteredBy()
    {
        return $this->belongsTo(User::class, 'entered_by');
    }

    public function verifiedBy()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }

    public function getIsPassAttribute()
    {
        return $this->grade !== 'F';
    }
}
