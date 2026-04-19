<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'event_type',
        'event_date',
        'start_time',
        'end_time',
        'venue',
        'featured_image',
        'audience',
        'requires_registration',
        'max_attendees',
        'is_published',
        'created_by',
    ];

    protected $casts = [
        'event_date' => 'date',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'requires_registration' => 'boolean',
        'max_attendees' => 'integer',
        'is_published' => 'boolean',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function scopeUpcoming($query)
    {
        return $query->where('event_date', '>=', now()->format('Y-m-d'))
                     ->orderBy('event_date', 'asc');
    }

    public function scopePast($query)
    {
        return $query->where('event_date', '<', now()->format('Y-m-d'))
                     ->orderBy('event_date', 'desc');
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('event_type', $type);
    }

    public function getIsUpcomingAttribute()
    {
        return now()->lt($this->event_date);
    }

    public function getFormattedDateAttribute()
    {
        return $this->event_date->format('F d, Y');
    }

    public function getFormattedTimeAttribute()
    {
        if ($this->start_time && $this->end_time) {
            return $this->start_time->format('h:i A') . ' - ' . $this->end_time->format('h:i A');
        }
        return 'All Day';
    }
}
