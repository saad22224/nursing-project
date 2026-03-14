@extends('layouts.clinic')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <!-- Header -->
    <div class="flex items-center justify-between bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-cyan-50 text-cyan-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-calendar-plus"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold text-slate-900 tracking-tight">{{ __('clinic.add_visit') }}</h1>
                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest mt-0.5">{{ $patient->name }}</p>
            </div>
        </div>
        <a href="{{ route('clinic.patients.show', $patient) }}" class="text-slate-400 hover:text-slate-900 font-bold text-sm flex items-center gap-2 transition-colors">
            <i class="fas fa-times"></i>
            {{ app()->getLocale() == 'ar' ? 'إلغاء' : 'Cancel' }}
        </a>
    </div>

    <form action="{{ route('clinic.patients.visits.store', $patient) }}" method="POST" class="space-y-8 pb-12">
        @csrf
        
        <!-- Section: Check-up Basics -->
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 space-y-8">
            <h3 class="text-sm font-black text-slate-400 uppercase tracking-[0.2em] border-b border-slate-50 pb-4">
                <i class="fas fa-heartbeat text-rose-500 mr-2 rtl:ml-2"></i>
                {{ app()->getLocale() == 'ar' ? 'العلامات الحيوية والشكوى' : 'General check-up' }}
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.visit_date') }} *</label>
                    <input type="date" name="visit_date" required value="{{ date('Y-m-d') }}" class="input-field py-3 font-bold text-slate-700">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.bp') }}</label>
                    <input type="text" name="bp" class="input-field py-3" placeholder="120/80">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.weight') }} (kg)</label>
                    <input type="text" name="weight" class="input-field py-3" placeholder="70 kg">
                </div>

                <div class="md:col-span-3">
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.complaints') }}</label>
                    <textarea name="complaints" rows="3" class="input-field p-4" placeholder="{{ app()->getLocale() == 'ar' ? 'الشكوى الحالية للمريضة إن وجدت...' : "Patient's current complaints..." }}"></textarea>
                </div>
            </div>
        </div>

        <!-- Section: Examination & Findings -->
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 space-y-8">
            <h3 class="text-sm font-black text-slate-400 uppercase tracking-[0.2em] border-b border-slate-50 pb-4">
                <i class="fas fa-stethoscope text-cyan-600 mr-2 rtl:ml-2"></i>
                {{ app()->getLocale() == 'ar' ? 'الفحص والنتائج' : 'Clinical findings' }}
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.examination') }}</label>
                    <textarea name="examination_notes" rows="4" class="input-field p-4" placeholder="{{ app()->getLocale() == 'ar' ? 'نتائج الفحص الإكلينيكي...' : 'Clinical examination results...' }}"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.ultrasound') }}</label>
                    <textarea name="ultrasound_findings" rows="4" class="input-field p-4" placeholder="{{ app()->getLocale() == 'ar' ? 'نتائج فحص السونار...' : 'Ultrasound findings...' }}"></textarea>
                </div>
            </div>
        </div>

        <!-- Section: Plan & Rx -->
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 space-y-8">
            <h3 class="text-sm font-black text-slate-400 uppercase tracking-[0.2em] border-b border-slate-50 pb-4">
                <i class="fas fa-file-prescription text-emerald-600 mr-2 rtl:ml-2"></i>
                {{ app()->getLocale() == 'ar' ? 'التحاليل والعلاج' : 'Plan & prescription' }}
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.tests') }}</label>
                    <textarea name="tests_required" rows="4" class="input-field p-4 border-indigo-50 bg-indigo-50/10" placeholder="{{ app()->getLocale() == 'ar' ? 'التحاليل المطلوبة...' : 'Lab tests required...' }}"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.medications') }}</label>
                    <textarea name="medications" rows="4" class="input-field p-4 border-emerald-50 bg-emerald-50/10" placeholder="{{ app()->getLocale() == 'ar' ? 'الأدوية الموصوفة...' : 'Prescribed medications...' }}"></textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.next_visit') }}</label>
                    <div class="flex items-center gap-4">
                        <input type="date" name="next_visit_date" class="input-field py-3 max-w-sm">
                        <span class="text-xs text-slate-400 font-bold uppercase tracking-widest">Optional</span>
                    </div>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.notes') }}</label>
                    <textarea name="notes" rows="2" class="input-field p-4" placeholder="{{ app()->getLocale() == 'ar' ? 'ملاحظات إضافية للزيارة...' : 'Additional visit notes...' }}"></textarea>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center justify-end gap-6 pt-4">
            <a href="{{ route('clinic.patients.show', $patient) }}" class="text-slate-400 hover:text-slate-900 font-black text-xs uppercase tracking-[0.2em] transition-colors">
                {{ app()->getLocale() == 'ar' ? 'إلغاء العملية' : 'Discard' }}
            </a>
            <button type="submit" class="bg-cyan-600 text-white px-12 py-4 rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-cyan-700 transition-all shadow-xl shadow-cyan-600/10 active:scale-95 flex items-center gap-3">
                <i class="fas fa-save"></i>
                {{ __('clinic.save') }}
            </button>
        </div>
    </form>
</div>
@endsection
