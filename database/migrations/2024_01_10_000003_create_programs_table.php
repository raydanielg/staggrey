<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('level', ['certificate', 'diploma', 'degree']);
            $table->integer('duration_months');
            $table->decimal('tuition_fee', 12, 2)->default(0);
            $table->decimal('registration_fee', 12, 2)->default(0);
            $table->decimal('exam_fee', 12, 2)->default(0);
            $table->string('image')->nullable();
            $table->text('requirements')->nullable();
            $table->text('syllabus')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('programs');
    }
};
