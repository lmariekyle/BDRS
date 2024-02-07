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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('propertyName')->nullable();
            $table->string('clientName')->nullable();
            $table->string('clientContact')->nullable();
            $table->string('clientEmail')->nullable();
            $table->text('clientMessage')->nullable();
            $table->string('inquiryStatus')->default('Unread');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
