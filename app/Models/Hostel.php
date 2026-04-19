<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'type',
        'total_rooms',
        'floors',
        'facilities',
        'warden_name',
        'warden_phone',
        'status',
    ];

    protected $casts = [
        'total_rooms' => 'integer',
        'floors' => 'integer',
    ];

    public function rooms()
    {
        return $this->hasMany(HostelRoom::class);
    }

    public function allocations()
    {
        return $this->hasMany(HostelAllocation::class);
    }

    public function getAvailableRoomsCountAttribute()
    {
        return $this->rooms()->where('status', 'available')->count();
    }

    public function getOccupiedRoomsCountAttribute()
    {
        return $this->rooms()->where('status', 'occupied')->count();
    }

    public function getCurrentOccupantsCountAttribute()
    {
        return $this->allocations()->where('status', 'active')->count();
    }

    public function getCapacityAttribute()
    {
        return $this->rooms()->sum('capacity');
    }
}
