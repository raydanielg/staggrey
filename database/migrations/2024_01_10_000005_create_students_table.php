<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('student_id')->unique(); // Registration number
            $table->foreignId('program_id')->constrained()->onDelete('cascade');
            $table->enum('enrollment_status', ['active', 'completed', 'suspended', 'withdrawn'])->default('active');
            $table->enum('academic_year', ['2023/2024', '2024/2025', '2025/2026']);
            $table->integer('current_semester')->default(1);
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('nationality')->default('Tanzanian');
            $table->string('id_number')->nullable(); // NIDA/Passport
            $table->string('address');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_phone');
            $table->text('education_background')->nullable();
            $table->date('enrollment_date');
            $table->date('expected_graduation_date')->nullable();
            $table->date('actual_graduation_date')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
};
