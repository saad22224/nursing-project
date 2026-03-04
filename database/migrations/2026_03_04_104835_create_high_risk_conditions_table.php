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
        Schema::create('high_risk_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('definition');
            $table->text('causes');
            $table->text('complications');
            $table->string('lang', 2)->default('ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('high_risk_conditions');
    }
};
