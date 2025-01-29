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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('vin');
            $table->string('customer_name');
            $table->string('customer_phone')->nullable();

            $table->decimal('purchase_price', 10);
            $table->decimal('sale_price', 10);
            $table->decimal('commission_payment', 10);

            $table->string('payment_status', 64);

            $table->string('purchase_currency');
            $table->decimal('purchase_exchange_rate', 10, 4);

            $table->string('sale_currency');
            $table->decimal('sale_exchange_rate', 10, 4);

            $table->foreignId('contract_id')->constrained('contracts');

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
