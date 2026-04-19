<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'user_agent',
        'visited_at',
        'date',
    ];

    protected $casts = [
        'visited_at' => 'datetime',
    ];

    // Get today's visitors count
    public static function today()
    {
        return self::whereDate('date', today())->count();
    }

    // Get yesterday's visitors count
    public static function yesterday()
    {
        return self::whereDate('date', today()->subDay())->count();
    }

    // Get this week's visitors count
    public static function thisWeek()
    {
        return self::whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()])->count();
    }

    // Get this month's visitors count
    public static function thisMonth()
    {
        return self::whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->count();
    }

    // Get this year's visitors count
    public static function thisYear()
    {
        return self::whereYear('date', now()->year)->count();
    }

    // Get total visitors count
    public static function total()
    {
        return self::count();
    }

    // Track visitor
    public static function track()
    {
        $ip = request()->ip();
        $userAgent = request()->userAgent();
        $today = today();

        // Check if visitor already tracked today
        $exists = self::where('ip_address', $ip)
            ->whereDate('date', $today)
            ->exists();

        if (!$exists) {
            self::create([
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'visited_at' => now(),
                'date' => $today,
            ]);
        }
    }
}
