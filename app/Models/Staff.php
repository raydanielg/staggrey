<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    protected $fillable = [
        'user_id',
        'staff_id',
        'designation',
        'department',
        'qualifications',
        'date_of_birth',
        'gender',
        'address',
        'joining_date',
        'salary',
        'contract_type',
        'bio',
        'photo',
        'status',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'joining_date' => 'date',
        'salary' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function timetables()
    {
        return $this->hasMany(Timetable::class, 'staff_id');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'staff_id');
    }

    public function resultsEntered()
    {
        return $this->hasMany(Result::class, 'entered_by');
    }

    public function attendanceMarked()
    {
        return $this->hasMany(Attendance::class, 'marked_by');
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
