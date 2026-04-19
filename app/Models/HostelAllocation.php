<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostelAllocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'hostel_id',
        'room_id',
        'allocation_date',
        'expected_departure_date',
        'actual_departure_date',
        'status',
        'allocated_by',
        'notes',
    ];

    protected $casts = [
        'allocation_date' => 'date',
        'expected_departure_date' => 'date',
        'actual_departure_date' => 'date',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }

    public function room()
    {
        return $this->belongsTo(HostelRoom::class);
    }

    public function allocator()
    {
        return $this->belongsTo(User::class, 'allocated_by');
    }

    public function getDurationDaysAttribute()
    {
        if ($this->actual_departure_date) {
            return $this->allocation_date->diffInDays($this->actual_departure_date);
        }
        return $this->allocation_date->diffInDays(now());
    }
}
