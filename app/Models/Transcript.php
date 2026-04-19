<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transcript extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'transcript_number',
        'issue_date',
        'status',
        'verified_by',
        'verified_at',
        'requested_by',
        'requested_at',
        'pdf_path',
        'notes',
    ];

    protected $casts = [
        'issue_date' => 'date',
        'verified_at' => 'datetime',
        'requested_at' => 'datetime',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function verifier()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }

    public function requester()
    {
        return $this->belongsTo(User::class, 'requested_by');
    }

    public function getIsVerifiedAttribute()
    {
        return $this->status === 'verified' || $this->status === 'issued';
    }

    public function getIsIssuedAttribute()
    {
        return $this->status === 'issued';
    }

    public function generateTranscriptNumber()
    {
        $year = now()->year;
        $count = self::whereYear('created_at', $year)->count() + 1;
        $this->transcript_number = 'TR/' . $year . '/' . str_pad($count, 5, '0', STR_PAD_LEFT);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($transcript) {
            if (!$transcript->transcript_number) {
                $transcript->generateTranscriptNumber();
            }
        });
    }
}
