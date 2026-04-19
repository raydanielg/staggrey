<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'exam_name',
        'exam_type',
        'semester',
        'academic_year',
        'total_marks',
        'passing_marks',
        'weight_percentage',
        'exam_date',
        'start_time',
        'end_time',
        'venue',
        'status',
        'results_published',
        'published_at',
    ];

    protected $casts = [
        'semester' => 'integer',
        'total_marks' => 'integer',
        'passing_marks' => 'integer',
        'weight_percentage' => 'decimal:2',
        'exam_date' => 'date',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'results_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function getTotalStudentsAttribute()
    {
        return $this->results()->count();
    }

    public function getPassCountAttribute()
    {
        return $this->results()->where('total_score', '>=', $this->passing_marks)->count();
    }

    public function getFailCountAttribute()
    {
        return $this->results()->where('total_score', '<', $this->passing_marks)->count();
    }

    public function getPassRateAttribute()
    {
        $total = $this->total_students;
        return $total > 0 ? round(($this->pass_count / $total) * 100, 2) : 0;
    }
}
