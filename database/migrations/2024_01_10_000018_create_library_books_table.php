<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('library_books', function (Blueprint $table) {
            $table->id();
            $table->string('isbn')->nullable()->unique();
            $table->string('accession_number')->unique();
            $table->string('title');
            $table->string('author');
            $table->string('publisher')->nullable();
            $table->year('publication_year')->nullable();
            $table->string('edition')->nullable();
            $table->string('category');
            $table->string('subject');
            $table->integer('total_copies')->default(1);
            $table->integer('available_copies')->default(1);
            $table->string('shelf_location')->nullable();
            $table->text('description')->nullable();
            $table->string('cover_image')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->enum('status', ['available', 'borrowed', 'reserved', 'lost', 'damaged'])->default('available');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('library_books');
    }
};
