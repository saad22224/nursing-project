<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicPatient extends Model
{
    protected $fillable = [
        'clinic_id', 'name', 'husband_name', 'phone', 'age', 'height', 'weight', 'bmi',
        'gravida', 'para', 'abortion', 'living', 'lmp', 'edd', 
        'blood_group', 'medical_history', 'previous_cs', 'notes'
    ];

    protected $casts = [
        'lmp' => 'date',
        'edd' => 'date',
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function visits()
    {
        return $this->hasMany(ClinicVisit::class)->orderBy('visit_date', 'desc');
    }
}
