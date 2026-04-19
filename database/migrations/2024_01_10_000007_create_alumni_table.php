<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->string('alumni_id')->unique();
            $table->date('graduation_date');
            $table->string('program_completed');
            $table->string('certificate_number')->nullable();
            $table->string('current_employer')->nullable();
            $table->string('job_title')->nullable();
            $table->string('industry')->nullable();
            $table->string('work_location')->nullable();
            $table->enum('employment_status', ['employed', 'self-employed', 'unemployed', 'studying'])->default('employed');
            $table->string('linkedin_profile')->nullable();
            $table->text('success_story')->nullable();
            $table->boolean('is_mentor')->default(false);
            $table->decimal('total_donations', 12, 2)->default(0);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumni');
    }
};
