<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('type')->default('string'); // string, text, boolean, integer
            $table->string('group')->default('general'); // general, academic, financial, email, etc.
            $table->string('label');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Insert default settings
        $defaultSettings = [
            ['key' => 'college_name', 'value' => 'St. Aggrey College of Arts', 'type' => 'string', 'group' => 'general', 'label' => 'College Name'],
            ['key' => 'college_address', 'value' => 'P.O. Box 2954, Mbeya, Tanzania', 'type' => 'text', 'group' => 'general', 'label' => 'College Address'],
            ['key' => 'college_phone', 'value' => '+255 XXX XXX XXX', 'type' => 'string', 'group' => 'general', 'label' => 'College Phone'],
            ['key' => 'college_email', 'value' => 'info@staggrey.ac.tz', 'type' => 'string', 'group' => 'general', 'label' => 'College Email'],
            ['key' => 'academic_year', 'value' => '2024/2025', 'type' => 'string', 'group' => 'academic', 'label' => 'Current Academic Year'],
            ['key' => 'semester', 'value' => '1', 'type' => 'integer', 'group' => 'academic', 'label' => 'Current Semester'],
            ['key' => 'registration_open', 'value' => 'true', 'type' => 'boolean', 'group' => 'academic', 'label' => 'Registration Open'],
            ['key' => 'application_fee', 'value' => '10000', 'type' => 'integer', 'group' => 'financial', 'label' => 'Application Fee (TZS)'],
            ['key' => 'late_fee_penalty', 'value' => '5000', 'type' => 'integer', 'group' => 'financial', 'label' => 'Late Fee Penalty (TZS)'],
        ];

        foreach ($defaultSettings as $setting) {
            $setting['created_at'] = now();
            $setting['updated_at'] = now();
            DB::table('settings')->insert($setting);
        }
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
