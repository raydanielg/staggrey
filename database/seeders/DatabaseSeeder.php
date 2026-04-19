<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            SettingsTableSeeder::class,
            UsersTableSeeder::class,
            ProgramsTableSeeder::class,
            CoursesTableSeeder::class,
            StudentsTableSeeder::class,
            StaffTableSeeder::class,
            NewsTableSeeder::class,
            EventsTableSeeder::class,
        ]);
    }
}
