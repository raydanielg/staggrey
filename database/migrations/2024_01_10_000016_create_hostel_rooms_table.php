<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hostel_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hostel_id')->constrained()->onDelete('cascade');
            $table->string('room_number');
            $table->integer('capacity'); // Number of students
            $table->integer('floor')->default(1);
            $table->enum('room_type', ['single', 'double', 'triple', 'quad'])->default('double');
            $table->decimal('price_per_semester', 12, 2);
            $table->text('facilities')->nullable();
            $table->enum('status', ['available', 'occupied', 'maintenance'])->default('available');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hostel_rooms');
    }
};
