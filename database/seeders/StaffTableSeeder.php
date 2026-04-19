<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;
use App\Models\User;

class StaffTableSeeder extends Seeder
{
    public function run()
    {
        $staffUsers = User::whereHas('role', function($q) {
            $q->where('slug', 'staff');
        })->get();

        $designations = ['Principal', 'Senior Lecturer', 'Accountant'];
        $departments = ['Administration', 'Business', 'Finance'];

        foreach ($staffUsers as $index => $user) {
            $year = now()->year;
            $staffId = 'SF/' . $year . '/' . str_pad($index + 1, 4, '0', STR_PAD_LEFT);

            Staff::firstOrCreate(
                ['user_id' => $user->id],
                [
                    'staff_id' => $staffId,
                    'designation' => $designations[$index] ?? 'Lecturer',
                    'department' => $departments[$index] ?? 'General',
                    'qualifications' => 'Masters Degree in relevant field',
                    'date_of_birth' => now()->subYears(rand(30, 55)),
                    'gender' => 'male',
                    'address' => 'Mbeya, Tanzania',
                    'joining_date' => now()->subYears(rand(1, 5)),
                    'salary' => rand(1500000, 3500000),
                    'contract_type' => 'full-time',
                ]
            );
        }
    }
}
