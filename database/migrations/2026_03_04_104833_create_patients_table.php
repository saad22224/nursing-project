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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->date('lmp');
            $table->date('edd')->nullable();
            $table->integer('gravida')->default(0);
            $table->integer('para')->default(0);
            $table->decimal('bmi', 5, 2)->nullable();
            $table->string('blood_group')->nullable();
            $table->text('medical_history')->nullable();
            $table->boolean('previous_cs')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
