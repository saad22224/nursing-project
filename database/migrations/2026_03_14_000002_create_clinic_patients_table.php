<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clinic_patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('husband_name')->nullable();
            $table->string('phone')->nullable();
            $table->integer('age')->nullable();
            $table->integer('gravida')->default(0);
            $table->integer('para')->default(0);
            $table->integer('abortion')->default(0);
            $table->integer('living')->default(0);
            $table->date('lmp')->nullable();
            $table->date('edd')->nullable();
            $table->string('blood_group')->nullable();
            $table->text('medical_history')->nullable();
            $table->boolean('previous_cs')->default(false);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clinic_patients');
    }
};
