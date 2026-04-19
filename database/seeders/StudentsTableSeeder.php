<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\User;
use App\Models\Program;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        $studentUsers = User::whereHas('role', function($q) {
            $q->where('slug', 'student');
        })->get();

        $program = Program::where('code', 'CERT-BM')->first();

        foreach ($studentUsers as $index => $user) {
            $year = now()->year;
            $studentId = 'ST/' . $year . '/' . str_pad($index + 1, 4, '0', STR_PAD_LEFT);

            Student::firstOrCreate(
                ['user_id' => $user->id],
                [
                    'student_id' => $studentId,
                    'program_id' => $program ? $program->id : 1,
                    'enrollment_status' => 'active',
                    'academic_year' => '2024/2025',
                    'current_semester' => 1,
                    'date_of_birth' => now()->subYears(rand(18, 25)),
                    'gender' => $index % 2 == 0 ? 'female' : 'male',
                    'nationality' => 'Tanzanian',
                    'address' => 'Mbeya, Tanzania',
                    'emergency_contact_name' => 'Parent/Guardian',
                    'emergency_contact_phone' => '+255 700 000 000',
                    'enrollment_date' => now(),
                ]
            );
        }
    }
}
