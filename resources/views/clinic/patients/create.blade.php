@extends('layouts.clinic')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <!-- Breadcrumbs -->
    <div class="flex items-center justify-between bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-cyan-50 text-cyan-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-user-plus"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold text-slate-900 tracking-tight">{{ __('clinic.add_patient') }}</h1>
                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest mt-0.5">{{ app()->getLocale() == 'ar' ? 'فتح ملف طبي جديد' : 'New Medical File' }}</p>
            </div>
        </div>
        <a href="{{ route('clinic.patients.index') }}" class="text-slate-400 hover:text-slate-900 font-bold text-sm flex items-center gap-2">
            <i class="fas fa-times"></i>
            {{ app()->getLocale() == 'ar' ? 'إلغاء' : 'Cancel' }}
        </a>
    </div>

    <form action="{{ route('clinic.patients.store') }}" method="POST" class="space-y-8 pb-12">
        @csrf
        
        <!-- Section: Basic Info -->
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 space-y-8">
            <h3 class="text-sm font-black text-slate-400 uppercase tracking-[0.2em] border-b border-slate-50 pb-4">{{ app()->getLocale() == 'ar' ? 'المعلومات الشخصية' : 'Personal Details' }}</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="md:col-span-2">
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ app()->getLocale() == 'ar' ? 'اسم المريضة بالكامل' : 'Full Patient Name' }} <span class="text-rose-500">*</span></label>
                    <input type="text" name="name" required class="input-field py-4 text-lg font-bold" placeholder="{{ app()->getLocale() == 'ar' ? 'اسم المريضة بالكامل' : 'Full Patient Name' }}">
                    @error('name') <p class="text-rose-500 text-[10px] mt-2 font-bold">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.husband_name') }}</label>
                    <input type="text" name="husband_name" class="input-field py-3" placeholder="{{ app()->getLocale() == 'ar' ? 'اسم الزوج' : "Husband's Name" }}">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.phone') }}</label>
                    <input type="text" name="phone" class="input-field py-3" placeholder="01xxxxxxxxx">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.age') }}</label>
                    <input type="number" name="age" class="input-field py-3" placeholder="25">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.blood_group') }}</label>
                    <select name="blood_group" class="input-field py-3 cursor-pointer">
                        <option value="">{{ app()->getLocale() == 'ar' ? '-- اختر الفصيلة --' : '-- Blood Group --' }}</option>
                        @foreach(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'] as $bg)
                            <option value="{{ $bg }}">{{ $bg }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <!-- Section: Physical Data -->
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 space-y-8">
            <h3 class="text-sm font-black text-slate-400 uppercase tracking-[0.2em] border-b border-slate-50 pb-4">{{ app()->getLocale() == 'ar' ? 'القياسات الجسدية' : 'Physical Attributes' }}</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.height') }}</label>
                    <div class="relative">
                        <input type="number" id="height" name="height" step="0.1" class="input-field py-3" placeholder="160" oninput="calculateBMI()">
                        <span class="absolute {{ app()->getLocale() == 'ar' ? 'left-4' : 'right-4' }} top-3.5 text-[10px] text-slate-400 font-bold uppercase">cm</span>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ app()->getLocale() == 'ar' ? 'الوزن (كجم)' : 'Weight (kg)' }}</label>
                    <div class="relative">
                        <input type="number" id="weight" name="weight" step="0.1" class="input-field py-3" placeholder="70" oninput="calculateBMI()">
                        <span class="absolute {{ app()->getLocale() == 'ar' ? 'left-4' : 'right-4' }} top-3.5 text-[10px] text-slate-400 font-bold uppercase">kg</span>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-cyan-600 uppercase tracking-widest mb-3">{{ __('clinic.bmi') }}</label>
                    <input type="number" id="bmi" name="bmi" readonly class="input-field py-3 bg-cyan-50/50 border-cyan-100 text-cyan-700 font-black" placeholder="---">
                </div>
            </div>
        </div>

        <!-- Section: OB History -->
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 space-y-8">
            <h3 class="text-sm font-black text-slate-400 uppercase tracking-[0.2em] border-b border-slate-50 pb-4">{{ __('clinic.ob_history') }}</h3>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 bg-slate-50/50 p-6 rounded-2xl border border-slate-50">
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2 text-center">{{ app()->getLocale() == 'ar' ? 'حامل حالياً (Gravida)' : 'Gravida (G)' }}</label>
                    <input type="number" name="gravida" value="1" class="w-full bg-white border border-slate-100 rounded-xl py-4 text-center text-xl font-bold text-slate-700 shadow-sm focus:border-cyan-500 focus:ring-0">
                </div>
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2 text-center">{{ app()->getLocale() == 'ar' ? 'ولادات (Para)' : 'Para (P)' }}</label>
                    <input type="number" name="para" value="0" class="w-full bg-white border border-slate-100 rounded-xl py-4 text-center text-xl font-bold text-slate-700 shadow-sm focus:border-cyan-500 focus:ring-0">
                </div>
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2 text-center">{{ app()->getLocale() == 'ar' ? 'إجهاض (Abortion)' : 'Abortion (A)' }}</label>
                    <input type="number" name="abortion" value="0" class="w-full bg-white border border-slate-100 rounded-xl py-4 text-center text-xl font-bold text-slate-700 shadow-sm focus:border-cyan-500 focus:ring-0">
                </div>
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2 text-center">{{ app()->getLocale() == 'ar' ? 'أحياء (Living)' : 'Living (L)' }}</label>
                    <input type="number" name="living" value="0" class="w-full bg-white border border-slate-100 rounded-xl py-4 text-center text-xl font-bold text-slate-700 shadow-sm focus:border-cyan-500 focus:ring-0">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-4">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.lmp') }}</label>
                    <input type="date" id="lmp" name="lmp" class="input-field py-3" onchange="calculateEDD()">
                    <p class="text-[9px] text-slate-400 mt-2 font-bold">{{ app()->getLocale() == 'ar' ? 'تاريخ أول يوم في آخر دورة شهرية' : 'First day of last menstruation' }}</p>
                </div>
                <div>
                    <label class="block text-xs font-bold text-cyan-600 uppercase tracking-widest mb-3">{{ __('clinic.edd') }} ({{ app()->getLocale() == 'ar' ? 'تلقائي' : 'AUTO' }})</label>
                    <input type="date" id="edd" name="edd" class="input-field py-3 bg-cyan-50/50 border-cyan-100 text-cyan-700 font-bold">
                    <p class="text-[9px] text-cyan-500 mt-2 font-bold">{{ app()->getLocale() == 'ar' ? 'موعد الولادة المتوقع' : 'Expected delivery date' }}</p>
                </div>
            </div>

            <div class="pt-4">
                <label class="inline-flex items-center gap-4 cursor-pointer group bg-rose-50/30 p-4 rounded-xl border border-rose-50 w-full hover:bg-rose-50 transition-colors">
                    <input type="checkbox" name="previous_cs" value="1" class="w-6 h-6 text-rose-600 border-slate-200 rounded-lg focus:ring-rose-200">
                    <span class="text-sm font-black text-rose-800 uppercase tracking-tight">{{ __('clinic.previous_cs') }}</span>
                </label>
            </div>
        </div>

        <!-- Section: Medical Archive -->
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 space-y-8">
            <h3 class="text-sm font-black text-slate-400 uppercase tracking-[0.2em] border-b border-slate-50 pb-4">{{ __('clinic.medical_history') }}</h3>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.medical_history') }}</label>
                    <textarea name="medical_history" rows="4" class="input-field p-4" placeholder="{{ app()->getLocale() == 'ar' ? 'الأمراض المزمنة، الحساسية، العمليات الجراحية السابقة...' : 'Chronic diseases, allergies, surgical history...' }}"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">{{ __('clinic.notes') }}</label>
                    <textarea name="notes" rows="2" class="input-field p-4" placeholder="{{ app()->getLocale() == 'ar' ? 'ملاحظات إضافية للفريق الطبي...' : 'Additional notes for clinical staff...' }}"></textarea>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center justify-end gap-6 pt-4">
            <a href="{{ route('clinic.patients.index') }}" class="text-slate-400 hover:text-slate-900 font-black text-xs uppercase tracking-[0.2em] transition-colors">
                {{ app()->getLocale() == 'ar' ? 'إلغاء العملية' : 'Discard' }}
            </a>
            <button type="submit" class="bg-slate-900 text-white px-12 py-4 rounded-2xl font-black text-sm uppercase tracking-widest hover:bg-black transition-all shadow-xl shadow-slate-900/10 active:scale-95">
                <i class="fas fa-save mr-2 rtl:ml-2"></i>
                {{ __('clinic.save') }}
            </button>
        </div>
    </form>
</div>

@section('scripts')
<script>
function calculateBMI() {
    const height = parseFloat(document.getElementById('height').value);
    const weight = parseFloat(document.getElementById('weight').value);
    const bmiInput = document.getElementById('bmi');

    if (height > 0 && weight > 0) {
        const heightM = height / 100;
        const bmi = (weight / (heightM * heightM)).toFixed(1);
        bmiInput.value = bmi;
    } else {
        bmiInput.value = '';
    }
}

function calculateEDD() {
    const lmpVal = document.getElementById('lmp').value;
    const eddInput = document.getElementById('edd');

    if (lmpVal) {
        const lmpDate = new Date(lmpVal);
        // Naegele's rule: LMP + 280 days
        const eddDate = new Date(lmpDate.getTime() + (280 * 24 * 60 * 60 * 1000));
        
        const y = eddDate.getFullYear();
        const m = String(eddDate.getMonth() + 1).padStart(2, '0');
        const d = String(eddDate.getDate()).padStart(2, '0');
        
        eddInput.value = `${y}-${m}-${d}`;
    } else {
        eddInput.value = '';
    }
}
</script>
@endsection
@endsection
