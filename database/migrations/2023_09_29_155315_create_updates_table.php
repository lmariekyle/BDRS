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
        Schema::create('updates', function (Blueprint $table) {
            $table->id();
            $table->string('titleHeading');
            $table->string('titleSub');
            $table->text('description');
            $table->date('date')->nullable();
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
        Schema::dropIfExists('updates');
    }
};
