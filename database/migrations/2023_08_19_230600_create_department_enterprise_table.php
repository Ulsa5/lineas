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
        Schema::create('department_enterprise', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('enterprise_id');

            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('enterprise_id')->references('id')->on('enterprises')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('department_enterprise');
    }
};
