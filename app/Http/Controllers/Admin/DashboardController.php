<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Visit;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPatients = Patient::count();
        $totalVisits = Visit::count();
        $highRiskPatients = Visit::where('risk_level', 'high')->count(); // simplified for MVP

        $latestVisits = Visit::with('patient')->latest()->take(5)->get();

        return view('admin.dashboard', compact('totalPatients', 'totalVisits', 'highRiskPatients', 'latestVisits'));
    }
}
