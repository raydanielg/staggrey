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

        $news = [
            [
                'title' => 'SACHS Kufunguliwa kwa Chuo kwa Mwaka wa Masomo 2025/2026',
                'slug' => 'sachs-kufunguliwa-2025-2026',
                'content' => 'Imeelezwa kuwa Serikali imefanya uwekezaji mkubwa kupitia mradi wa EASTRIP ili kukifanya St. Aggrey College of Health Sciences (SACHS), kuwa kitovu cha mafunzo ya afya kwa ukanda wa Afrika Mashariki na Afrika kwa ujumla. Akizungumza Januari 6, 2026 wakati wa ziara yake katika chuo hicho, Naibu Waziri wa Afya alisema kuwa utekelezaji wa mradi wa EASTRIP utakifanya SACHS kuwa kitovu cha mafunzo ya vitendo katika sekta ya afya.',
                'excerpt' => 'SACHS kuwa kitovu cha mafunzo ya afya Afrika Mashariki kupitia mradi wa EASTRIP.',
                'featured_image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=400&h=300&fit=crop',
                'category' => 'announcements',
                'is_published' => true,
                'published_at' => '2025-11-13',
            ],
            [
                'title' => 'Provisional Graduation List for 2024/2025 Academic Year',
                'slug' => 'graduation-list-2024-2025',
                'content' => 'The Provisional Graduation List for the 2024/2025 Academic Year has been released. All graduands are requested to verify their information and report any discrepancies to the Academic Office within 7 days.',
                'excerpt' => 'Provisional graduation list released for 2024/2025 academic year.',
                'featured_image' => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=400&h=300&fit=crop',
                'category' => 'announcements',
                'is_published' => true,
                'published_at' => '2025-10-22',
            ],
            [
                'title' => 'List of Applicants Selected for Admission - Third Round',
                'slug' => 'admission-list-third-round',
                'content' => 'The list of applicants selected for admission into various diploma programmes for the academic year 2025/2026 - Third Round is now available. Selected applicants are required to report to the college within 14 days.',
                'excerpt' => 'Third round admission list for 2025/2026 academic year released.',
                'featured_image' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=400&h=300&fit=crop',
                'category' => 'announcements',
                'is_published' => true,
                'published_at' => '2025-10-21',
            ],
            [
                'title' => 'Jinsi ya Kufanya Usajili na Malipo ya Ada',
                'slug' => 'usajili-na-malipo-2025',
                'content' => 'Wanafunzi wote waliopokea nafasi za kusoma katika chuo cha SACHS kwa mwaka wa kwanza 2025/2026 watakiwa kufanya usajili na kulipa ada kufuatia taratibu zilizowekwa. Malipo yote yanapaswa kufanyika kupitia benki zilizoidhinishwa.',
                'excerpt' => 'Maelekezo ya usajili na malipo ya ada kwa wanafunzi wa mwaka wa kwanza.',
                'featured_image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=400&h=300&fit=crop',
                'category' => 'announcements',
                'is_published' => true,
                'published_at' => '2025-10-18',
            ],
            [
                'title' => 'SACHS Yapongezwa kwa Ujenzi wa Maabara ya Kisasa',
                'slug' => 'sachs-maabara-kisasa',
                'content' => 'St. Aggrey College of Health Sciences imepokea pongezi kutoka kwa Wizara ya Afya kwa ujenzi wa maabara ya kisasa za kufundishia. Maabara haya yatatoa fursa kwa wanafunzi kujifunza kwa vitendo katika mazingira ya hali ya juu.',
                'excerpt' => 'SACHS yapongezwa kwa ujenzi wa maabara za kisasa za kufundishia.',
                'featured_image' => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=400&h=300&fit=crop',
                'category' => 'general',
                'is_published' => true,
                'published_at' => '2025-08-21',
            ],
            [
                'title' => 'Admission Open for Diploma in Pharmaceutical Sciences',
                'slug' => 'admission-pharmaceutical',
                'content' => 'Applications are now open for the Diploma in Pharmaceutical Sciences (NTA 4-6). The program prepares students for careers in hospital and community pharmacy with comprehensive training in pharmacy practice.',
                'excerpt' => 'Applications open for Pharmaceutical Sciences diploma program NTA 4-6.',
                'featured_image' => 'https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=300&fit=crop',
                'category' => 'announcements',
                'is_published' => true,
                'published_at' => '2025-01-10',
            ],
        ];

        foreach ($news as $newsItem) {
            News::firstOrCreate(
                ['slug' => $newsItem['slug']],
                array_merge($newsItem, [
                    'author_id' => $admin ? $admin->id : 1,
                ])
            );
        }
    }
}
