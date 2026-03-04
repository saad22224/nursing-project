@extends('layouts.admin')

@section('title', app()->getLocale() == 'ar' ? 'إضافة مريض חדש' : 'Add New Patient')

@section('content')
<div class="mb-6 flex justify-between items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100">
    <div class="flex-1">
        <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <div class="w-8 h-8 rounded-lg bg-cyan-50 flex items-center justify-center">
                <i class="fas fa-user-plus text-cyan-600"></i>
            </div>
            {{ app()->getLocale() == 'ar' ? 'تسجيل مريضة جديدة' : 'Register New Patient' }}
        </h2>
    </div>
    <a href="{{ route('admin.patients.index') }}" class="btn-outline flex items-center gap-2 hover:bg-gray-50 transition-colors">
        <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}"></i>
        {{ app()->getLocale() == 'ar' ? 'العودة للقائمة' : 'Back to List' }}
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-6 md:p-8">
        <form action="{{ route('admin.patients.store') }}" method="POST" class="space-y-8">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Personal Info Section -->
                <div class="col-span-1 md:col-span-2 border-b border-gray-100 pb-4 mb-2">
                    <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                        <i class="fas fa-address-card text-cyan-500"></i>
                        {{ app()->getLocale() == 'ar' ? 'المعلومات الشخصية' : 'Personal Information' }}
                    </h3>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'الاسم رباعي' : 'Full Name' }} <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="{{ old('name') }}" required class="input-minimal w-full" placeholder="{{ app()->getLocale() == 'ar' ? 'مثال: فاطمة أحمد محمد' : 'e.g., Fatima Ahmed' }}">
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'العمر' : 'Age' }} <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <input type="number" name="age" value="{{ old('age') }}" required class="input-minimal w-full pr-12" placeholder="25">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400 font-medium">{{ app()->getLocale() == 'ar' ? 'سنة' : 'yrs' }}</span>
                    </div>
                </div>

                <!-- Medical History Section -->
                <div class="col-span-1 md:col-span-2 border-b border-gray-100 pb-4 mb-2 mt-4">
                    <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                        <i class="fas fa-notes-medical text-cyan-500"></i>
                        {{ app()->getLocale() == 'ar' ? 'التاريخ الطبي والولادي' : 'Medical & Obstetric History' }}
                    </h3>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2" title="{{ app()->getLocale() == 'ar' ? 'تاريخ أول يوم في آخر دورة شهرية' : 'First day of Last Menstrual Period' }}">
                        {{ app()->getLocale() == 'ar' ? 'تاريخ آخر دورة (LMP)' : 'Last Menstrual Period (LMP)' }} <span class="text-red-500">*</span>
                        <i class="fas fa-info-circle text-gray-400 ml-1"></i>
                    </label>
                    <input type="date" name="lmp" value="{{ old('lmp') }}" required class="input-minimal w-full bg-gray-50 focus:bg-white transition-colors cursor-pointer">
                    <p class="text-xs text-gray-500 mt-2 font-medium"><i class="fas fa-magic text-cyan-500 mr-1"></i> {{ app()->getLocale() == 'ar' ? 'سيتم حساب تاريخ الولادة المتوقع (EDD) تلقائياً' : 'Expected Date of Delivery (EDD) will be calculated automatically' }}</p>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        {{ app()->getLocale() == 'ar' ? 'عدد مرات الحمل (Gravida)' : 'Gravida (Total Pregnancies)' }} <span class="text-red-500">*</span>
                    </label>
                    <input type="number" name="gravida" value="{{ old('gravida') }}" required min="1" class="input-minimal w-full" placeholder="1">
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        {{ app()->getLocale() == 'ar' ? 'عدد الولادات السابقة (Para)' : 'Para (Total Births)' }}
                    </label>
                    <input type="number" name="para" value="{{ old('para') }}" min="0" class="input-minimal w-full" placeholder="0">
                </div>

                <!-- Physical Stats Section -->
                <div class="col-span-1 md:col-span-2 border-b border-gray-100 pb-4 mb-2 mt-4">
                    <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                        <i class="fas fa-weight-scale text-cyan-500"></i>
                        {{ app()->getLocale() == 'ar' ? 'القياسات الأساسية والفصيلة' : 'Physical Stats & Blood Type' }}
                    </h3>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        {{ app()->getLocale() == 'ar' ? 'الفصيلة والـ RH' : 'Blood Group' }}
                    </label>
                    <select name="blood_group" class="input-minimal w-full bg-white cursor-pointer appearance-none">
                        <option value="" disabled selected>{{ app()->getLocale() == 'ar' ? 'اختر فصيلة الدم' : 'Select Blood Type' }}</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        {{ app()->getLocale() == 'ar' ? 'مؤشر كتلة الجسم (BMI)' : 'BMI (Body Mass Index)' }}
                    </label>
                    <div class="relative">
                        <input type="number" step="0.1" name="bmi" value="{{ old('bmi') }}" class="input-minimal w-full pr-16" placeholder="24.5">
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-sm text-gray-400 font-medium">kg/m²</span>
                    </div>
                </div>

                <!-- Risk Factors Section -->
                <div class="col-span-1 md:col-span-2 border-b border-gray-100 pb-4 mb-2 mt-4">
                    <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2 text-red-600">
                        <i class="fas fa-exclamation-triangle"></i>
                        {{ app()->getLocale() == 'ar' ? 'عوامل خطورة إضافية' : 'Additional Risk Factors' }}
                    </h3>
                </div>

                <div class="col-span-1 md:col-span-2 bg-red-50/50 p-4 rounded-xl border border-red-100">
                    <label class="flex items-center space-x-3 cursor-pointer group">
                        <div class="relative flex items-center justify-center w-6 h-6 border-2 border-red-300 rounded-md bg-white group-hover:border-red-500 transition-colors">
                            <input type="checkbox" name="previous_cs" class="peer appearance-none absolute w-full h-full cursor-pointer rounded-md opacity-0 z-10">
                            <i class="fas fa-check text-red-500 text-sm opacity-0 peer-checked:opacity-100 transition-opacity absolute"></i>
                        </div>
                        <span class="text-gray-800 font-semibold ml-3">{{ app()->getLocale() == 'ar' ? 'ولادة قيصرية سابقة' : 'Previous C-Section' }}</span>
                    </label>
                </div>
                
                <!-- Medical History Textarea -->
                <div class="col-span-1 md:col-span-2 mt-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        {{ app()->getLocale() == 'ar' ? 'تاريخ طبي تفصيلي (أمراض مزمنة، أدوية، حساسية، الخ)' : 'Detailed Medical History (Chronic illnesses, Medications, Allergies, etc.)' }}
                    </label>
                    <textarea name="medical_history" rows="4" class="input-minimal w-full resize-none placeholder-gray-300" placeholder="{{ app()->getLocale() == 'ar' ? 'اكتب أي تفاصيل طبية هامة هنا...' : 'Enter any important medical details here...' }}">{{ old('medical_history') }}</textarea>
                </div>
            </div>
            
            <!-- Submit Button Area -->
            <div class="pt-8 border-t border-gray-100 flex justify-end gap-4 mt-8">
                <a href="{{ route('admin.patients.index') }}" class="px-6 py-3 rounded-xl font-semibold text-gray-600 bg-gray-100 hover:bg-gray-200 transition-colors">
                    {{ app()->getLocale() == 'ar' ? 'إلغاء' : 'Cancel' }}
                </a>
                <button type="submit" class="btn-primary px-8 py-3 rounded-xl text-lg flex items-center gap-2 shadow-sm hover:shadow-lg transition-all">
                    <i class="fas fa-save"></i>
                    {{ app()->getLocale() == 'ar' ? 'حفظ بيانات المريضة' : 'Save Patient Details' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
