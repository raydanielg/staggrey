<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Str;

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        $admin = User::whereHas('role', function($q) {
            $q->where('slug', 'admin');
        })->first();

        $newsItems = [
            [
                'title' => 'New Academic Year 2024/2025 Registration Now Open',
                'content' => 'We are pleased to announce that registration for the 2024/2025 academic year is now open. All new and continuing students are required to complete their registration by the deadline. Early registration comes with benefits including priority course selection.',
                'excerpt' => 'Registration for the 2024/2025 academic year is now open. Complete your registration early to secure your place.',
                'category' => 'announcements',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'Congratulations to Our Graduating Class of 2024',
                'content' => 'St. Aggrey College of Arts proudly celebrates the graduation of over 200 students who successfully completed their certificate and diploma programs. The graduation ceremony was held at the Mbeya grounds with distinguished guests in attendance.',
                'excerpt' => 'Over 200 students graduated from various programs in our 2024 graduation ceremony.',
                'category' => 'achievements',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(7),
            ],
            [
                'title' => 'New Library Digital Resources Available',
                'content' => 'The college library has expanded its digital collection with over 500 new e-books and online journals. Students can now access these resources remotely through the student portal. Training sessions on using the digital library will be conducted next week.',
                'excerpt' => 'Access over 500 new e-books and digital journals through our expanded library resources.',
                'category' => 'academic',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'Industry Partnership with Local Businesses',
                'content' => 'SACA has signed partnership agreements with several local businesses to provide internship opportunities for our students. This initiative aims to bridge the gap between academic learning and industry practice.',
                'excerpt' => 'New partnerships with local businesses to provide internship opportunities for students.',
                'category' => 'general',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Upcoming Cultural Week 2024',
                'content' => 'Get ready for our annual Cultural Week celebration featuring traditional dances, music performances, fashion shows, and food exhibitions. The event will showcase the diverse cultural heritage of our student community.',
                'excerpt' => 'Annual Cultural Week featuring dances, music, fashion, and food exhibitions.',
                'category' => 'events',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(2),
            ],
        ];

        foreach ($newsItems as $news) {
            $slug = Str::slug($news['title']);
            News::firstOrCreate(
                ['slug' => $slug],
                array_merge($news, [
                    'author_id' => $admin ? $admin->id : 1,
                ])
            );
        }
    }
}
