<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumni_id')->nullable()->constrained('alumni')->onDelete('set null');
            $table->string('donor_name');
            $table->string('donor_email')->nullable();
            $table->string('donor_phone')->nullable();
            $table->decimal('amount', 12, 2);
            $table->enum('currency', ['TZS', 'USD'])->default('TZS');
            $table->enum('payment_method', ['bank_transfer', 'mobile_money', 'cash', 'cheque']);
            $table->string('mobile_money_provider')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('campaign_name')->nullable(); // e.g., Library Construction, Scholarship Fund
            $table->enum('donation_type', ['one-time', 'monthly', 'annual'])->default('one-time');
            $table->text('message')->nullable();
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending');
            $table->boolean('is_anonymous')->default(false);
            $table->date('donation_date');
            $table->string('receipt_number')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donations');
    }
};
