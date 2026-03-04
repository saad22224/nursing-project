@extends('layouts.admin')

@section('title', app()->getLocale() == 'ar' ? 'تعديل الزيارة' : 'Edit Visit')

@section('content')
<div class="mb-6 flex justify-between items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100">
    <div class="flex-1">
        <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <div class="w-8 h-8 rounded-lg bg-indigo-50 flex items-center justify-center">
                <i class="fas fa-edit text-indigo-600"></i>
            </div>
            {{ app()->getLocale() == 'ar' ? 'تعديل بيانات الزيارة' : 'Edit Visit Record' }}
        </h2>
        <p class="text-sm text-gray-500 mt-1 ml-10">{{ app()->getLocale() == 'ar' ? 'تاريخ الزيارة:' : 'Visit Date:' }} <span class="font-semibold text-gray-700">{{ $visit->created_at->format('Y-m-d') }}</span> - {{ app()->getLocale() == 'ar' ? 'للمريضة:' : 'Patient:' }} {{ $visit->patient->name }}</p>
    </div>
    <a href="{{ route('admin.patients.show', $visit->patient_id) }}" class="btn-outline flex items-center gap-2 hover:bg-gray-50 transition-colors">
        <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}"></i>
        {{ app()->getLocale() == 'ar' ? 'العودة للملف' : 'Back to File' }}
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden text-sm">
    <div class="p-6 md:p-8">
        <form action="{{ route('admin.visits.update', $visit) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Measurements Section -->
                <div class="col-span-1 md:col-span-2 lg:col-span-3 border-b border-gray-100 pb-4 mb-2">
                    <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                        <i class="fas fa-weight-scale text-cyan-500"></i>
                        {{ app()->getLocale() == 'ar' ? 'القياسات الحيوية المُسجلة' : 'Recorded Vitals' }}
                    </h3>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'الوزن' : 'Weight' }}</label>
                    <div class="relative">
                        <input type="number" step="0.1" name="weight" value="{{ old('weight', $visit->weight) }}" class="input-minimal w-full pr-12 text-lg">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400 font-medium">kg</span>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'ضغط الدم (Systolic)' : 'BP Systolic' }}</label>
                    <div class="relative">
                        <input type="number" name="bp_systolic" value="{{ old('bp_systolic', $visit->bp_systolic) }}" class="input-minimal w-full pr-16 text-lg">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400 font-medium">mmHg</span>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'ضغط الدم (Diastolic)' : 'BP Diastolic' }}</label>
                    <div class="relative">
                        <input type="number" name="bp_diastolic" value="{{ old('bp_diastolic', $visit->bp_diastolic) }}" class="input-minimal w-full pr-16 text-lg">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400 font-medium">mmHg</span>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'السكر (اختياري)' : 'Blood Sugar' }}</label>
                    <div class="relative">
                        <input type="number" name="blood_sugar" value="{{ old('blood_sugar', $visit->blood_sugar) }}" class="input-minimal w-full pr-16 text-lg">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400 font-medium">mg/dL</span>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'الهيموجلوبين' : 'Hemoglobin (Hb)' }}</label>
                    <div class="relative">
                        <input type="number" step="0.1" name="hb" value="{{ old('hb', $visit->hb) }}" class="input-minimal w-full pr-12 text-lg">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400 font-medium">g/dL</span>
                    </div>
                </div>

                <!-- Observations -->
                <div class="col-span-1 md:col-span-2 lg:col-span-3 border-b border-gray-100 pb-4 mb-2 mt-4">
                    <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                        <i class="fas fa-stethoscope text-cyan-500"></i>
                        {{ app()->getLocale() == 'ar' ? 'الأعراض والملاحظات المحدثة' : 'Symptoms & Observations' }}
                    </h3>
                </div>

                <div class="col-span-1 md:col-span-2 lg:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <label class="flex items-center p-4 rounded-xl border border-gray-200 cursor-pointer hover:border-cyan-300 transition-colors bg-gray-50 flex-1">
                        <div class="relative flex items-center justify-center w-6 h-6 border-2 border-gray-300 rounded-md bg-white">
                            <input type="checkbox" name="fetal_movement" class="peer appearance-none absolute w-full h-full cursor-pointer rounded-md opacity-0 z-10" {{ old('fetal_movement', $visit->fetal_movement) ? 'checked' : '' }}>
                            <i class="fas fa-check text-cyan-500 text-sm opacity-0 peer-checked:opacity-100 transition-opacity absolute"></i>
                        </div>
                        <span class="ml-3 font-semibold text-gray-700">{{ app()->getLocale() == 'ar' ? 'حركة الجنين طبيعية (OK)' : 'Fetal Movement Check (OK)' }}</span>
                    </label>
                    
                    <label class="flex items-center p-4 rounded-xl border border-red-200 cursor-pointer hover:border-red-400 transition-colors bg-red-50 flex-1">
                        <div class="relative flex items-center justify-center w-6 h-6 border-2 border-red-300 rounded-md bg-white">
                            <input type="checkbox" name="vaginal_bleeding" class="peer appearance-none absolute w-full h-full cursor-pointer rounded-md opacity-0 z-10" {{ old('vaginal_bleeding', $visit->vaginal_bleeding) ? 'checked' : '' }}>
                            <i class="fas fa-check text-red-500 text-sm opacity-0 peer-checked:opacity-100 transition-opacity absolute"></i>
                        </div>
                        <span class="ml-3 font-bold text-red-700">{{ app()->getLocale() == 'ar' ? 'يوجد نزيف مهبلي' : 'Vaginal Bleeding Present' }}</span>
                    </label>
                </div>

                <div class="col-span-1 md:col-span-2 lg:col-span-3 mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        {{ app()->getLocale() == 'ar' ? 'تحديث الملاحظات والتوصيات' : 'Update Notes & Recommendations' }}
                    </label>
                    <textarea name="notes" rows="5" class="input-minimal w-full resize-none p-4">{{ old('notes', $visit->notes) }}</textarea>
                </div>
            </div>
            
            <!-- Actions -->
            <div class="pt-6 border-t border-gray-100 flex justify-between items-center mt-6">
                <!-- Delete Form -->
                <div>
                     <button type="button" onclick="if(confirm('{{ app()->getLocale() == 'ar' ? 'هل أنت متأكد من مسح هذه الزيارة نهائياً؟' : 'Are you sure you want to delete this visit permanently?' }}')) { document.getElementById('delete-visit').submit(); }" class="text-xs font-semibold text-red-600 hover:text-red-800 bg-red-50 hover:bg-red-100 px-4 py-2 rounded-lg flex items-center gap-2 transition-colors border border-red-200">
                        <i class="fas fa-trash-alt"></i> {{ app()->getLocale() == 'ar' ? 'حذف الزيارة بشكل دائم' : 'Delete Visit Permanently' }}
                    </button>
                </div>

                <div class="flex gap-3">
                    <a href="{{ route('admin.patients.show', $visit->patient_id) }}" class="px-5 py-2.5 rounded-lg font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 transition-colors">
                        {{ app()->getLocale() == 'ar' ? 'إلغاء' : 'Cancel' }}
                    </a>
                    <button type="submit" class="btn-primary flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 px-6 py-2.5 rounded-lg shadow-sm hover:shadow-md transition-all">
                        <i class="fas fa-save"></i>
                        {{ app()->getLocale() == 'ar' ? 'حفظ التحديث' : 'Update Visit details' }}
                    </button>
                </div>
            </div>
        </form>
        
        <!-- Hidden Delete Form -->
        <form id="delete-visit" action="{{ route('admin.visits.destroy', $visit) }}" method="POST" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </div>
</div>
@endsection
