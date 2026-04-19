<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('exam_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->decimal('assignment_score', 5, 2)->nullable(); // CA marks
            $table->decimal('exam_score', 5, 2)->nullable(); // Final exam
            $table->decimal('total_score', 5, 2)->nullable();
            $table->string('grade')->nullable(); // A, B, C, D, F
            $table->decimal('grade_points', 3, 2)->nullable(); // 5.0, 4.0, 3.0, etc.
            $table->string('remarks')->nullable(); // Pass, Fail, Incomplete
            $table->foreignId('entered_by')->constrained('users')->onDelete('cascade');
            $table->timestamp('entered_at')->nullable();
            $table->foreignId('verified_by')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamp('verified_at')->nullable();
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('results');
    }
};
