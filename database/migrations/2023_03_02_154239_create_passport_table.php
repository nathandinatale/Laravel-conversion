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
        Schema::create('passport', function (Blueprint $table) {
            $table->char('passNumber', 4)->unique();
            $table->string('nationality', 30);
            $table->date('expDate');
            $table->date('birthDate');
            $table->integer('passHolder')->unsigned();
            $table->foreign('passHolder')->references('passengerID')->on('passenger')->onDelete('cascade');
            $table->primary('passNumber');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passport');
    }
};
