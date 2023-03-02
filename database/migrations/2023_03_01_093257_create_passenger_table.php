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
        Schema::create('passenger', function (Blueprint $table) {
            $table->integer('passengerID')->unsigned()->unique();
            $table->string('firstName', 20);
            $table->string('lastName', 20);
            $table->char('heldPassportID', 4);
            $table->primary('passengerID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passenger');
    }
};
