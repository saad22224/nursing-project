<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClinicPatient;
use App\Models\ClinicVisit;
use Illuminate\Support\Facades\Auth;

class ClinicDashboardController extends Controller
{
    public function index()
    {
        $clinic = Auth::guard('clinic')->user();
        $patientsCount = $clinic->patients()->count();
        $recentPatients = $clinic->patients()->latest()->take(5)->get();
        // Today's visits
        $todayVisits = ClinicVisit::whereHas('patient', function($q) use ($clinic) {
            $q->where('clinic_id', $clinic->id);
        })->whereDate('visit_date', date('Y-m-d'))->count();

        return view('clinic.dashboard', compact('clinic', 'patientsCount', 'recentPatients', 'todayVisits'));
    }
}
