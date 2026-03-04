@extends('layouts.admin')

@section('title', app()->getLocale() == 'ar' ? 'تعديل بيانات مريضة' : 'Edit Patient')

@section('content')
<div class="mb-6 flex justify-between items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100">
    <div class="flex-1">
        <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <div class="w-8 h-8 rounded-lg bg-indigo-50 flex items-center justify-center">
                <i class="fas fa-user-edit text-indigo-600"></i>
            </div>
            {{ app()->getLocale() == 'ar' ? 'تعديل بيانات المريضة' : 'Edit Patient Record' }}
        </h2>
    </div>
    <a href="{{ route('admin.patients.show', $patient) }}" class="btn-outline flex items-center gap-2 hover:bg-gray-50 transition-colors">
        <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}"></i>
        {{ app()->getLocale() == 'ar' ? 'العودة للملف' : 'Back to File' }}
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden text-sm">
    <div class="p-6 md:p-8">
        <form action="{{ route('admin.patients.update', $patient) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'الاسم رباعي' : 'Full Name' }} <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="{{ old('name', $patient->name) }}" required class="input-minimal w-full">
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'العمر' : 'Age' }} <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <input type="number" name="age" value="{{ old('age', $patient->age) }}" required class="input-minimal w-full pr-12">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400">{{ app()->getLocale() == 'ar' ? 'سنة' : 'yrs' }}</span>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        {{ app()->getLocale() == 'ar' ? 'تاريخ آخر دورة (LMP)' : 'Last Menstrual Period (LMP)' }} <span class="text-red-500">*</span>
                    </label>
                    <input type="date" name="lmp" value="{{ old('lmp', $patient->lmp) }}" required class="input-minimal w-full bg-gray-50 cursor-pointer">
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        {{ app()->getLocale() == 'ar' ? 'عدد مرات الحمل (Gravida)' : 'Gravida' }} <span class="text-red-500">*</span>
                    </label>
                    <input type="number" name="gravida" value="{{ old('gravida', $patient->gravida) }}" required min="1" class="input-minimal w-full">
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        {{ app()->getLocale() == 'ar' ? 'عدد الولادات السابقة (Para)' : 'Para' }}
                    </label>
                    <input type="number" name="para" value="{{ old('para', $patient->para) }}" min="0" class="input-minimal w-full">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        {{ app()->getLocale() == 'ar' ? 'الفصيلة والـ RH' : 'Blood Group' }}
                    </label>
                    <select name="blood_group" class="input-minimal w-full cursor-pointer appearance-none bg-white">
                        <option value="" disabled>{{ app()->getLocale() == 'ar' ? 'اختر فصيلة الدم' : 'Select Blood Type' }}</option>
                        <option value="A+" {{ (old('blood_group', $patient->blood_group) == 'A+') ? 'selected' : '' }}>A+</option>
                        <option value="A-" {{ (old('blood_group', $patient->blood_group) == 'A-') ? 'selected' : '' }}>A-</option>
                        <option value="B+" {{ (old('blood_group', $patient->blood_group) == 'B+') ? 'selected' : '' }}>B+</option>
                        <option value="B-" {{ (old('blood_group', $patient->blood_group) == 'B-') ? 'selected' : '' }}>B-</option>
                        <option value="AB+" {{ (old('blood_group', $patient->blood_group) == 'AB+') ? 'selected' : '' }}>AB+</option>
                        <option value="AB-" {{ (old('blood_group', $patient->blood_group) == 'AB-') ? 'selected' : '' }}>AB-</option>
                        <option value="O+" {{ (old('blood_group', $patient->blood_group) == 'O+') ? 'selected' : '' }}>O+</option>
                        <option value="O-" {{ (old('blood_group', $patient->blood_group) == 'O-') ? 'selected' : '' }}>O-</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        {{ app()->getLocale() == 'ar' ? 'مؤشر كتلة الجسم (BMI)' : 'BMI' }}
                    </label>
                    <div class="relative">
                        <input type="number" step="0.1" name="bmi" value="{{ old('bmi', $patient->bmi) }}" class="input-minimal w-full pr-16" placeholder="24.5">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400 font-medium">kg/m²</span>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2">
                    <label class="flex items-center space-x-3 cursor-pointer group bg-red-50 border border-red-100 p-4 rounded-xl w-fit mt-2">
                        <div class="relative flex items-center justify-center w-6 h-6 border-2 border-red-300 rounded-md bg-white group-hover:border-red-500 transition-colors">
                            <input type="checkbox" name="previous_cs" class="peer appearance-none absolute w-full h-full cursor-pointer rounded-md opacity-0 z-10" {{ old('previous_cs', $patient->previous_cs) ? 'checked' : '' }}>
                            <i class="fas fa-check text-red-500 text-sm opacity-0 peer-checked:opacity-100 transition-opacity absolute"></i>
                        </div>
                        <span class="text-gray-800 font-semibold ml-3">{{ app()->getLocale() == 'ar' ? 'ولادة قيصرية سابقة' : 'Previous C-Section' }}</span>
                    </label>
                </div>
                
                <div class="col-span-1 md:col-span-2 mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        {{ app()->getLocale() == 'ar' ? 'تاريخ طبي تفصيلي (أمراض مزمنة، أدوية، الخ)' : 'Detailed Medical History' }}
                    </label>
                    <textarea name="medical_history" rows="4" class="input-minimal w-full resize-none">{{ old('medical_history', $patient->medical_history) }}</textarea>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="pt-6 border-t border-gray-100 flex justify-end gap-3 mt-6">
                 <a href="{{ route('admin.patients.show', $patient) }}" class="px-5 py-2.5 rounded-lg font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 transition-colors">
                    {{ app()->getLocale() == 'ar' ? 'إلغاء والتراجع' : 'Cancel' }}
                </a>
                <button type="submit" class="btn-primary px-6 py-2.5 rounded-lg flex items-center gap-2 shadow-sm hover:shadow-md transition-all bg-indigo-600 hover:bg-indigo-700">
                    <i class="fas fa-save"></i>
                    {{ app()->getLocale() == 'ar' ? 'تحديث البيانات' : 'Update Record' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
