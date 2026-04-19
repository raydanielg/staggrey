<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'assignment_id',
        'student_id',
        'content',
        'attachment',
        'submitted_at',
        'marks',
        'feedback',
        'graded_by',
        'graded_at',
        'status',
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
        'graded_at' => 'datetime',
        'marks' => 'decimal:2',
    ];

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function gradedBy()
    {
        return $this->belongsTo(User::class, 'graded_by');
    }

    public function getIsLateAttribute()
    {
        return $this->submitted_at && $this->submitted_at->gt($this->assignment->due_date);
    }

    public function getPercentageScoreAttribute()
    {
        if ($this->marks && $this->assignment->total_marks > 0) {
            return round(($this->marks / $this->assignment->total_marks) * 100, 2);
        }
        return 0;
    }

    public function getGradeAttribute()
    {
        $percentage = $this->percentage_score;

        if ($percentage >= 80) return 'A';
        if ($percentage >= 70) return 'B+';
        if ($percentage >= 60) return 'B';
        if ($percentage >= 50) return 'C';
        if ($percentage >= 40) return 'D';
        return 'F';
    }
}
