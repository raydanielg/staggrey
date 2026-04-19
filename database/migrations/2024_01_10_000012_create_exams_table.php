<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->string('exam_name');
            $table->enum('exam_type', ['midterm', 'final', 'supplementary', 'special']);
            $table->enum('semester', [1, 2, 3, 4, 5, 6, 7, 8]);
            $table->enum('academic_year', ['2023/2024', '2024/2025', '2025/2026']);
            $table->integer('total_marks');
            $table->integer('passing_marks');
            $table->decimal('weight_percentage', 5, 2)->default(100); // For final exams
            $table->date('exam_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('venue')->nullable();
            $table->enum('status', ['scheduled', 'ongoing', 'completed', 'cancelled'])->default('scheduled');
            $table->boolean('results_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('exams');
    }
};
