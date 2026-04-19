<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visitor;
use Carbon\Carbon;

class VisitorsTableSeeder extends Seeder
{
    public function run()
    {
        // Generate realistic visitor data
        $today = Carbon::today();
        
        // Today: 3386 visitors
        $this->generateVisitors($today, 3386);
        
        // Yesterday: 3730 visitors
        $this->generateVisitors($today->copy()->subDay(), 3730);
        
        // This week (remaining days): ~36873 total
        for ($i = 2; $i < 7; $i++) {
            $date = $today->copy()->subDays($i);
            $count = rand(3500, 4200);
            $this->generateVisitors($date, $count);
        }
        
        // This month (previous weeks): ~94500 total
        for ($i = 7; $i < 30; $i++) {
            $date = $today->copy()->subDays($i);
            $count = rand(2800, 3800);
            $this->generateVisitors($date, $count);
        }
        
        // This year (previous months): ~559839 total
        for ($i = 30; $i < 365; $i++) {
            $date = $today->copy()->subDays($i);
            // Skip some days to make it realistic (not every day has visitors)
            if (rand(1, 10) <= 8) { // 80% chance of having visitors
                $count = rand(1000, 3500);
                $this->generateVisitors($date, $count);
            }
        }
        
        // Older data for total count: ~1381177 total
        for ($i = 365; $i < 730; $i++) {
            $date = $today->copy()->subDays($i);
            if (rand(1, 10) <= 6) { // 60% chance for older data
                $count = rand(500, 2500);
                $this->generateVisitors($date, $count);
            }
        }
    }
    
    private function generateVisitors($date, $count)
    {
        $visitors = [];
        $now = now();
        
        for ($i = 0; $i < $count; $i++) {
            $visitors[] = [
                'ip_address' => '192.168.' . rand(1, 255) . '.' . rand(1, 255),
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
                'visited_at' => $date->copy()->addHours(rand(0, 23))->addMinutes(rand(0, 59)),
                'date' => $date->format('Y-m-d'),
                'created_at' => $now,
                'updated_at' => $now,
            ];
            
            // Insert in batches of 1000 to avoid memory issues
            if (count($visitors) >= 1000) {
                Visitor::insert($visitors);
                $visitors = [];
            }
        }
        
        // Insert remaining visitors
        if (count($visitors) > 0) {
            Visitor::insert($visitors);
        }
    }
}
