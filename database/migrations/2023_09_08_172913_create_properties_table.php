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
            $table->string('availability')->nullable();
            $table->string('furnish')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('type')->nullable();
            $table->string('price')->nullable();
            $table->string('sizes')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('bed')->nullable();
            $table->string('provision')->nullable();
            $table->string('status')->default('Approved');
            $table->string('featured')->default('Not Featured'); //0 is not featured
            $table->string('img')->nullable();
            $table->string('coverphoto')->nullable();
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
