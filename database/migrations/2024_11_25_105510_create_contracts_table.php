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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('initiator_id')->nullable()->constrained('users')->nullOnDelete();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');

            $table->string('email')->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->string('address')->nullable();

            $table->string('passport_number');
            $table->string('passport_issued_by');
            $table->date('passport_issue_date');

            $table->string('car_name');
            $table->string('vin_code');
            $table->decimal('price', 10);
            $table->string('currency');

            // Дополнительные поля для юридического лица
            $table->string('company_name')->nullable();
            $table->string('inn')->nullable();
            $table->string('legal_address')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bic')->nullable()->comment('BIC (Bank Identification Code)');
            $table->string('account_number')->nullable()->comment('Расчетный счет');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
