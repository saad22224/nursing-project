<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clinic_visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_patient_id')->constrained()->cascadeOnDelete();
            $table->date('visit_date');
            $table->text('complaints')->nullable();
            $table->string('bp')->nullable();
            $table->string('weight')->nullable();
            $table->text('examination_notes')->nullable();
            $table->text('ultrasound_findings')->nullable();
            $table->text('tests_required')->nullable();
            $table->text('medications')->nullable();
            $table->date('next_visit_date')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clinic_visits');
    }
};
