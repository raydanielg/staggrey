<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('staff_id')->unique();
            $table->string('designation'); // Lecturer, HOD, Accountant, etc.
            $table->string('department')->nullable();
            $table->text('qualifications')->nullable();
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('address');
            $table->date('joining_date');
            $table->decimal('salary', 12, 2)->nullable();
            $table->string('contract_type')->default('full-time'); // full-time, part-time, contract
            $table->text('bio')->nullable();
            $table->string('photo')->nullable();
            $table->enum('status', ['active', 'on_leave', 'terminated'])->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('staff');
    }
};
