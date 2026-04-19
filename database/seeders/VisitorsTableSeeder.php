<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VisitorsTableSeeder extends Seeder
{
    public function run()
    {
        $today = Carbon::today();
        $now = now();
        
        // Generate summary visitor data instead of individual records
        // This saves memory while still showing realistic stats
        
        // Today: 3386 visitors
        $this->insertVisitorSummary($today, 3386, $now);
        
        // Yesterday: 3730 visitors
        $this->insertVisitorSummary($today->copy()->subDay(), 3730, $now);
        
        // This week (5 days): ~36873 total
        for ($i = 2; $i < 7; $i++) {
            $date = $today->copy()->subDays($i);
            $count = rand(3500, 4200);
            $this->insertVisitorSummary($date, $count, $now);
        }
        
        // This month (23 days): ~94500 total
        for ($i = 7; $i < 30; $i++) {
            $date = $today->copy()->subDays($i);
            $count = rand(2800, 3800);
            $this->insertVisitorSummary($date, $count, $now);
        }
        
        // This year (335 days): ~559839 total (with gaps)
        for ($i = 30; $i < 365; $i += 3) { // Every 3rd day to reduce data
            $date = $today->copy()->subDays($i);
            if (rand(1, 10) <= 8) {
                $count = rand(1000, 3500);
                $this->insertVisitorSummary($date, $count, $now);
            }
        }
        
        // Older data (365 days): ~1381177 total (with gaps)
        for ($i = 365; $i < 730; $i += 5) { // Every 5th day
            $date = $today->copy()->subDays($i);
            if (rand(1, 10) <= 6) {
                $count = rand(500, 2500);
                $this->insertVisitorSummary($date, $count, $now);
            }
        }
    }
    
    private function insertVisitorSummary($date, $count, $now)
    {
        // Insert visitor records in smaller batches
        $batchSize = 500;
        $batches = ceil($count / $batchSize);
        
        for ($b = 0; $b < $batches; $b++) {
            $visitors = [];
            $remaining = min($batchSize, $count - ($b * $batchSize));
            
            for ($i = 0; $i < $remaining; $i++) {
                $visitors[] = [
                    'ip_address' => '192.168.' . rand(1, 255) . '.' . rand(1, 255),
                    'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
                    'visited_at' => $date->copy()->addHours(rand(0, 23))->addMinutes(rand(0, 59)),
                    'date' => $date->format('Y-m-d'),
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }
            
            DB::table('visitors')->insert($visitors);
            
            // Free memory
            unset($visitors);
        }
    }
}
