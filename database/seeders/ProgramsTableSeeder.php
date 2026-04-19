<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramsTableSeeder extends Seeder
{
    public function run()
    {
        $programs = [
            [
                'code' => 'CERT-BM',
                'name' => 'Certificate in Business Management',
                'description' => 'A comprehensive certificate program covering fundamentals of business administration, marketing, and entrepreneurship.',
                'level' => 'certificate',
                'duration_months' => 12,
                'tuition_fee' => 850000,
                'registration_fee' => 50000,
                'exam_fee' => 75000,
                'requirements' => 'O-Level Certificate with at least 4 passes',
                'status' => 'active',
            ],
            [
                'code' => 'CERT-IT',
                'name' => 'Certificate in Information Technology',
                'description' => 'Learn computer fundamentals, programming basics, networking, and software applications.',
                'level' => 'certificate',
                'duration_months' => 12,
                'tuition_fee' => 900000,
                'registration_fee' => 50000,
                'exam_fee' => 75000,
                'requirements' => 'O-Level Certificate with at least 4 passes including Mathematics',
                'status' => 'active',
            ],
            [
                'code' => 'DIP-BM',
                'name' => 'Diploma in Business Management',
                'description' => 'Advanced business studies including strategic management, finance, human resources, and operations.',
                'level' => 'diploma',
                'duration_months' => 24,
                'tuition_fee' => 1200000,
                'registration_fee' => 75000,
                'exam_fee' => 100000,
                'requirements' => 'Certificate in Business or A-Level with at least 1 principal pass',
                'status' => 'active',
            ],
            [
                'code' => 'DIP-IT',
                'name' => 'Diploma in Information Technology',
                'description' => 'Advanced IT studies including programming, database management, web development, and system administration.',
                'level' => 'diploma',
                'duration_months' => 24,
                'tuition_fee' => 1350000,
                'registration_fee' => 75000,
                'exam_fee' => 100000,
                'requirements' => 'Certificate in IT or A-Level with at least 1 principal pass in Mathematics/Physics',
                'status' => 'active',
            ],
            [
                'code' => 'CERT-ACC',
                'name' => 'Certificate in Accounting',
                'description' => 'Learn financial accounting, bookkeeping, taxation, and business mathematics.',
                'level' => 'certificate',
                'duration_months' => 12,
                'tuition_fee' => 800000,
                'registration_fee' => 50000,
                'exam_fee' => 75000,
                'requirements' => 'O-Level Certificate with at least 4 passes including Mathematics',
                'status' => 'active',
            ],
            [
                'code' => 'DIP-HRM',
                'name' => 'Diploma in Human Resource Management',
                'description' => 'Comprehensive HR training including recruitment, employee relations, labor laws, and organizational behavior.',
                'level' => 'diploma',
                'duration_months' => 24,
                'tuition_fee' => 1100000,
                'registration_fee' => 75000,
                'exam_fee' => 100000,
                'requirements' => 'Certificate in relevant field or A-Level with at least 1 principal pass',
                'status' => 'active',
            ],
        ];

        foreach ($programs as $program) {
            Program::firstOrCreate(['code' => $program['code']], $program);
        }
    }
}
