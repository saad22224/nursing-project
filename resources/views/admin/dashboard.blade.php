@extends('layouts.admin')

@section('title', app()->getLocale() == 'ar' ? 'لوحة التحكم' : 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center justify-between hover:border-cyan-200 transition-colors">
        <div>
            <p class="text-sm font-medium text-gray-500 mb-1">{{ app()->getLocale() == 'ar' ? 'إجمالي المرضى' : 'Total Patients' }}</p>
            <h3 class="text-3xl font-bold text-gray-800">{{ $totalPatients }}</h3>
        </div>
        <div class="w-12 h-12 rounded-full bg-cyan-50 flex items-center justify-center">
            <i class="fas fa-users text-cyan-600 text-xl"></i>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center justify-between hover:border-cyan-200 transition-colors">
        <div>
            <p class="text-sm font-medium text-gray-500 mb-1">{{ app()->getLocale() == 'ar' ? 'إجمالي الزيارات' : 'Total Visits' }}</p>
            <h3 class="text-3xl font-bold text-gray-800">{{ $totalVisits }}</h3>
        </div>
        <div class="w-12 h-12 rounded-full bg-indigo-50 flex items-center justify-center">
            <i class="fas fa-notes-medical text-indigo-600 text-xl"></i>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center justify-between hover:border-red-200 transition-colors">
        <div>
            <p class="text-sm font-medium text-gray-500 mb-1">{{ app()->getLocale() == 'ar' ? 'الحالات العالية الخطورة' : 'High Risk Cases' }}</p>
            <h3 class="text-3xl font-bold text-red-600">{{ $highRiskPatients }}</h3>
        </div>
        <div class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center">
            <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
        </div>
    </div>
</div>

<div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden mb-8">
    <div class="p-6 border-b border-gray-100 flex items-center justify-between">
        <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
            <i class="fas fa-clock text-cyan-500"></i>
            {{ app()->getLocale() == 'ar' ? 'أحدث الزيارات' : 'Latest Visits' }}
        </h3>
        <a href="{{ route('admin.patients.index') }}" class="text-sm text-cyan-600 font-medium hover:text-cyan-700">
            {{ app()->getLocale() == 'ar' ? 'عرض الكل' : 'View All' }}
            <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} ml-1"></i>
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="table-minimal w-full text-sm">
            <thead>
                <tr>
                    <th class="px-6 py-4">{{ app()->getLocale() == 'ar' ? 'المريض' : 'Patient' }}</th>
                    <th class="px-6 py-4">{{ app()->getLocale() == 'ar' ? 'التاريخ' : 'Date' }}</th>
                    <th class="px-6 py-4">{{ app()->getLocale() == 'ar' ? 'الخطورة' : 'Risk Level' }}</th>
                    <th class="px-6 py-4">{{ app()->getLocale() == 'ar' ? 'إجراء' : 'Action' }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($latestVisits as $visit)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-gray-800">
                        {{ $visit->patient->name }}
                        <div class="text-xs text-gray-500 mt-1">ID: {{ Str::padLeft($visit->patient->id, 4, '0') }}</div>
                    </td>
                    <td class="px-6 py-4 text-gray-600">{{ $visit->created_at->format('Y-m-d') }}</td>
                    <td class="px-6 py-4">
                        @if($visit->risk_level == 'low')
                            <span class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-medium bg-green-50 text-green-700 border border-green-200">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                {{ app()->getLocale() == 'ar' ? 'منخفض' : 'Low' }}
                            </span>
                        @elseif($visit->risk_level == 'moderate')
                            <span class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-medium bg-yellow-50 text-yellow-700 border border-yellow-200">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span>
                                {{ app()->getLocale() == 'ar' ? 'متوسط' : 'Moderate' }}
                            </span>
                        @else
                            <span class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-medium bg-red-50 text-red-700 border border-red-200">
                                <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span>
                                {{ app()->getLocale() == 'ar' ? 'عالي' : 'High' }}
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('admin.patients.show', $visit->patient_id) }}" class="text-cyan-600 hover:text-cyan-800 font-medium">
                            {{ app()->getLocale() == 'ar' ? 'التفاصيل' : 'Details' }}
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                        <div class="flex flex-col items-center justify-center">
                            <i class="fas fa-inbox text-4xl text-gray-300 mb-3"></i>
                            <p>{{ app()->getLocale() == 'ar' ? 'لا توجد زيارات مسجلة بعد.' : 'No visits recorded yet.' }}</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
