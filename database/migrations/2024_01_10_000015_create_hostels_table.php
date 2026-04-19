<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hostels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->enum('type', ['male', 'female', 'mixed']);
            $table->integer('total_rooms');
            $table->integer('floors')->default(1);
            $table->text('facilities')->nullable();
            $table->string('warden_name')->nullable();
            $table->string('warden_phone')->nullable();
            $table->enum('status', ['active', 'maintenance', 'closed'])->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hostels');
    }
};
