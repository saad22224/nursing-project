@extends('layouts.admin')

@section('title', app()->getLocale() == 'ar' ? 'ملف المريضة' : 'Patient Profile')

@section('content')
<div class="mb-6 flex flex-col md:flex-row justify-between items-start md:items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100 gap-4">
    <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-700 font-bold text-xl shadow-inner">
            {{ substr($patient->name, 0, 1) }}
        </div>
        <div>
            <h2 class="text-xl font-bold text-gray-800">{{ $patient->name }}</h2>
            <p class="text-sm text-gray-500 font-medium tracking-wide">ID: {{ Str::padLeft($patient->id, 4, '0') }}</p>
        </div>
    </div>
    <div class="flex flex-wrap items-center gap-2">
        <a href="{{ route('admin.patients.edit', $patient) }}" class="btn-outline text-sm py-2 px-4 flex items-center gap-2 hover:bg-gray-50 transition-colors">
            <i class="fas fa-edit"></i>
            {{ app()->getLocale() == 'ar' ? 'تعديل البيانات' : 'Edit Profile' }}
        </a>
        <a href="{{ route('admin.patients.visits.create', $patient) }}" class="btn-primary text-sm py-2 px-4 shadow-sm hover:shadow-md transition-all flex items-center gap-2">
            <i class="fas fa-plus bg-white/20 p-1 rounded"></i>
            {{ app()->getLocale() == 'ar' ? 'تسجيل زيارة جديدة' : 'Add New Visit' }}
        </a>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <!-- Patient Info Card -->
    <div class="md:col-span-1 border border-gray-100 bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow">
        <div class="p-5 border-b border-gray-50 flex items-center gap-2 bg-slate-50 rounded-t-2xl">
            <i class="fas fa-info-circle text-cyan-600 outline outline-1 outline-cyan-200 outline-offset-2 rounded-full"></i>
            <h3 class="font-bold text-gray-800 text-lg">{{ app()->getLocale() == 'ar' ? 'البيانات الأساسية' : 'Basic Info' }}</h3>
        </div>
        <div class="p-5">
            <ul class="space-y-4 text-sm divide-y divide-gray-50">
                <li class="flex justify-between items-center pb-2">
                    <span class="text-gray-500 font-medium">{{ app()->getLocale() == 'ar' ? 'العمر' : 'Age' }}</span>
                    <span class="font-semibold text-gray-800">{{ $patient->age }} <span class="text-xs text-gray-400 font-normal">({{ app()->getLocale() == 'ar' ? 'سنة' : 'yrs' }})</span></span>
                </li>
                <li class="flex justify-between items-center py-2">
                    <span class="text-gray-500 font-medium">{{ app()->getLocale() == 'ar' ? 'تاريخ الولادة' : 'EDD' }}</span>
                    <span class="font-bold text-cyan-700 bg-cyan-50 px-2 py-0.5 rounded">{{ $patient->edd ?? '-' }}</span>
                </li>
                <li class="flex justify-between items-center py-2">
                    <span class="text-gray-500 font-medium" title="Gravida / Para">G / P</span>
                    <span class="font-semibold text-gray-800">{{ $patient->gravida }} / {{ $patient->para }}</span>
                </li>
                <li class="flex justify-between items-center py-2">
                    <span class="text-gray-500 font-medium">{{ app()->getLocale() == 'ar' ? 'الفصيلة' : 'Blood' }}</span>
                    <span class="font-bold text-red-600 bg-red-50 px-2.5 py-0.5 rounded border border-red-100">{{ $patient->blood_group ?? '-' }}</span>
                </li>
                <li class="flex justify-between items-center py-2">
                    <span class="text-gray-500 font-medium">BMI</span>
                    <span class="font-semibold text-gray-800">{{ $patient->bmi ?? '-' }}</span>
                </li>
                <li class="flex justify-between items-center pt-2">
                    <span class="text-gray-500 font-medium">{{ app()->getLocale() == 'ar' ? 'عملية سابقة' : 'Prev C-Section' }}</span>
                    @if($patient->previous_cs)
                        <span class="badge badge-red border border-red-200"><i class="fas fa-check text-xs mr-1 opacity-70"></i> {{ app()->getLocale() == 'ar' ? 'نعم' : 'Yes' }}</span>
                    @else
                        <span class="badge badge-green"><i class="fas fa-times text-xs mr-1 opacity-70"></i> {{ app()->getLocale() == 'ar' ? 'لا' : 'No' }}</span>
                    @endif
                </li>
            </ul>
        </div>
    </div>

    <!-- Charts Card -->
    <div class="md:col-span-2 border border-gray-100 bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow flex flex-col">
        <div class="p-5 border-b border-gray-50 flex justify-between items-center bg-slate-50 rounded-t-2xl">
            <div class="flex items-center gap-2">
                <i class="fas fa-chart-line text-cyan-600 outline outline-1 outline-cyan-200 outline-offset-2 rounded-full"></i>
                <h3 class="font-bold text-gray-800 text-lg">{{ app()->getLocale() == 'ar' ? 'المؤشرات الحيوية' : 'Vitals Chart' }}</h3>
            </div>
            
            <select id="chartSelector" class="px-3 py-1.5 text-sm bg-white border border-gray-200 rounded-lg text-gray-700 font-medium outline-none focus:border-cyan-500 shadow-sm cursor-pointer hover:border-gray-300 transition-colors">
                <option value="bp" selected>{{ app()->getLocale() == 'ar' ? 'ضغط الدم' : 'Blood Pressure' }}</option>
                <option value="weight">{{ app()->getLocale() == 'ar' ? 'الوزن' : 'Weight' }}</option>
                <option value="hb">{{ app()->getLocale() == 'ar' ? 'الهيموجلوبين' : 'Hemoglobin' }}</option>
            </select>
        </div>
        <div class="p-6 flex-1 relative min-h-[300px] flex items-center justify-center">
            @if($patient->visits->count() > 0)
                <canvas id="vitalsChart"></canvas>
            @else
                <div class="text-center text-gray-400">
                    <i class="fas fa-chart-area text-5xl mb-3 opacity-30"></i>
                    <p>{{ app()->getLocale() == 'ar' ? 'لا توجد بيانات كافية لرسم المخطط' : 'Not enough data to render chart' }}</p>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Visits Table -->
