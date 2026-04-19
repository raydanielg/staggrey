<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryBorrowing extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'user_id',
        'borrowed_date',
        'due_date',
        'returned_date',
        'renewal_count',
        'fine_amount',
        'status',
        'issued_by',
        'received_by',
        'notes',
    ];

    protected $casts = [
        'borrowed_date' => 'date',
        'due_date' => 'date',
        'returned_date' => 'date',
        'renewal_count' => 'integer',
        'fine_amount' => 'decimal:2',
    ];

    public function book()
    {
        return $this->belongsTo(LibraryBook::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function issuer()
    {
        return $this->belongsTo(User::class, 'issued_by');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'received_by');
    }

    public function getIsOverdueAttribute()
    {
        return $this->status !== 'returned' && now()->gt($this->due_date);
    }

    public function getDaysOverdueAttribute()
    {
        if ($this->is_overdue) {
            return $this->due_date->diffInDays(now());
        }
        return 0;
    }

    public function getDaysRemainingAttribute()
    {
        if ($this->status === 'borrowed' && now()->lt($this->due_date)) {
            return now()->diffInDays($this->due_date);
        }
        return 0;
    }

    public function calculateFine($finePerDay = 500)
    {
        if ($this->is_overdue) {
            return $this->days_overdue * $finePerDay;
        }
        return 0;
    }

    public function scopeOverdue($query)
    {
        return $query->where('status', '!=', 'returned')
                     ->where('due_date', '<', now());
    }

    public function scopeActive($query)
    {
        return $query->whereIn('status', ['borrowed', 'overdue']);
    }
}
