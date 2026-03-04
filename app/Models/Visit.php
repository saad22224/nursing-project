<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = ['patient_id', 'weight', 'bp_systolic', 'bp_diastolic', 'blood_sugar', 'hb', 'fetal_movement', 'vaginal_bleeding', 'notes', 'risk_score', 'risk_level'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
