<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicVisit extends Model
{
    protected $fillable = [
        'clinic_patient_id', 'visit_date', 'complaints', 'bp', 'weight', 
        'examination_notes', 'ultrasound_findings', 'tests_required', 
        'medications', 'next_visit_date', 'notes'
    ];

    protected $casts = [
        'visit_date' => 'date',
        'next_visit_date' => 'date',
    ];

    public function patient()
    {
        return $this->belongsTo(ClinicPatient::class, 'clinic_patient_id');
    }
}
