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
            $table->string('availability')->nullable();
            $table->string('furnish')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('unitdesc')->nullable();
            $table->text('beddesc')->nullable();
            $table->text('furnishdesc')->nullable();
            $table->text('locationdesc')->nullable();
            $table->string('unitType')->nullable();
            $table->string('type')->nullable();
            $table->string('sizes')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('status')->default('Pending');
            $table->string('featured')->default('Not Featured'); //0 is not featured
            $table->string('img')->nullable();
            $table->string('coverphoto')->nullable();
            $table->string('vid')->nullable();
            $table->string('priceimg')->nullable();
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
