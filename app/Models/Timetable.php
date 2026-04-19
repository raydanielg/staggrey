<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'staff_id',
        'day',
        'start_time',
        'end_time',
        'venue',
        'semester',
        'academic_year',
        'type',
    ];

    protected $casts = [
        'semester' => 'integer',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function getDurationMinutesAttribute()
    {
        if ($this->start_time && $this->end_time) {
            return $this->start_time->diffInMinutes($this->end_time);
        }
        return 0;
    }
}
