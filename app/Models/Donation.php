<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'alumni_id',
        'donor_name',
        'donor_email',
        'donor_phone',
        'amount',
        'currency',
        'payment_method',
        'mobile_money_provider',
        'transaction_id',
        'campaign_name',
        'donation_type',
        'message',
        'status',
        'is_anonymous',
        'donation_date',
        'receipt_number',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'is_anonymous' => 'boolean',
        'donation_date' => 'date',
    ];

    public function alumni()
    {
        return $this->belongsTo(Alumni::class);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeByCampaign($query, $campaign)
    {
        return $query->where('campaign_name', $campaign);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('donation_type', $type);
    }

    public static function getTotalDonations()
    {
        return self::where('status', 'completed')->sum('amount');
    }

    public static function getCampaignTotals()
    {
        return self::select('campaign_name')
            ->selectRaw('SUM(amount) as total')
            ->where('status', 'completed')
            ->groupBy('campaign_name')
            ->get();
    }
}
