<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            // Institute Details
            ['key' => 'registration_no', 'value' => 'REG/HAS/116', 'type' => 'string', 'group' => 'institute', 'label' => 'Registration Number'],
            ['key' => 'college_name', 'value' => 'St. Aggrey College of Health Sciences', 'type' => 'string', 'group' => 'institute', 'label' => 'Institute Name'],
            ['key' => 'registration_status', 'value' => 'Full Registration', 'type' => 'string', 'group' => 'institute', 'label' => 'Registration Status'],
            ['key' => 'establishment_date', 'value' => '2000-01-01', 'type' => 'date', 'group' => 'institute', 'label' => 'Establishment Date'],
            ['key' => 'registration_date', 'value' => '2015-02-10', 'type' => 'date', 'group' => 'institute', 'label' => 'Registration Date'],
            ['key' => 'accreditation_status', 'value' => 'Provisional Accreditation', 'type' => 'string', 'group' => 'institute', 'label' => 'Accreditation Status'],
            ['key' => 'ownership', 'value' => 'Private', 'type' => 'string', 'group' => 'institute', 'label' => 'Ownership'],
            ['key' => 'region', 'value' => 'Mbeya', 'type' => 'string', 'group' => 'institute', 'label' => 'Region'],
            ['key' => 'district', 'value' => 'Mbeya City Council', 'type' => 'string', 'group' => 'institute', 'label' => 'District'],
            
            // Contact Details
            ['key' => 'fixed_phone', 'value' => '0717327632', 'type' => 'string', 'group' => 'contact', 'label' => 'Fixed Phone'],
            ['key' => 'phone', 'value' => '0755660616 / 0712509263', 'type' => 'string', 'group' => 'contact', 'label' => 'Mobile Phone'],
            ['key' => 'address', 'value' => 'P. O. BOX 2954 MBEYA', 'type' => 'string', 'group' => 'contact', 'label' => 'Postal Address'],
            ['key' => 'email', 'value' => 'staggreyhealth@gmail.com', 'type' => 'string', 'group' => 'contact', 'label' => 'Email Address'],
            ['key' => 'website', 'value' => 'http://www.staggreyhealth.ac.tz', 'type' => 'string', 'group' => 'contact', 'label' => 'Web Address'],
            
            // Academic Settings
            ['key' => 'academic_year', 'value' => '2024/2025', 'type' => 'string', 'group' => 'academic', 'label' => 'Current Academic Year'],
            ['key' => 'semester', 'value' => '1', 'type' => 'integer', 'group' => 'academic', 'label' => 'Current Semester'],
            ['key' => 'application_fee', 'value' => '10000', 'type' => 'integer', 'group' => 'fees', 'label' => 'Application Fee'],
            
            // Display Settings
            ['key' => 'college_abbreviation', 'value' => 'SACHS', 'type' => 'string', 'group' => 'institute', 'label' => 'College Abbreviation'],
            ['key' => 'motto', 'value' => 'Excellence in Healthcare Education', 'type' => 'string', 'group' => 'institute', 'label' => 'College Motto'],
        ];

        foreach ($settings as $setting) {
            Setting::firstOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
