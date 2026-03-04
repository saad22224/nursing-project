<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::oldest()->paginate(10);
        return view('admin.patients.index', compact('patients'));
    }

    public function create()
    {
        return view('admin.patients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:15|max:55',
            'lmp' => 'required|date',
            'gravida' => 'required|integer|min:0',
            'para' => 'nullable|integer|min:0',
            'bmi' => 'nullable|numeric',
            'blood_group' => 'nullable|string',
            'medical_history' => 'nullable|string',
        ]);

        // Calculate EDD: EDD = LMP + 7 days - 3 months + 1 year
        $lmp = new \DateTime($validated['lmp']);
        $edd = (clone $lmp)->modify('+7 days')->modify('-3 months')->modify('+1 year');
        $validated['edd'] = $edd->format('Y-m-d');

        $validated['previous_cs'] = $request->has('previous_cs');
        $validated['para'] = $validated['para'] ?? 0;

        $patient = Patient::create($validated);

        return redirect()->route('admin.patients.show', $patient)->with('success', 'Patient registered successfully.');
    }

    public function show(Patient $patient)
    {
        $patient->load('visits');
        return view('admin.patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('admin.patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:15|max:55',
            'lmp' => 'required|date',
            'gravida' => 'required|integer|min:0',
            'para' => 'nullable|integer|min:0',
            'bmi' => 'nullable|numeric',
            'blood_group' => 'nullable|string',
            'medical_history' => 'nullable|string',
        ]);

        $lmp = new \DateTime($validated['lmp']);
        $edd = (clone $lmp)->modify('+7 days')->modify('-3 months')->modify('+1 year');
        $validated['edd'] = $edd->format('Y-m-d');

        $validated['previous_cs'] = $request->has('previous_cs');
        $validated['para'] = $validated['para'] ?? 0;

        $patient->update($validated);

        return redirect()->route('admin.patients.show', $patient)->with('success', 'Patient updated successfully.');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('admin.patients.index')->with('success', 'Patient deleted successfully.');
    }
}