<div class="bg-white border border-gray-100 rounded-2xl shadow-sm overflow-hidden mb-8">
    <div class="p-5 border-b border-gray-50 flex items-center gap-2 bg-slate-50">
        <i class="fas fa-clipboard-list text-cyan-600 outline outline-1 outline-cyan-200 outline-offset-2 rounded-full"></i>
        <h3 class="font-bold text-gray-800 text-lg">{{ app()->getLocale() == 'ar' ? 'سجل الزيارات' : 'Visit History' }}</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="table-minimal w-full text-sm">
            <thead>
                <tr>
                    <th class="px-5 py-3.5">{{ app()->getLocale() == 'ar' ? 'التاريخ' : 'Date' }}</th>
                    <th class="px-5 py-3.5">{{ app()->getLocale() == 'ar' ? 'الوزن' : 'Weight' }}</th>
                    <th class="px-5 py-3.5">{{ app()->getLocale() == 'ar' ? 'ضغط الدم' : 'BP' }}</th>
                    <th class="px-5 py-3.5">{{ app()->getLocale() == 'ar' ? 'الخطورة' : 'Risk Level' }}</th>
                    <th class="px-5 py-3.5 text-center">{{ app()->getLocale() == 'ar' ? 'تفاصيل' : 'Details' }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @forelse($patient->visits as $visit)
                <tr class="hover:bg-slate-50 transition-colors group">
                    <td class="px-5 py-4 text-gray-600 font-medium">
                        {{ $visit->created_at->format('Y-m-d') }}
                    </td>
                    <td class="px-5 py-4 font-semibold text-gray-700">
                        {{ $visit->weight ?? '-' }} <span class="text-xs text-gray-400 font-normal">kg</span>
                    </td>
                    <td class="px-5 py-4">
                        @if($visit->bp_systolic && $visit->bp_diastolic)
                            <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded font-bold {{ $visit->bp_systolic >= 140 ? 'bg-red-50 text-red-600 border border-red-100' : 'bg-gray-100 text-gray-700' }}">
                                {{ $visit->bp_systolic }}/{{ $visit->bp_diastolic }}
                                @if($visit->bp_systolic >= 140)
                                    <i class="fas fa-exclamation-circle text-xs ml-0.5"></i>
                                @endif
                            </span>
                        @else
                            <span class="text-gray-400">-</span>
                        @endif
                    </td>
                    <td class="px-5 py-4">
                        @if($visit->risk_level == 'low')
                            <span class="badge badge-green border border-green-200 shadow-sm"><span class="w-1.5 h-1.5 rounded-full bg-green-500 inline-block mr-1 align-middle"></span> {{ app()->getLocale() == 'ar' ? 'منخفض' : 'Low' }}</span>
                        @elseif($visit->risk_level == 'moderate')
                            <span class="badge badge-yellow border border-yellow-200 shadow-sm"><span class="w-1.5 h-1.5 rounded-full bg-yellow-500 inline-block mr-1 align-middle"></span> {{ app()->getLocale() == 'ar' ? 'متوسط' : 'Moderate' }}</span>
                        @else
                            <span class="badge badge-red border border-red-200 shadow-sm"><span class="w-1.5 h-1.5 rounded-full bg-red-500 inline-block mr-1 align-middle text-blink"></span> {{ app()->getLocale() == 'ar' ? 'عالي' : 'High' }}</span>
                        @endif
                    </td>
                    <td class="px-5 py-4 text-center">
                        <div class="flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-50 text-indigo-600 hover:bg-indigo-100 transition-colors" title="{{ app()->getLocale() == 'ar' ? 'عرض التقرير' : 'View Report' }}">
                                <i class="fas fa-file-pdf text-sm"></i>
                            </a>
                            <a href="{{ route('admin.visits.edit', $visit) }}" class="w-8 h-8 flex items-center justify-center rounded-lg bg-cyan-50 text-cyan-600 hover:bg-cyan-100 transition-colors" title="{{ app()->getLocale() == 'ar' ? 'تعديل الزيارة' : 'Edit Visit' }}">
                                <i class="fas fa-edit text-sm"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-5 py-10 text-center text-gray-500">
                        <div class="flex flex-col items-center justify-center">
                            <i class="fas fa-folder-open text-3xl mb-2 text-gray-300"></i>
                            <p>{{ app()->getLocale() == 'ar' ? 'لا توجد زيارات مسجلة لهذه المريضة.' : 'No visits recorded for this patient.' }}</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
@if($patient->visits->count() > 0)
    const visits = @json($patient->visits);
    const labels = visits.map(v => new Date(v.created_at).toLocaleDateString());
    
    // Datasets
    const systolicData = visits.map(v => v.bp_systolic);
    const diastolicData = visits.map(v => v.bp_diastolic);
    const weightData = visits.map(v => v.weight);
    const hbData = visits.map(v => v.hb);
    
    // Style configurations
    const chartConfig = {
        type: 'line',
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'top', labels: { usePointStyle: true, boxWidth: 6, padding: 20, font: { family: "'Inter', sans-serif", size: 12 } } },
                tooltip: {
                    backgroundColor: 'rgba(15, 23, 42, 0.9)',
                    titleFont: { family: "'Inter', sans-serif", size: 13 },
                    bodyFont: { family: "'Inter', sans-serif", size: 14, weight: 'bold' },
                    padding: 12,
                    cornerRadius: 8,
                    displayColors: false
                }
            },
            scales: {
                y: { beginAtZero: false, grid: { color: '#f1f5f9', drawBorder: false } },
                x: { grid: { display: false, drawBorder: false } }
            },
            interaction: { mode: 'index', intersect: false },
            tension: 0.3
        }
    };

    // Initialize Chart
    const ctx = document.getElementById('vitalsChart').getContext('2d');
    let myChart = new Chart(ctx, chartConfig);
    
    // Initial Render BP
    updateChart('bp');
    
    // Handle Selector
    document.getElementById('chartSelector').addEventListener('change', function(e) {
        updateChart(e.target.value);
    });
    
    function updateChart(type) {
        let datasets = [];
        
        if(type === 'bp') {
            datasets = [
                {
                    label: 'Systolic BP (mmHg)',
                    data: systolicData,
                    borderColor: '#0e7490', // cyan-700
                    backgroundColor: 'rgba(14, 116, 144, 0.1)',
                    borderWidth: 2,
                    pointBackgroundColor: '#0e7490',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    fill: true
                },
                {
                    label: 'Diastolic BP (mmHg)',
                    data: diastolicData,
                    borderColor: '#06b6d4', // cyan-500
                    backgroundColor: 'transparent',
                    borderWidth: 2,
                    pointBackgroundColor: '#06b6d4',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    borderDash: [5, 5]
                }
            ];
            myChart.options.scales.y.suggestedMin = 60;
            myChart.options.scales.y.suggestedMax = 180;
        } 
        else if (type === 'weight') {
            datasets = [{
                label: 'Weight (kg)',
                data: weightData,
                borderColor: '#6366f1', // indigo-500
                backgroundColor: 'rgba(99, 102, 241, 0.1)',
                borderWidth: 2,
                pointBackgroundColor: '#6366f1',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 4,
                fill: true
            }];
            myChart.options.scales.y.suggestedMin = Math.min(...weightData.filter(Boolean)) - 5 || 50;
            myChart.options.scales.y.suggestedMax = Math.max(...weightData.filter(Boolean)) + 5 || 100;
        }
        else if (type === 'hb') {
            datasets = [{
                label: 'Hemoglobin (g/dL)',
                data: hbData,
                borderColor: '#e11d48', // rose-600
                backgroundColor: 'rgba(225, 29, 72, 0.1)',
                borderWidth: 2,
                pointBackgroundColor: '#e11d48',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 4,
                fill: true
            }];
            myChart.options.scales.y.suggestedMin = 7;
            myChart.options.scales.y.suggestedMax = 16;
        }
        
        myChart.data = { labels: labels, datasets: datasets };
        myChart.update();
    }
@endif
</script>
<style>
    .text-blink { animation: blink 2s linear infinite; }
    @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0.4; } }
</style>
@endsection
