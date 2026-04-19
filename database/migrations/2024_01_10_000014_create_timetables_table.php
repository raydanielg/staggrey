<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->foreignId('staff_id')->constrained('staff')->onDelete('cascade');
            $table->enum('day', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']);
            $table->time('start_time');
            $table->time('end_time');
            $table->string('venue');
            $table->enum('semester', [1, 2, 3, 4, 5, 6, 7, 8]);
            $table->enum('academic_year', ['2023/2024', '2024/2025', '2025/2026']);
            $table->enum('type', ['lecture', 'practical', 'tutorial', 'seminar'])->default('lecture');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('timetables');
    }
};
