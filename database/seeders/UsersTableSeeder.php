<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::where('slug', 'admin')->first();
        $studentRole = Role::where('slug', 'student')->first();
        $staffRole = Role::where('slug', 'staff')->first();
        $alumniRole = Role::where('slug', 'alumni')->first();

        // Admin User
        User::firstOrCreate(
            ['email' => 'admin@saca.ac.tz'],
            [
                'name' => 'System Administrator',
                'password' => Hash::make('password'),
                'role_id' => $adminRole->id,
                'phone' => '+255 700 000 001',
                'status' => 'active',
            ]
        );

        // Sample Staff Users
        $staffUsers = [
            ['name' => 'Dr. John Mwakatobe', 'email' => 'principal@saca.ac.tz', 'phone' => '+255 700 000 002'],
            ['name' => 'Prof. Sarah Mwakipesile', 'email' => 'lecturer1@saca.ac.tz', 'phone' => '+255 700 000 003'],
            ['name' => 'Mr. James Kilimba', 'email' => 'accountant@saca.ac.tz', 'phone' => '+255 700 000 004'],
        ];

        foreach ($staffUsers as $staff) {
            User::firstOrCreate(
                ['email' => $staff['email']],
                [
                    'name' => $staff['name'],
                    'password' => Hash::make('password'),
                    'role_id' => $staffRole->id,
                    'phone' => $staff['phone'],
                    'status' => 'active',
                ]
            );
        }

        // Sample Student Users
        $studentUsers = [
            ['name' => 'Grace Mwalimu', 'email' => 'student1@example.com', 'phone' => '+255 711 111 111'],
            ['name' => 'Emmanuel Chirwa', 'email' => 'student2@example.com', 'phone' => '+255 722 222 222'],
            ['name' => 'Faith Ngowi', 'email' => 'student3@example.com', 'phone' => '+255 733 333 333'],
        ];

        foreach ($studentUsers as $student) {
            User::firstOrCreate(
                ['email' => $student['email']],
                [
                    'name' => $student['name'],
                    'password' => Hash::make('password'),
                    'role_id' => $studentRole->id,
                    'phone' => $student['phone'],
                    'status' => 'active',
                ]
            );
        }

        $this->command->info('Users seeded successfully!');
        $this->command->info('Default credentials: admin@saca.ac.tz / password');
    }
}
