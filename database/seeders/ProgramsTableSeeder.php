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
                'code' => 'DIP-PHARM',
                'name' => 'Diploma in Pharmaceutical Sciences',
                'description' => 'Comprehensive training in pharmacy practice, pharmacology, pharmaceutics, and pharmaceutical chemistry. Prepares students for careers in hospital and community pharmacy.',
                'level' => 'diploma',
                'duration_months' => 36,
                'tuition_fee' => 1800000,
                'registration_fee' => 100000,
                'exam_fee' => 150000,
                'requirements' => 'CSEE with at least 4 passes including Biology and Chemistry, plus at least TWO principal passes in Biology and Chemistry at ACSEE',
                'status' => 'active',
                'nta_level' => 'NTA 4-6',
            ],
            [
                'code' => 'DIP-CLMED',
                'name' => 'Diploma in Clinical Medicine',
                'description' => 'Training in clinical diagnosis, patient care, medical procedures, and primary healthcare delivery. Prepares clinical officers for healthcare facilities.',
                'level' => 'diploma',
                'duration_months' => 36,
                'tuition_fee' => 1900000,
                'registration_fee' => 100000,
                'exam_fee' => 150000,
                'requirements' => 'CSEE with at least 4 passes including Biology and Chemistry, plus at least TWO principal passes in Biology and Chemistry/Physics at ACSEE',
                'status' => 'active',
                'nta_level' => 'NTA 4-6',
            ],
            [
                'code' => 'DIP-NURS',
                'name' => 'Diploma in Nursing and Midwifery',
                'description' => 'Comprehensive nursing education including general nursing, midwifery, community health, and nursing management. Prepares professional nurses and midwives.',
                'level' => 'diploma',
                'duration_months' => 36,
                'tuition_fee' => 1750000,
                'registration_fee' => 100000,
                'exam_fee' => 150000,
                'requirements' => 'CSEE with at least 4 passes including Biology and Chemistry, plus at least TWO principal passes in Biology and Chemistry at ACSEE',
                'status' => 'active',
                'nta_level' => 'NTA 4-6',
            ],
            [
                'code' => 'DIP-MEDLAB',
                'name' => 'Diploma in Medical Laboratory Sciences',
                'description' => 'Training in medical laboratory techniques, diagnostic procedures, hematology, microbiology, and clinical chemistry. Prepares medical laboratory technicians.',
                'level' => 'diploma',
                'duration_months' => 36,
                'tuition_fee' => 1850000,
                'registration_fee' => 100000,
                'exam_fee' => 150000,
                'requirements' => 'CSEE with at least 4 passes including Biology and Chemistry, plus at least TWO principal passes in Biology and Chemistry/Physics at ACSEE',
                'status' => 'active',
                'nta_level' => 'NTA 4-6',
            ],
        ];

        foreach ($programs as $program) {
            Program::firstOrCreate(['code' => $program['code']], $program);
        }
    }
}
