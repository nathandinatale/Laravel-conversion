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
        Schema::create('trip', function (Blueprint $table) {
            $table->integer('tripID')->unsigned()->unique();
            $table->string('tripName', 50);
            $table->date('startDate');
            $table->date('endDate');
            $table->string('destination', 30);
            $table->char('tripBusPlate', 7);
            $table->foreign('tripBusPlate')->references('plateNumber')->on('bus');
            $table->primary('tripID');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip');
    }
};
