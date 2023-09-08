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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('propertyID')->nullable();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->string('price')->nullable();
            $table->string('sizes')->nullable();
            $table->string('measurement')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('bed')->nullable();
            $table->string('provision')->nullable();
            $table->string('status')->nullable();
            $table->string('approve')->default('Pending');
            $table->string('img')->nullable();
            $table->string('vid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
