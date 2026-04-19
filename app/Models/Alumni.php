<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumni';

    protected $fillable = [
        'user_id',
        'student_id',
        'alumni_id',
        'graduation_date',
        'program_completed',
        'certificate_number',
        'current_employer',
        'job_title',
        'industry',
        'work_location',
        'employment_status',
        'linkedin_profile',
        'success_story',
        'is_mentor',
        'total_donations',
        'status',
    ];

    protected $casts = [
        'graduation_date' => 'date',
        'is_mentor' => 'boolean',
        'total_donations' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    public function getFullNameAttribute()
    {
        return $this->user->name;
    }

    public function getEmailAttribute()
    {
        return $this->user->email;
    }

    public function getPhoneAttribute()
    {
        return $this->user->phone;
    }
}
