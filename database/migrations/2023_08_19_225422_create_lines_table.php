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
        Schema::create('lines', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('numero')->length(8);
            $table->bigInteger('icc')->length(30);

            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('telco_id');
            $table->unsignedBigInteger('plan_id');

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('telco_id')->references('id')->on('telcos')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('plans');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lines');
    }
};
