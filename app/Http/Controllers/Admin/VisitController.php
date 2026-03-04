<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Visit;

class VisitController extends Controller
{
    public function create(Patient $patient)
    {
        return view('admin.visits.create', compact('patient'));
    }

    public function store(Request $request, Patient $patient)
    {
        $validated = $request->validate([
            'weight' => 'nullable|numeric',
            'bp_systolic' => 'nullable|integer',
            'bp_diastolic' => 'nullable|integer',
            'blood_sugar' => 'nullable|integer',
            'hb' => 'nullable|numeric',
            'notes' => 'nullable|string',
        ]);

        $validated['fetal_movement'] = $request->has('fetal_movement');
        $validated['vaginal_bleeding'] = $request->has('vaginal_bleeding');

        // Calculate Risk Score
        $riskScore = 0;

        if ($patient->age < 18 || $patient->age > 35) $riskScore++;
        if ($patient->bmi >= 30) $riskScore++;
        if ($validated['bp_systolic'] >= 140 || $validated['bp_diastolic'] >= 90) $riskScore++;
        if ($validated['blood_sugar'] >= 140) $riskScore++;
        if ($validated['hb'] > 0 && $validated['hb'] < 11) $riskScore++;
        if ($patient->previous_cs) $riskScore++;
        if ($validated['vaginal_bleeding']) $riskScore++;
        // RH incompatibility could be checked via blood_group (e.g., negative) if implemented, omitting here.

        // Determine Risk Level
        $riskLevel = 'low';
        if ($riskScore >= 4) {
            $riskLevel = 'high';
        } elseif ($riskScore >= 2) {
            $riskLevel = 'moderate';
        }

        // Emergency Overrides
        if ($validated['bp_systolic'] >= 160 || ($validated['hb'] > 0 && $validated['hb'] < 9) || ($validated['vaginal_bleeding'] && $validated['bp_systolic'] >= 140)) {
            $riskLevel = 'high';
        }

        $validated['risk_score'] = $riskScore;
        $validated['risk_level'] = $riskLevel;

        $patient->visits()->create($validated);

        return redirect()->route('admin.patients.show', $patient)->with('success', 'Visit recorded successfully.');
    }

    public function show(Visit $visit)
    {
        $visit->load('patient');
        return view('admin.visits.show', compact('visit'));
    }

    public function edit(Visit $visit)
    {
        $visit->load('patient');
        return view('admin.visits.edit', compact('visit'));
    }

    public function update(Request $request, Visit $visit)
    {
        $validated = $request->validate([
            'weight' => 'nullable|numeric',
            'bp_systolic' => 'nullable|integer',
            'bp_diastolic' => 'nullable|integer',
            'blood_sugar' => 'nullable|integer',
            'hb' => 'nullable|numeric',
            'notes' => 'nullable|string',
        ]);

        $validated['fetal_movement'] = $request->has('fetal_movement');
        $validated['vaginal_bleeding'] = $request->has('vaginal_bleeding');

        // Recalculate Risk Score
        $patient = $visit->patient;
        $riskScore = 0;

        if ($patient->age < 18 || $patient->age > 35) $riskScore++;
        if ($patient->bmi >= 30) $riskScore++;
        if ($validated['bp_systolic'] >= 140 || $validated['bp_diastolic'] >= 90) $riskScore++;
        if ($validated['blood_sugar'] >= 140) $riskScore++;
        if ($validated['hb'] > 0 && $validated['hb'] < 11) $riskScore++;
        if ($patient->previous_cs) $riskScore++;
        if ($validated['vaginal_bleeding']) $riskScore++;

        $riskLevel = 'low';
        if ($riskScore >= 4) {
            $riskLevel = 'high';
        } elseif ($riskScore >= 2) {
            $riskLevel = 'moderate';
        }

        if ($validated['bp_systolic'] >= 160 || ($validated['hb'] > 0 && $validated['hb'] < 9) || ($validated['vaginal_bleeding'] && $validated['bp_systolic'] >= 140)) {
            $riskLevel = 'high';
        }

        $validated['risk_score'] = $riskScore;
        $validated['risk_level'] = $riskLevel;

        $visit->update($validated);

        return redirect()->route('admin.patients.show', $patient)->with('success', 'Visit updated successfully.');
    }

    public function destroy(Visit $visit)
    {
        $patient = $visit->patient;
        $visit->delete();
        return redirect()->route('admin.patients.show', $patient)->with('success', 'Visit deleted successfully.');
    }
}
