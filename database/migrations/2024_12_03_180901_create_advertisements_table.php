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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();

            $table->foreignId('brand_id')->constrained('brands')->cascadeOnDelete();

            $table->string('vin_code')->unique();
            $table->string('name');
            $table->string('body_type');
            $table->string('transmission');
            $table->string('engine_type');
            $table->string('drive_type');
            $table->integer('year');
            $table->decimal('mileage');
            $table->decimal('engine_capacity');
            $table->decimal('price');

            $table->index(['vin_code']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
