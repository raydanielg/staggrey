<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeStructure extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'semester',
        'tuition_fee',
        'registration_fee',
        'exam_fee',
        'library_fee',
        'activity_fee',
        'hostel_fee',
        'caution_deposit',
        'other_fees',
        'total_fee',
        'academic_year',
    ];

    protected $casts = [
        'semester' => 'integer',
        'tuition_fee' => 'decimal:2',
        'registration_fee' => 'decimal:2',
        'exam_fee' => 'decimal:2',
        'library_fee' => 'decimal:2',
        'activity_fee' => 'decimal:2',
        'hostel_fee' => 'decimal:2',
        'caution_deposit' => 'decimal:2',
        'other_fees' => 'decimal:2',
        'total_fee' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($feeStructure) {
            $feeStructure->total_fee = 
                $feeStructure->tuition_fee +
                $feeStructure->registration_fee +
                $feeStructure->exam_fee +
                $feeStructure->library_fee +
                $feeStructure->activity_fee +
                $feeStructure->hostel_fee +
                $feeStructure->caution_deposit +
                $feeStructure->other_fees;
        });
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
