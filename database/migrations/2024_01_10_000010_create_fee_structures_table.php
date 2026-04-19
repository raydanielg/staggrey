<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('fee_structures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained()->onDelete('cascade');
            $table->enum('semester', [1, 2, 3, 4, 5, 6, 7, 8]);
            $table->decimal('tuition_fee', 12, 2);
            $table->decimal('registration_fee', 12, 2)->default(0);
            $table->decimal('exam_fee', 12, 2)->default(0);
            $table->decimal('library_fee', 12, 2)->default(0);
            $table->decimal('activity_fee', 12, 2)->default(0);
            $table->decimal('hostel_fee', 12, 2)->default(0);
            $table->decimal('caution_deposit', 12, 2)->default(0);
            $table->decimal('other_fees', 12, 2)->default(0);
            $table->decimal('total_fee', 12, 2);
            $table->enum('academic_year', ['2023/2024', '2024/2025', '2025/2026']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fee_structures');
    }
};
