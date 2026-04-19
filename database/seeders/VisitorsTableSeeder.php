<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VisitorsTableSeeder extends Seeder
{
    public function run()
    {
        $now = now();
        
        // Insert sample visitor counts directly as summary data
        $visitorStats = [
            ['date' => Carbon::today(), 'count' => 3386],
            ['date' => Carbon::today()->subDay(), 'count' => 3730],
            ['date' => Carbon::today()->subDays(2), 'count' => 3890],
            ['date' => Carbon::today()->subDays(3), 'count' => 4120],
            ['date' => Carbon::today()->subDays(4), 'count' => 3950],
            ['date' => Carbon::today()->subDays(5), 'count' => 4210],
            ['date' => Carbon::today()->subDays(6), 'count' => 3627],
        ];
        
        foreach ($visitorStats as $stat) {
            $visitors = [];
            
            // Limit to 100 records per day to save memory
            $actualCount = min($stat['count'], 100);
            
            for ($i = 0; $i < $actualCount; $i++) {
                $visitors[] = [
                    'ip_address' => '192.168.' . rand(1, 255) . '.' . rand(1, 255),
                    'user_agent' => 'Mozilla/5.0',
                    'visited_at' => $stat['date']->copy()->addHours(rand(0, 23)),
                    'date' => $stat['date']->format('Y-m-d'),
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }
            
            if (count($visitors) > 0) {
                DB::table('visitors')->insert($visitors);
            }
            unset($visitors);
        }
        
        // Add some older data for historical stats
        for ($i = 7; $i < 100; $i += 5) {
            $date = Carbon::today()->subDays($i);
            $count = min(rand(50, 200), 50); // Limit records
            
            $visitors = [];
            for ($j = 0; $j < $count; $j++) {
                $visitors[] = [
                    'ip_address' => '192.168.' . rand(1, 255) . '.' . rand(1, 255),
                    'user_agent' => 'Mozilla/5.0',
                    'visited_at' => $date->copy()->addHours(rand(0, 23)),
                    'date' => $date->format('Y-m-d'),
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }
            
            if (count($visitors) > 0) {
                DB::table('visitors')->insert($visitors);
            }
            unset($visitors);
        }
    }
}
