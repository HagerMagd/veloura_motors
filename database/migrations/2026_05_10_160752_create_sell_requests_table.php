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
        Schema::create('sell_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('car_name');
            $table->string('car_brand');
            $table->decimal('maileage');
            $table->string('transmission');
            $table->string('fuel_type');
            $table->string('model');
            $table->year('year');
            $table->decimal('price');
            $table->string('status')->default(0);
            $table->text('message')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sell_requests');
    }
};
