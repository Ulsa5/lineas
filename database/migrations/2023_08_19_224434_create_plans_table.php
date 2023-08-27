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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',45);
            $table->string('minutos',45);
            $table->string('internet',45);
            $table->string('beneficios',45);
            $table->integer('costo')->length(5);
            $table->integer('contrato')->length(2);
            $table->unsignedBigInteger('telco_id');
            $table->foreign('telco_id')->references('id')->on('telcos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
