<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name', 'age', 'lmp', 'edd', 'gravida', 'para', 'bmi', 'blood_group', 'medical_history', 'previous_cs'];

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}
