<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->enum('semester', [1, 2, 3, 4, 5, 6, 7, 8]);
            $table->enum('academic_year', ['2023/2024', '2024/2025', '2025/2026']);
            $table->enum('status', ['active', 'completed', 'dropped', 'failed'])->default('active');
            $table->foreignId('registered_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
};
