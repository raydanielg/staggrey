<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'staff_id',
        'title',
        'description',
        'due_date',
        'total_marks',
        'attachment',
        'status',
    ];

    protected $casts = [
        'due_date' => 'date',
        'total_marks' => 'integer',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function submissions()
    {
        return $this->hasMany(AssignmentSubmission::class);
    }

    public function getIsOverdueAttribute()
    {
        return now()->gt($this->due_date);
    }

    public function getDaysRemainingAttribute()
    {
        if (now()->lt($this->due_date)) {
            return now()->diffInDays($this->due_date);
        }
        return 0;
    }

    public function getSubmissionCountAttribute()
    {
        return $this->submissions()->count();
    }

    public function getGradedCountAttribute()
    {
        return $this->submissions()->where('status', 'graded')->count();
    }
}
