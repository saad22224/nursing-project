@extends('layouts.clinic')

@section('content')
<div class="space-y-6" data-aos="fade-up">
    <!-- Breadcrumbs & Actions -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <nav class="text-sm font-bold text-gray-400">
            <ol class="flex items-center gap-2">
                <li><a href="{{ route('clinic.dashboard') }}" class="hover:text-cyan-600">{{ __('clinic.dashboard') }}</a></li>
                <li><i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-[10px]"></i></li>
                <li><a href="{{ route('clinic.patients.index') }}" class="hover:text-cyan-600">{{ __('clinic.patients') }}</a></li>
                <li><i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-[10px]"></i></li>
                <li class="text-gray-900">{{ $patient->name }}</li>
            </ol>
        </nav>
        <a href="{{ route('clinic.patients.visits.create', $patient) }}" class="btn-primary">
            <i class="fas fa-plus-circle"></i>
            {{ __('clinic.add_visit') }}
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Sidebar Profile -->
        <div class="space-y-5">
            <!-- Patient Card -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="bg-gradient-to-br from-cyan-600 to-cyan-700 p-6 text-center">
                    <div class="w-20 h-20 rounded-2xl bg-white/20 text-white flex items-center justify-center text-3xl font-bold mx-auto mb-3 border-2 border-white/30 shadow-lg">
                        {{ strtoupper(substr($patient->name, 0, 1)) }}
                    </div>
                    <h2 class="text-xl font-bold text-white">{{ $patient->name }}</h2>
                    <p class="text-cyan-100 text-sm mt-1">{{ $patient->phone ?: (app()->getLocale() == 'ar' ? 'بدون هاتف' : 'No phone') }}</p>
                </div>
                <div class="grid grid-cols-3 divide-x divide-slate-100 rtl:divide-x-reverse">
                    <div class="p-4 text-center">
                        <p class="text-[10px] text-slate-400 font-bold uppercase mb-1">{{ __('clinic.age') }}</p>
                        <p class="text-lg font-extrabold text-slate-800">{{ $patient->age ?: '-' }}</p>
                    </div>
                    <div class="p-4 text-center">
                        <p class="text-[10px] text-slate-400 font-bold uppercase mb-1">{{ app()->getLocale() == 'ar' ? 'الطول' : 'Height' }}</p>
                        <p class="text-lg font-extrabold text-slate-800">{{ $patient->height ?: '-' }}</p>
                    </div>
                    <div class="p-4 text-center bg-cyan-50/50">
                        <p class="text-[10px] text-cyan-500 font-bold uppercase mb-1">{{ __('clinic.bmi') }}</p>
                        <p class="text-lg font-extrabold text-cyan-700">{{ $patient->bmi ?: '-' }}</p>
                    </div>
                </div>
            </div>

            <!-- OB History -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5">
                <h3 class="font-bold text-slate-800 pb-3 mb-4 border-b border-slate-100 flex items-center gap-2">
                    <span class="w-1 h-5 bg-cyan-500 rounded-full inline-block"></span>
                    {{ __('clinic.ob_history') }}
                </h3>
                <div class="grid grid-cols-4 gap-2 mb-4">
                    <div class="bg-cyan-50 rounded-xl p-3 text-center border border-cyan-100">
                        <p class="text-xl font-extrabold text-cyan-700">{{ $patient->gravida }}</p>
                        <p class="text-[9px] text-cyan-500 font-bold uppercase mt-0.5">{{ app()->getLocale() == 'ar' ? 'حامل' : 'Gravida' }}</p>
                    </div>
                    <div class="bg-indigo-50 rounded-xl p-3 text-center border border-indigo-100">
                        <p class="text-xl font-extrabold text-indigo-700">{{ $patient->para }}</p>
                        <p class="text-[9px] text-indigo-500 font-bold uppercase mt-0.5">{{ app()->getLocale() == 'ar' ? 'ولادات' : 'Para' }}</p>
                    </div>
                    <div class="bg-rose-50 rounded-xl p-3 text-center border border-rose-100">
                        <p class="text-xl font-extrabold text-rose-700">{{ $patient->abortion }}</p>
                        <p class="text-[9px] text-rose-500 font-bold uppercase mt-0.5">{{ app()->getLocale() == 'ar' ? 'إجهاض' : 'Abort' }}</p>
                    </div>
                    <div class="bg-emerald-50 rounded-xl p-3 text-center border border-emerald-100">
                        <p class="text-xl font-extrabold text-emerald-700">{{ $patient->living }}</p>
                        <p class="text-[9px] text-emerald-500 font-bold uppercase mt-0.5">{{ app()->getLocale() == 'ar' ? 'أحياء' : 'Living' }}</p>
                    </div>
                </div>
                <div class="space-y-3 pt-3 border-t border-slate-100">
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-500 font-medium">{{ __('clinic.lmp') }}</span>
                        <span class="font-bold text-slate-800">{{ $patient->lmp ? $patient->lmp->format('Y-m-d') : '-' }}</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-cyan-600 font-bold">{{ __('clinic.edd') }}</span>
                        <span class="font-bold text-cyan-700 bg-cyan-50 px-3 py-1 rounded-lg border border-cyan-100">
                            {{ $patient->edd ? $patient->edd->format('Y-m-d') : '-' }}
                        </span>
                    </div>
                    @if($patient->previous_cs)
                    <div class="bg-red-50 text-red-700 px-3 py-2 rounded-xl text-xs font-bold border border-red-100 text-center flex items-center justify-center gap-2">
                        <i class="fas fa-exclamation-triangle"></i>
                        {{ __('clinic.previous_cs') }}
                    </div>
                    @endif
                </div>
            </div>

            @if($patient->medical_history)
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5">
                <h3 class="font-bold text-slate-800 pb-3 mb-3 border-b border-slate-100 flex items-center gap-2">
                    <span class="w-1 h-5 bg-amber-500 rounded-full inline-block"></span>
                    {{ __('clinic.medical_history') }}
                </h3>
                <p class="text-sm text-slate-600 leading-relaxed">{{ $patient->medical_history }}</p>
            </div>
            @endif
        </div>

        <!-- Visits History -->
        <div class="lg:col-span-2 space-y-5">
            <!-- Visits header -->
            <div class="flex items-center justify-between bg-white rounded-2xl border border-slate-100 shadow-sm px-6 py-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-cyan-50 text-cyan-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-bold text-slate-900">{{ __('clinic.visits') }}</h2>
                        <p class="text-[11px] text-slate-400 font-bold uppercase">{{ $patient->visits->count() }} {{ app()->getLocale() == 'ar' ? 'زيارة مسجلة' : 'recorded visits' }}</p>
                    </div>
                </div>
                <span class="w-9 h-9 rounded-xl bg-cyan-600 text-white flex items-center justify-center font-extrabold text-sm shadow-md shadow-cyan-500/20">
                    {{ $patient->visits->count() }}
                </span>
            </div>

            <div class="space-y-4">
                @forelse($patient->visits()->latest('visit_date')->get() as $visit)
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-cyan-200 hover:shadow-md transition-all duration-200 overflow-hidden">
                    <!-- Visit top bar -->
                    <div class="flex items-center justify-between px-6 py-4 border-b border-slate-50 bg-slate-50/60">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white flex flex-col items-center justify-center font-bold text-slate-600 border border-slate-100 shadow-sm">
                                <span class="text-[10px] uppercase leading-none text-cyan-500 font-black">{{ $visit->visit_date->format('M') }}</span>
                                <span class="text-xl leading-none font-extrabold">{{ $visit->visit_date->format('d') }}</span>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 font-bold">{{ $visit->visit_date->format('Y-m-d') }}</p>
                                <h4 class="font-bold text-slate-900">{{ $visit->complaints ?: (app()->getLocale() == 'ar' ? 'متابعة دورية' : 'Routine Check-up') }}</h4>
                            </div>
                        </div>
                        <!-- Vitals chips -->
                        <div class="flex items-center gap-3">
                            @if($visit->bp)
                            <div class="text-center bg-white border border-slate-100 rounded-xl px-3 py-2 shadow-sm">
                                <p class="text-[9px] text-slate-400 font-bold uppercase">{{ __('clinic.bp') }}</p>
                                <p class="font-extrabold text-slate-800 text-sm leading-tight">{{ $visit->bp }}</p>
                            </div>
                            @endif
                            @if($visit->weight)
                            <div class="text-center bg-white border border-slate-100 rounded-xl px-3 py-2 shadow-sm">
                                <p class="text-[9px] text-slate-400 font-bold uppercase">{{ __('clinic.weight') }}</p>
                                <p class="font-extrabold text-slate-800 text-sm leading-tight">{{ $visit->weight }} <span class="text-[9px] text-slate-400">kg</span></p>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Visit body -->
                    @if($visit->medications || $visit->tests_required)
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        @if($visit->medications)
                        <div class="px-6 py-4 border-b md:border-b-0 md:border-e border-slate-50">
                            <p class="text-[10px] text-emerald-600 font-black uppercase mb-2 flex items-center gap-1.5">
                                <i class="fas fa-pills"></i>
                                {{ __('clinic.medications') }}
                            </p>
                            <p class="text-sm text-slate-700 font-medium leading-relaxed">{{ $visit->medications }}</p>
                        </div>
                        @endif
                        @if($visit->tests_required)
                        <div class="px-6 py-4">
                            <p class="text-[10px] text-indigo-600 font-black uppercase mb-2 flex items-center gap-1.5">
                                <i class="fas fa-vial"></i>
                                {{ __('clinic.tests') }}
                            </p>
                            <p class="text-sm text-slate-700 font-medium leading-relaxed">{{ $visit->tests_required }}</p>
                        </div>
                        @endif
                    </div>
                    @endif

                    <!-- Visit footer -->
                    <div class="flex items-center justify-between px-6 py-3 border-t border-slate-50 bg-slate-50/30">
                        @if($visit->next_visit_date)
                        <div class="flex items-center gap-2 text-xs font-bold text-cyan-600 bg-cyan-50 px-3 py-1.5 rounded-lg border border-cyan-100">
                            <i class="fas fa-calendar-check"></i>
                            {{ __('clinic.next_visit') }}: {{ $visit->next_visit_date->format('Y-m-d') }}
                        </div>
                        @else
                        <div></div>
                        @endif
                        <a href="{{ route('clinic.patients.visits.show', [$patient, $visit]) }}" class="flex items-center gap-2 text-xs font-bold text-slate-500 hover:text-cyan-600 bg-white hover:bg-cyan-50 px-4 py-2 rounded-xl border border-slate-100 hover:border-cyan-200 transition-all">
                            {{ app()->getLocale() == 'ar' ? 'عرض التقرير' : 'View Report' }}
                            <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-[10px]"></i>
                        </a>
                    </div>
                </div>
                @empty
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-16 text-center">
                    <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center mx-auto mb-4 border border-slate-100">
                        <i class="fas fa-calendar-times text-2xl text-slate-300"></i>
                    </div>
                    <p class="font-bold text-slate-400 uppercase tracking-widest text-sm">{{ app()->getLocale() == 'ar' ? 'لا يوجد سجل زيارات حتى الآن' : 'No visits recorded yet' }}</p>
                    <a href="{{ route('clinic.patients.visits.create', $patient) }}" class="mt-4 inline-flex items-center gap-2 btn-primary text-sm">
                        <i class="fas fa-plus-circle"></i>
                        {{ __('clinic.add_visit') }}
                    </a>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
