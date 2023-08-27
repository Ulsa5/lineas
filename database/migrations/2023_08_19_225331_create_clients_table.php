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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',45);
            $table->bigInteger('dpi')->length(13);
            
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('occupation_id');

            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('occupation_id')->references('id')->on('occupations');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
