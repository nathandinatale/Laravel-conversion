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
        Schema::create('booking', function (Blueprint $table) {
            $table->integer('tripID')->unsigned();
            $table->integer('passengerID')->unsigned();
            $table->float('pricePaid');
            $table->foreign('tripID')->references('tripID')->on('trip');
            $table->foreign('passengerID')->references('passengerID')->on('passenger')->onDelete('cascade');
            $table->primary(['tripID', 'passengerID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
