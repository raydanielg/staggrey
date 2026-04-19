<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Program;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        // Certificate in Business Management Courses
        $certBM = Program::where('code', 'CERT-BM')->first();
        if ($certBM) {
            $courses = [
                ['code' => 'CBM101', 'name' => 'Introduction to Business', 'credit_hours' => 3, 'semester' => 1],
                ['code' => 'CBM102', 'name' => 'Business Communication', 'credit_hours' => 3, 'semester' => 1],
                ['code' => 'CBM103', 'name' => 'Principles of Marketing', 'credit_hours' => 3, 'semester' => 1],
                ['code' => 'CBM104', 'name' => 'Business Mathematics', 'credit_hours' => 3, 'semester' => 1],
                ['code' => 'CBM201', 'name' => 'Entrepreneurship', 'credit_hours' => 3, 'semester' => 2],
                ['code' => 'CBM202', 'name' => 'Financial Accounting', 'credit_hours' => 3, 'semester' => 2],
                ['code' => 'CBM203', 'name' => 'Business Law', 'credit_hours' => 3, 'semester' => 2],
                ['code' => 'CBM204', 'name' => 'Project Management', 'credit_hours' => 3, 'semester' => 2],
            ];

            foreach ($courses as $course) {
                Course::firstOrCreate(
                    ['code' => $course['code']],
                    array_merge($course, ['program_id' => $certBM->id])
                );
            }
        }

        // Certificate in IT Courses
        $certIT = Program::where('code', 'CERT-IT')->first();
        if ($certIT) {
            $courses = [
                ['code' => 'CIT101', 'name' => 'Computer Fundamentals', 'credit_hours' => 3, 'semester' => 1],
                ['code' => 'CIT102', 'name' => 'Programming Basics', 'credit_hours' => 4, 'semester' => 1],
                ['code' => 'CIT103', 'name' => 'Web Development', 'credit_hours' => 3, 'semester' => 1],
                ['code' => 'CIT104', 'name' => 'Database Systems', 'credit_hours' => 3, 'semester' => 1],
                ['code' => 'CIT201', 'name' => 'Networking Essentials', 'credit_hours' => 3, 'semester' => 2],
                ['code' => 'CIT202', 'name' => 'Software Engineering', 'credit_hours' => 3, 'semester' => 2],
                ['code' => 'CIT203', 'name' => 'Mobile App Development', 'credit_hours' => 3, 'semester' => 2],
                ['code' => 'CIT204', 'name' => 'IT Project', 'credit_hours' => 4, 'semester' => 2],
            ];

            foreach ($courses as $course) {
                Course::firstOrCreate(
                    ['code' => $course['code']],
                    array_merge($course, ['program_id' => $certIT->id])
                );
            }
        }

        // Diploma in Business Management Courses
        $dipBM = Program::where('code', 'DIP-BM')->first();
        if ($dipBM) {
            $courses = [
                ['code' => 'DBM101', 'name' => 'Advanced Business Communication', 'credit_hours' => 3, 'semester' => 1],
                ['code' => 'DBM102', 'name' => 'Organizational Behavior', 'credit_hours' => 3, 'semester' => 1],
                ['code' => 'DBM103', 'name' => 'Business Statistics', 'credit_hours' => 3, 'semester' => 1],
                ['code' => 'DBM104', 'name' => 'Marketing Management', 'credit_hours' => 3, 'semester' => 1],
                ['code' => 'DBM201', 'name' => 'Financial Management', 'credit_hours' => 3, 'semester' => 2],
                ['code' => 'DBM202', 'name' => 'Human Resource Management', 'credit_hours' => 3, 'semester' => 2],
                ['code' => 'DBM203', 'name' => 'Operations Management', 'credit_hours' => 3, 'semester' => 2],
                ['code' => 'DBM301', 'name' => 'Strategic Management', 'credit_hours' => 3, 'semester' => 3],
                ['code' => 'DBM302', 'name' => 'Research Methods', 'credit_hours' => 3, 'semester' => 3],
                ['code' => 'DBM303', 'name' => 'International Business', 'credit_hours' => 3, 'semester' => 4],
                ['code' => 'DBM304', 'name' => 'Final Year Project', 'credit_hours' => 6, 'semester' => 4],
            ];

            foreach ($courses as $course) {
                Course::firstOrCreate(
                    ['code' => $course['code']],
                    array_merge($course, ['program_id' => $dipBM->id])
                );
            }
        }
    }
}
