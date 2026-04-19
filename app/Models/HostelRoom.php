<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostelRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'hostel_id',
        'room_number',
        'capacity',
        'floor',
        'room_type',
        'price_per_semester',
        'facilities',
        'status',
    ];

    protected $casts = [
        'capacity' => 'integer',
        'floor' => 'integer',
        'price_per_semester' => 'decimal:2',
    ];

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }

    public function allocations()
    {
        return $this->hasMany(HostelAllocation::class, 'room_id');
    }

    public function currentOccupants()
    {
        return $this->allocations()->where('status', 'active');
    }

    public function getCurrentOccupantsCountAttribute()
    {
        return $this->currentOccupants()->count();
    }

    public function getAvailableSpacesAttribute()
    {
        return $this->capacity - $this->current_occupants_count;
    }

    public function getIsFullAttribute()
    {
        return $this->current_occupants_count >= $this->capacity;
    }
}
