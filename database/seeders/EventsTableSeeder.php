<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\User;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        $admin = User::whereHas('role', function($q) {
            $q->where('slug', 'admin');
        })->first();

        $events = [
            [
                'title' => 'Orientation Day 2024',
                'description' => 'Welcome event for all new students joining St. Aggrey College. Includes campus tour, introduction to college services, and meet-and-greet with faculty.',
                'event_type' => 'academic',
                'event_date' => now()->addDays(15),
                'start_time' => '09:00:00',
                'end_time' => '15:00:00',
                'venue' => 'College Main Hall',
                'audience' => 'students',
                'is_published' => true,
            ],
            [
                'title' => 'Mid-Semester Examinations',
                'description' => 'Mid-semester examinations for all programs. Students are required to bring their student ID cards and examination cards.',
                'event_type' => 'academic',
                'event_date' => now()->addDays(30),
                'start_time' => '08:00:00',
                'end_time' => '17:00:00',
                'venue' => 'Various Examination Halls',
                'audience' => 'students',
                'is_published' => true,
            ],
            [
                'title' => 'Annual Cultural Week',
                'description' => 'A week-long celebration of diverse cultures featuring traditional dances, music, art exhibitions, and cultural food fair.',
                'event_type' => 'cultural',
                'event_date' => now()->addDays(45),
                'start_time' => '10:00:00',
                'end_time' => '18:00:00',
                'venue' => 'College Grounds',
                'audience' => 'all',
                'is_published' => true,
            ],
            [
                'title' => 'Career Day Workshop',
                'description' => 'Interactive workshop with industry professionals sharing insights on career opportunities and professional development.',
                'event_type' => 'workshop',
                'event_date' => now()->addDays(20),
                'start_time' => '10:00:00',
                'end_time' => '14:00:00',
                'venue' => 'Lecture Hall B',
                'audience' => 'students',
                'is_published' => true,
            ],
            [
                'title' => 'Alumni Homecoming 2024',
                'description' => 'Annual gathering of SACA alumni for networking, mentorship, and fundraising for college development projects.',
                'event_type' => 'alumni',
                'event_date' => now()->addDays(60),
                'start_time' => '16:00:00',
                'end_time' => '22:00:00',
                'venue' => 'College Auditorium',
                'audience' => 'alumni',
                'requires_registration' => true,
                'is_published' => true,
            ],
        ];

        foreach ($events as $event) {
            Event::firstOrCreate(
                [
                    'title' => $event['title'],
                    'event_date' => $event['event_date'],
                ],
                array_merge($event, [
                    'created_by' => $admin ? $admin->id : 1,
                ])
            );
        }
    }
}
