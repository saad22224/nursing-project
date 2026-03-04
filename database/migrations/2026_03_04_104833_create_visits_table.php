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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->decimal('weight', 5, 2)->nullable();
            $table->integer('bp_systolic')->nullable();
            $table->integer('bp_diastolic')->nullable();
            $table->integer('blood_sugar')->nullable();
            $table->decimal('hb', 4, 2)->nullable();
            $table->boolean('fetal_movement')->default(true);
            $table->boolean('vaginal_bleeding')->default(false);
            $table->text('notes')->nullable();
            $table->integer('risk_score')->default(0);
            $table->enum('risk_level', ['low', 'moderate', 'high'])->default('low');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
