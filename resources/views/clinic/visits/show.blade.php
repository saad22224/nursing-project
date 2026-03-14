@extends('layouts.clinic')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <!-- Breadcrumbs -->
    <div class="flex items-center justify-between bg-white p-6 rounded-2xl shadow-sm border border-slate-100 print:hidden">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-slate-50 text-slate-400 rounded-xl flex items-center justify-center">
                <i class="fas fa-file-medical-alt"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold text-slate-900 tracking-tight">{{ app()->getLocale() == 'ar' ? 'تقرير الزيارة' : 'Visit Report' }}</h1>
                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest mt-0.5">{{ $patient->name }}</p>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button onclick="window.print()" class="text-slate-400 hover:text-slate-900 font-bold text-sm flex items-center gap-2 transition-colors">
                <i class="fas fa-print"></i>
                {{ app()->getLocale() == 'ar' ? 'طباعة' : 'Print' }}
            </button>
            <a href="{{ route('clinic.patients.show', $patient) }}" class="bg-slate-50 text-slate-600 px-4 py-2 rounded-xl text-sm font-bold border border-slate-100 hover:bg-slate-100 transition-colors">
                {{ app()->getLocale() == 'ar' ? 'رجوع' : 'Back' }}
            </a>
        </div>
    </div>

    <!-- Main Report Card -->
    <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden print:border-none print:shadow-none">
        <!-- Report Header -->
        <div class="p-8 bg-slate-900 text-white flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-5">
                <div class="w-16 h-16 rounded-2xl bg-cyan-600 flex items-center justify-center text-3xl shadow-lg">
                    <i class="fas fa-notes-medical"></i>
                </div>
                <div>
                    <h2 class="text-3xl font-bold tracking-tight">{{ $patient->name }}</h2>
                    <p class="text-cyan-500 text-xs font-black uppercase tracking-[0.2em] mt-1">{{ app()->getLocale() == 'ar' ? 'ملف متابعة طبية' : 'CLINICAL FOLLOW-UP' }}</p>
                </div>
            </div>
            <div class="text-center md:text-right">
                <p class="text-[10px] text-slate-400 font-black uppercase tracking-widest">{{ __('clinic.visit_date') }}</p>
                <p class="text-2xl font-black text-cyan-500">{{ $visit->visit_date->format('Y-m-d') }}</p>
            </div>
        </div>

        <div class="p-8 lg:p-12 space-y-12">
            <!-- Vitals Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                    <p class="text-[10px] text-slate-400 font-black uppercase tracking-widest mb-2">{{ __('clinic.bp') }}</p>
                    <p class="text-xl font-black text-slate-800">{{ $visit->bp ?: '--/--' }}</p>
                </div>
                <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                    <p class="text-[10px] text-slate-400 font-black uppercase tracking-widest mb-2">{{ __('clinic.weight') }}</p>
                    <p class="text-xl font-black text-slate-800">{{ $visit->weight ?: '--' }} <span class="text-xs text-slate-400">kg</span></p>
                </div>
                <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100">
                    <p class="text-[10px] text-slate-400 font-black uppercase tracking-widest mb-2">{{ __('clinic.age') }}</p>
                    <p class="text-xl font-black text-slate-800">{{ $patient->age ?: '--' }}</p>
                </div>
                <div class="bg-rose-50/50 p-5 rounded-2xl border border-rose-100">
                    <p class="text-[10px] text-rose-400 font-black uppercase tracking-widest mb-2">{{ __('clinic.blood_group') }}</p>
                    <p class="text-xl font-black text-rose-700">{{ $patient->blood_group ?: '--' }}</p>
                </div>
            </div>

            <!-- Medical Details -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="space-y-10">
                    <section>
                        <h3 class="text-sm font-black text-slate-900 border-b border-slate-100 pb-3 mb-4 uppercase tracking-widest flex items-center gap-3">
                            <span class="w-1 h-5 bg-cyan-600 rounded-full"></span>
                            {{ __('clinic.complaints') }}
                        </h3>
                        <p class="text-slate-600 leading-relaxed font-medium bg-slate-50/50 p-6 rounded-2xl italic border border-slate-50">
                            {{ $visit->complaints ?: (app()->getLocale() == 'ar' ? 'لا توجد شكوى مسجلة' : 'No complaints recorded') }}
                        </p>
                    </section>

                    <section>
                        <h3 class="text-sm font-black text-slate-900 border-b border-slate-100 pb-3 mb-4 uppercase tracking-widest flex items-center gap-3">
                            <span class="w-1 h-5 bg-cyan-600 rounded-full"></span>
                            {{ __('clinic.examination') }}
                        </h3>
                        <div class="text-slate-700 leading-relaxed whitespace-pre-line bg-white border border-slate-100 p-6 rounded-2xl min-h-[100px] text-sm">
                            {{ $visit->examination_notes ?: '--' }}
                        </div>
                    </section>

                    <section>
                        <h3 class="text-sm font-black text-slate-900 border-b border-slate-100 pb-3 mb-4 uppercase tracking-widest flex items-center gap-3">
                            <span class="w-1 h-5 bg-cyan-600 rounded-full"></span>
                            {{ __('clinic.ultrasound') }}
                        </h3>
                        <div class="text-slate-700 leading-relaxed whitespace-pre-line bg-white border border-slate-100 p-6 rounded-2xl min-h-[100px] text-sm">
                            {{ $visit->ultrasound_findings ?: '--' }}
                        </div>
                    </section>
                </div>

                <div class="space-y-10">
                    <div class="p-8 bg-emerald-50 rounded-[2rem] border border-emerald-100">
                        <h3 class="text-xs font-black text-emerald-800 mb-6 uppercase tracking-widest flex items-center gap-3">
                            <i class="fas fa-pills text-lg"></i>
                            {{ __('clinic.medications') }}
                        </h3>
                        <div class="text-emerald-900 font-bold whitespace-pre-line leading-loose text-sm">
                            {{ $visit->medications ?: (app()->getLocale() == 'ar' ? 'لا يوجد أدوية موصوفة' : 'No medications prescribed') }}
                        </div>
                    </div>

                    <div class="p-8 bg-indigo-50 rounded-[2rem] border border-indigo-100">
                        <h3 class="text-xs font-black text-indigo-800 mb-6 uppercase tracking-widest flex items-center gap-3">
                            <i class="fas fa-vial text-lg"></i>
                            {{ __('clinic.tests') }}
                        </h3>
                        <div class="text-indigo-900 font-bold whitespace-pre-line leading-loose text-sm">
                            {{ $visit->tests_required ?: (app()->getLocale() == 'ar' ? 'لا توجد تحاليل مطلوبة' : 'No lab tests required') }}
                        </div>
                    </div>

                    @if($visit->next_visit_date)
                    <div class="p-8 bg-slate-900 rounded-[2rem] text-white shadow-xl shadow-slate-900/10">
                        <h3 class="text-[10px] font-black uppercase tracking-[0.2em] mb-2 opacity-50">{{ __('clinic.next_visit') }}</h3>
                        <p class="text-3xl font-black text-cyan-500">{{ $visit->next_visit_date->format('Y-m-d') }}</p>
                        <div class="mt-4 flex items-center gap-2">
                            <div class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></div>
                            <span class="text-xs font-bold text-slate-400 capitalize">{{ $visit->next_visit_date->diffForHumans() }}</span>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Footer Report Info -->
            <div class="pt-12 border-t border-slate-100 flex flex-col items-center text-center gap-4">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">MATERNIQ CLINIC MANAGEMENT SYSTEM &bull; REPORT GENERATED ON {{ date('Y-m-d H:i') }}</p>
                <div class="w-12 h-1 bg-slate-100 rounded-full"></div>
            </div>
        </div>
    </div>
</div>

<style>
@media print {
    nav, aside, header, footer, button, .btn-primary, .print\:hidden { display: none !important; }
    main { padding: 0 !important; margin: 0 !important; }
    .max-w-4xl { max-width: 100% !important; }
    body { background: white !important; }
    .bg-white { border: none !important; box-shadow: none !important; }
    .rounded-[2rem], .rounded-2xl { border-radius: 0 !important; }
}
</style>
@endsection
