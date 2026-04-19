<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // admin, student, staff, alumni
            $table->string('slug')->unique();
            $table->text('permissions')->nullable();
            $table->timestamps();
        });

        // Insert default roles
        DB::table('roles')->insert([
            ['name' => 'Admin', 'slug' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Student', 'slug' => 'student', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Staff', 'slug' => 'staff', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alumni', 'slug' => 'alumni', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
