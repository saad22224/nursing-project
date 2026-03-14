@extends('layouts.clinic')

@section('content')
<div class="space-y-8">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 tracking-tight">{{ __('clinic.dashboard') }}</h1>
            <p class="text-slate-500 font-medium mt-1">{{ app()->getLocale() == 'ar' ? 'مرحباً دكتور، إليك ملخص نشاط العيادة اليوم' : 'Welcome Doctor, here is your clinic activity summary' }}</p>
        </div>
        <div class="flex gap-3">
            <a href="{{ route('clinic.patients.create') }}" class="btn-primary">
                <i class="fas fa-plus"></i>
                {{ __('clinic.add_patient') }}
            </a>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-5 group hover:border-cyan-200 transition-colors">
            <div class="w-14 h-14 rounded-2xl bg-cyan-50 text-cyan-600 flex items-center justify-center text-2xl shadow-inner">
                <i class="fas fa-users"></i>
            </div>
            <div>
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-1">{{ __('clinic.total_patients') }}</p>
                <p class="text-3xl font-extrabold text-slate-900 tracking-tight">{{ $patientsCount }}</p>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-5 group hover:border-indigo-200 transition-colors">
            <div class="w-14 h-14 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-2xl shadow-inner">
                <i class="fas fa-calendar-check"></i>
            </div>
            <div>
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-1">{{ __('clinic.today_visits') }}</p>
                <p class="text-3xl font-extrabold text-slate-900 tracking-tight">{{ $todayVisits }}</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-5 group hover:border-emerald-200 transition-colors">
            <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-2xl shadow-inner">
                <i class="fas fa-clock"></i>
            </div>
            <div>
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-1">{{ app()->getLocale() == 'ar' ? 'آخر نشاط' : 'LAST ACTIVITY' }}</p>
                <p class="text-lg font-extrabold text-slate-900 truncate uppercase">{{ $recentPatients->first() ? $recentPatients->first()->created_at->diffForHumans() : '-' }}</p>
            </div>
        </div>
    </div>

    <!-- Recent Patients Table -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex items-center justify-between">
            <h2 class="text-xl font-bold text-slate-900 tracking-tight">{{ __('clinic.recent_patients') }}</h2>
            <a href="{{ route('clinic.patients.index') }}" class="text-cyan-600 font-bold text-sm hover:underline">
                {{ app()->getLocale() == 'ar' ? 'عرض السجل الكامل' : 'View Full Archive' }}
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}">
                <thead>
                    <tr class="bg-slate-50 text-slate-400 text-[10px] font-bold uppercase tracking-widest">
                        <th class="px-8 py-4">{{ __('clinic.clinic_name') }}</th>
                        <th class="px-8 py-4">{{ __('clinic.phone') }}</th>
                        <th class="px-8 py-4 text-center">{{ __('clinic.ob_history') }}</th>
                        <th class="px-8 py-4"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($recentPatients as $p)
                    <tr class="hover:bg-slate-50/50 transition-colors group">
                        <td class="px-8 py-5">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-xl bg-slate-100 group-hover:bg-cyan-600 group-hover:text-white transition-all flex items-center justify-center font-bold text-slate-400">
                                    {{ strtoupper(substr($p->name, 0, 1)) }}
                                </div>
                                <div>
                                    <p class="font-bold text-slate-900 leading-none mb-1">{{ $p->name }}</p>
                                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">{{ $p->phone ?: (app()->getLocale() == 'ar' ? 'بدون هاتف' : 'No Phone') }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm font-bold text-slate-600 italic">{{ $p->phone ?: '-' }}</td>
                        <td class="px-8 py-5 text-center">
                            <div class="flex items-center justify-center gap-1.5">
                                <span class="bg-slate-50 text-slate-500 px-2 py-0.5 rounded text-[10px] font-bold border border-slate-200">G{{ $p->gravida }}</span>
                                <span class="bg-slate-50 text-slate-500 px-2 py-0.5 rounded text-[10px] font-bold border border-slate-200">P{{ $p->para }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-right">
                            <a href="{{ route('clinic.patients.show', $p) }}" class="w-10 h-10 inline-flex items-center justify-center rounded-xl bg-white border border-slate-100 shadow-sm text-slate-400 hover:text-cyan-600 hover:border-cyan-600 transition-all">
                                <i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-xs"></i>
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-8 py-16 text-center">
                            <p class="text-slate-300 font-bold uppercase tracking-[0.2em] text-xs">{{ app()->getLocale() == 'ar' ? 'قاعدة البيانات فارغة حالياً' : 'Database is currently empty' }}</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
