<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'description',
        'level',
        'duration_months',
        'tuition_fee',
        'registration_fee',
        'exam_fee',
        'image',
        'requirements',
        'syllabus',
        'status',
    ];

    protected $casts = [
        'duration_months' => 'integer',
        'tuition_fee' => 'decimal:2',
        'registration_fee' => 'decimal:2',
        'exam_fee' => 'decimal:2',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function feeStructures()
    {
        return $this->hasMany(FeeStructure::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function getTotalSemestersAttribute()
    {
        return ceil($this->duration_months / 6); // 6 months per semester
    }
}
