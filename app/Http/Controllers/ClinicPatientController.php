<?php

namespace App\Http\Controllers;

use App\Models\ClinicPatient;
use App\Models\ClinicVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClinicPatientController extends Controller
{
    public function index(Request $request)
    {
        $query = Auth::guard('clinic')->user()->patients();
        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('phone', 'like', '%' . $request->search . '%');
        }
        $patients = $query->latest()->paginate(15);
        return view('clinic.patients.index', compact('patients'));
    }

    public function create()
    {
        return view('clinic.patients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'husband_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'age' => 'nullable|integer',
            'height' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'bmi' => 'nullable|numeric',
            'gravida' => 'nullable|integer',
            'para' => 'nullable|integer',
            'abortion' => 'nullable|integer',
            'living' => 'nullable|integer',
            'lmp' => 'nullable|date',
            'edd' => 'nullable|date',
            'blood_group' => 'nullable|string|max:10',
            'medical_history' => 'nullable|string',
            'previous_cs' => 'boolean',
            'notes' => 'nullable|string',
        ]);

        $validated['previous_cs'] = $request->has('previous_cs');

        $patient = Auth::guard('clinic')->user()->patients()->create($validated);

        return redirect()->route('clinic.patients.show', $patient)->with('success', 'Patient added successfully.');
    }

    public function show(ClinicPatient $patient)
    {
        if ($patient->clinic_id != Auth::guard('clinic')->id()) abort(403);
        $patient->load('visits');
        return view('clinic.patients.show', compact('patient'));
    }

    public function showVisit(ClinicPatient $patient, ClinicVisit $visit)
    {
        if (
            $patient->clinic_id != Auth::guard('clinic')->id()
            || $visit->clinic_patient_id != $patient->id
        ) abort(403);
        return view('clinic.visits.show', compact('patient', 'visit'));

        // dd(Auth::guard('clinic')->id(), $patient->clinic_id, $visit->clinic_patient_id);

        // auth()->id returns integer while $patient->clinic_id 
        // and $visit->clinic_patient_id are strings, so we need to cast 
        // them to integers before comparing or compare them with non identical equality operator (!=) instead of identical equality operator (!==)
    }

    public function createVisit(ClinicPatient $patient)
    {
        if ($patient->clinic_id != Auth::guard('clinic')->id()) abort(403);
        return view('clinic.visits.create', compact('patient'));
    }

    public function storeVisit(Request $request, ClinicPatient $patient)
    {
        if ($patient->clinic_id != Auth::guard('clinic')->id()) abort(403);

        $validated = $request->validate([
            'visit_date' => 'required|date',
            'complaints' => 'nullable|string',
            'bp' => 'nullable|string|max:20',
            'weight' => 'nullable|string|max:20',
            'examination_notes' => 'nullable|string',
            'ultrasound_findings' => 'nullable|string',
            'tests_required' => 'nullable|string',
            'medications' => 'nullable|string',
            'next_visit_date' => 'nullable|date',
            'notes' => 'nullable|string',
        ]);

        $patient->visits()->create($validated);
        return redirect()->route('clinic.patients.show', $patient)->with('success', 'Visit recorded successfully.');
    }
}
