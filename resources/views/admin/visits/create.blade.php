@extends('layouts.admin')

@section('title', app()->getLocale() == 'ar' ? 'تسجيل زيارة جديدة' : 'Add New Visit')

@section('content')
<div class="mb-6 flex justify-between items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100">
    <div class="flex-1">
        <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <div class="w-8 h-8 rounded-lg bg-cyan-50 flex items-center justify-center">
                <i class="fas fa-notes-medical text-cyan-600"></i>
            </div>
            {{ app()->getLocale() == 'ar' ? 'تسجيل متابعة / زيارة جديدة' : 'Record New Visit' }}
        </h2>
        <p class="text-sm text-gray-500 mt-1 ml-10">{{ app()->getLocale() == 'ar' ? 'للمريضة:' : 'For Patient:' }} <span class="font-semibold text-gray-700">{{ $patient->name }}</span> (ID: {{ Str::padLeft($patient->id, 4, '0') }})</p>
    </div>
    <a href="{{ route('admin.patients.show', $patient) }}" class="btn-outline flex items-center gap-2 hover:bg-gray-50 transition-colors">
        <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}"></i>
        {{ app()->getLocale() == 'ar' ? 'العودة للملف' : 'Back to File' }}
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden text-sm">
    <div class="p-6 md:p-8">
        <form action="{{ route('admin.patients.visits.store', $patient) }}" method="POST" class="space-y-6">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Physical Measurements -->
                <div class="col-span-1 md:col-span-2 lg:col-span-3 border-b border-gray-100 pb-4 mb-2 mt-2">
                    <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                        <i class="fas fa-weight-scale text-cyan-500"></i>
                        {{ app()->getLocale() == 'ar' ? 'القياسات الحيوية' : 'Vitals & Measurements' }}
                    </h3>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'الوزن' : 'Weight' }}</label>
                    <div class="relative">
                        <input type="number" step="0.1" name="weight" value="{{ old('weight') }}" class="input-minimal w-full pr-12 text-lg">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400 font-medium">kg</span>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'ضغط الدم (Systolic)' : 'BP Systolic' }}</label>
                    <div class="relative">
                        <input type="number" name="bp_systolic" value="{{ old('bp_systolic') }}" class="input-minimal w-full pr-16 text-lg">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400 font-medium">mmHg</span>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'ضغط الدم (Diastolic)' : 'BP Diastolic' }}</label>
                    <div class="relative">
                        <input type="number" name="bp_diastolic" value="{{ old('bp_diastolic') }}" class="input-minimal w-full pr-16 text-lg">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400 font-medium">mmHg</span>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'السكر (اختياري)' : 'Blood Sugar' }}</label>
                    <div class="relative">
                        <input type="number" name="blood_sugar" value="{{ old('blood_sugar') }}" class="input-minimal w-full pr-16 text-lg">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400 font-medium">mg/dL</span>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'الهيموجلوبين' : 'Hemoglobin (Hb)' }}</label>
                    <div class="relative">
                        <input type="number" step="0.1" name="hb" value="{{ old('hb') }}" class="input-minimal w-full pr-12 text-lg">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400 font-medium">g/dL</span>
                    </div>
                </div>

                <!-- Symptoms & Observations -->
                <div class="col-span-1 md:col-span-2 lg:col-span-3 border-b border-gray-100 pb-4 mb-2 mt-4">
                    <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                        <i class="fas fa-stethoscope text-cyan-500"></i>
                        {{ app()->getLocale() == 'ar' ? 'الأعراض والملاحظات' : 'Symptoms & Observations' }}
                    </h3>
                </div>

                <div class="col-span-1 md:col-span-2 lg:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <label class="flex items-center p-4 rounded-xl border border-gray-200 cursor-pointer hover:border-cyan-300 transition-colors bg-gray-50 flex-1">
                        <div class="relative flex items-center justify-center w-6 h-6 border-2 border-gray-300 rounded-md bg-white">
                            <input type="checkbox" name="fetal_movement" class="peer appearance-none absolute w-full h-full cursor-pointer rounded-md opacity-0 z-10" checked>
                            <i class="fas fa-check text-cyan-500 text-sm opacity-0 peer-checked:opacity-100 transition-opacity absolute"></i>
                        </div>
                        <span class="ml-3 font-semibold text-gray-700">{{ app()->getLocale() == 'ar' ? 'حركة الجنين طبيعية (Fetal Movement OK)' : 'Fetal Movement Check (OK)' }}</span>
                    </label>
                    
                    <label class="flex items-center p-4 rounded-xl border border-red-200 cursor-pointer hover:border-red-400 transition-colors bg-red-50 flex-1">
                        <div class="relative flex items-center justify-center w-6 h-6 border-2 border-red-300 rounded-md bg-white">
                            <input type="checkbox" name="vaginal_bleeding" class="peer appearance-none absolute w-full h-full cursor-pointer rounded-md opacity-0 z-10">
                            <i class="fas fa-check text-red-500 text-sm opacity-0 peer-checked:opacity-100 transition-opacity absolute"></i>
                        </div>
                        <span class="ml-3 font-bold text-red-700">{{ app()->getLocale() == 'ar' ? 'يوجد نزيف مهبلي' : 'Vaginal Bleeding Present' }} <span class="text-xs font-normal">({{ app()->getLocale() == 'ar' ? 'علامة خطورة' : 'Danger sign' }})</span></span>
                    </label>
                </div>

                <div class="col-span-1 md:col-span-2 lg:col-span-3 mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        {{ app()->getLocale() == 'ar' ? 'ملاحظات وتوصيات الطبيب (تظهر في التقرير)' : 'Doctor Notes & Recommendations' }}
                    </label>
                    <textarea name="notes" rows="5" class="input-minimal w-full resize-none p-4 placeholder-gray-300" placeholder="{{ app()->getLocale() == 'ar' ? 'سجل هنا أي أدوية، نصائح، أو ملاحظات خاصة بهذه الزيارة...' : 'Record any medications, advice, or observation for this visit...' }}">{{ old('notes') }}</textarea>
                </div>
            </div>
            
            <!-- Submit Area -->
            <div class="pt-6 border-t border-gray-100 flex justify-between items-center mt-6">
                <div class="flex items-center gap-2 text-cyan-700 bg-cyan-50 px-4 py-2 rounded-lg font-medium text-xs">
                    <i class="fas fa-robot text-cyan-500"></i> {{ app()->getLocale() == 'ar' ? 'سيقوم النظام بحساب درجة الخطورة تلقائياً بناءً على هذه البيانات والبيانات التاريخية.' : 'Risk score will be calculated automatically.' }}
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('admin.patients.show', $patient) }}" class="px-5 py-2.5 rounded-lg font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 transition-colors">
                        {{ app()->getLocale() == 'ar' ? 'إلغاء' : 'Cancel' }}
                    </a>
                    <button type="submit" class="btn-primary px-8 py-2.5 rounded-lg flex items-center gap-2 shadow-sm hover:shadow-md transition-all">
                        <i class="fas fa-save"></i>
                        {{ app()->getLocale() == 'ar' ? 'تسجيل الزيارة' : 'Save Visit' }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
