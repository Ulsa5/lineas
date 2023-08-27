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
        Schema::create('advisors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',45);
            $table->bigInteger('telefono')->length(8);
            $table->string('correo',50);
            $table->string('asesor',45);

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
        Schema::dropIfExists('advisors');
    }
};
