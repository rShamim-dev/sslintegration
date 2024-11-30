<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Customer name
            $table->string('email'); // Customer email
            $table->string('phone'); // Customer phone
            $table->decimal('amount', 10, 2); // Total amount
            $table->enum('status', ['Pending', 'Processing', 'Completed', 'Failed'])->default('Pending'); // Status
            $table->string('address'); // Customer address
            $table->string('transaction_id')->unique(); // Unique transaction ID
            $table->string('currency', 3); // Currency code (e.g., USD, EUR)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
