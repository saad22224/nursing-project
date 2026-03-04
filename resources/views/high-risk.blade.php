@extends('layouts.app')

@section('title', __('high_risk.title'))

@section('content')

<!-- Hero Section -->
<section class="relative py-20 overflow-hidden" style="padding-top: 110px;">
    <div class="absolute inset-0 bg-gradient-to-br from-rose-50 via-white to-pink-50 -z-10"></div>
    <!-- Decorative blobs -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-rose-100 rounded-full opacity-30 blur-3xl -z-10"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-pink-100 rounded-full opacity-40 blur-3xl -z-10"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-rose-100 text-rose-700 text-xs font-semibold mb-5" data-aos="fade-up">
            <i class="fas fa-shield-virus"></i>
            {{ __('high_risk.badge') }}
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 leading-tight" data-aos="fade-up" data-aos-delay="100">
            {{ __('high_risk.title') }}
        </h1>
        <p class="text-gray-500 text-lg max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
            {{ __('high_risk.hero_desc') }}
        </p>

        <!-- Quick Jump Chips -->
        <div class="flex flex-wrap justify-center gap-3 mt-8" data-aos="fade-up" data-aos-delay="300">
            <a href="#hypertension"  class="px-4 py-2  bg-white border border-red-200 text-red-600 rounded-full text-sm font-medium hover:bg-red-50 transition-colors shadow-sm">
                <i class="fas fa-heartbeat me-1"></i>
                {{ __('high_risk.chip_htn') }}
            </a>
            <a href="#diabetes" class="px-4 py-2 bg-white border border-amber-200 text-amber-600 rounded-full text-sm font-medium hover:bg-amber-50 transition-colors shadow-sm">
                <i class="fas fa-vial me-1"></i>
                {{ __('high_risk.chip_dm') }}
            </a>
            <a href="#anemia" class="px-4 py-2 bg-white border border-pink-200 text-pink-600 rounded-full text-sm font-medium hover:bg-pink-50 transition-colors shadow-sm">
                <i class="fas fa-tint me-1"></i>
                {{ __('high_risk.chip_anemia') }}
            </a>
            <a href="#placenta" class="px-4 py-2 bg-white border border-purple-200 text-purple-600 rounded-full text-sm font-medium hover:bg-purple-50 transition-colors shadow-sm">
                <i class="fas fa-baby me-1"></i>
                {{ __('high_risk.chip_placenta') }}
            </a>
            <a href="#multiple" class="px-4 py-2 bg-white border border-cyan-200 text-cyan-600 rounded-full text-sm font-medium hover:bg-cyan-50 transition-colors shadow-sm">
                <i class="fas fa-users me-1"></i>
                {{ __('high_risk.chip_multiple') }}
            </a>
        </div>
    </div>
</section>

<!-- Conditions Section -->
<section class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

        {{-- REUSABLE CONDITION CARD MACRO --}}
        {{-- 1. Hypertension --}}
        <div id="hypertension" class="rounded-3xl border border-red-100 shadow-sm overflow-hidden scroll-mt-24" data-aos="fade-up">
            <!-- Card Header -->
            <div class="bg-gradient-to-r from-red-500 to-rose-500 px-8 py-6 text-white flex items-center gap-5">
                <div class="w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-heartbeat text-white text-3xl"></i>
                </div>
                <div>
                    <h2 style="color: black" style class="text-2xl font-bold {{ app()->getLocale() == 'ar' ? '!text-black' : '' }}">{{ __('high_risk.htn_title') }}</h2>
                    <span class="text-red-500 text-sm">{{ __('high_risk.htn_subtitle') }}</span>
                </div>
            </div>
            <!-- Card Body -->
            <div class="bg-white px-8 py-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Definition -->
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-book-medical text-red-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.definition') }}</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ __('high_risk.htn_def') }}</p>
                    </div>
                </div>
                <!-- Causes -->
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-search text-amber-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.causes') }}</h4>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-amber-400 text-[6px] mt-2 flex-shrink-0"></i> {{ __('high_risk.htn_c1') }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-amber-400 text-[6px] mt-2 flex-shrink-0"></i> {{ __('high_risk.htn_c2') }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-amber-400 text-[6px] mt-2 flex-shrink-0"></i> {{ __('high_risk.htn_c3') }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-amber-400 text-[6px] mt-2 flex-shrink-0"></i> {{ __('high_risk.htn_c4') }}</li>
                        </ul>
                    </div>
                </div>
                <!-- Complications -->
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-exclamation-triangle text-orange-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.complications') }}</h4>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ __('high_risk.htn_comp1') }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ __('high_risk.htn_comp2') }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ __('high_risk.htn_comp3') }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ __('high_risk.htn_comp4') }}</li>
                        </ul>
                    </div>
                </div>
                <!-- Emergency -->
                <div class="flex gap-4 bg-red-50 rounded-2xl p-4 border border-red-200">
                    <div class="w-10 h-10 rounded-xl bg-red-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-ambulance text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-red-700 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.emergency') }}</h4>
                        <ul class="text-red-700 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-red-400 text-[6px] mt-2 flex-shrink-0"></i> {{ __('high_risk.htn_e1') }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-red-400 text-[6px] mt-2 flex-shrink-0"></i> {{ __('high_risk.htn_e2') }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-red-400 text-[6px] mt-2 flex-shrink-0"></i> {{ __('high_risk.htn_e3') }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-red-400 text-[6px] mt-2 flex-shrink-0"></i> {{ __('high_risk.htn_e4') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- 2. Gestational Diabetes --}}
        <div id="diabetes" class="rounded-3xl border border-amber-100 shadow-sm overflow-hidden scroll-mt-24" data-aos="fade-up" data-aos-delay="100">
            <div class="bg-gradient-to-r from-amber-400 to-yellow-500 px-8 py-6 text-white flex items-center gap-5">
                <div class="w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-vial text-white text-3xl"></i>
                </div>
                <div>
                    <h2 style="color: black" class="text-2xl font-bold {{ app()->getLocale() == 'ar' ? '!text-black' : '' }}">{{ app()->getLocale() == 'ar' ? 'سكري الحمل' : 'Gestational Diabetes' }}</h2>
                    <span class="text-yellow-500 text-sm">{{ app()->getLocale() == 'ar' ? 'Gestational Diabetes Mellitus' : 'Gestational Diabetes Mellitus' }}</span>
                </div>
            </div>
            <div class="bg-white px-8 py-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-book-medical text-amber-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.definition') }}</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ app()->getLocale() == 'ar' ? 'ارتفاع مستوى السكر في الدم خلال الحمل لدى نساء لم يكنّ مصابات بالسكري من قبل. يُشخَّص عادةً بين الأسبوع 24–28.' : 'High blood sugar that develops during pregnancy in women without prior diabetes, typically diagnosed between weeks 24–28.' }}</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-yellow-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-search text-yellow-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.causes') }}</h4>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-yellow-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'هرمونات الحمل تتعارض مع الأنسولين' : 'Pregnancy hormones interfering with insulin' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-yellow-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'الوزن الزائد أو السمنة' : 'Overweight or obesity' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-yellow-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'تاريخ عائلي للإصابة بالسكري' : 'Family history of diabetes' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-yellow-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'سكري حمل سابق' : 'Previous gestational diabetes' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-exclamation-triangle text-orange-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.complications') }}</h4>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'كبر حجم الجنين (Macrosomia)' : 'Large baby (macrosomia)' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'صعوبة الولادة' : 'Difficult delivery' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'هبوط السكر عند المولود' : 'Neonatal hypoglycemia' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'خطر الإصابة بالسكري لاحقاً' : 'Future Type 2 diabetes risk' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="flex gap-4 bg-red-50 rounded-2xl p-4 border border-red-200">
                    <div class="w-10 h-10 rounded-xl bg-red-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-ambulance text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-red-700 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.emergency') }}</h4>
                        <ul class="text-red-700 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-red-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'دوخة شديدة أو ارتعاش' : 'Severe dizziness or tremors' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-red-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'تعرق مفاجئ وبرودة' : 'Sudden sweating and coldness' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-red-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'فقدان الوعي أو الارتباك' : 'Loss of consciousness or confusion' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- 3. Anemia --}}
        <div id="anemia" class="rounded-3xl border border-pink-100 shadow-sm overflow-hidden scroll-mt-24" data-aos="fade-up" data-aos-delay="100">
            <div class="bg-gradient-to-r from-pink-500 to-rose-400 px-8 py-6 text-white flex items-center gap-5">
                <div class="w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-tint text-white text-3xl"></i>
                </div>
                <div>
                    <h2 style="color: black" class="text-2xl font-bold {{ app()->getLocale() == 'ar' ? '!text-black' : '' }}">{{ app()->getLocale() == 'ar' ? 'فقر الدم (الأنيميا)' : 'Anemia' }}</h2>
                    <span class="text-pink-500 text-sm">{{ app()->getLocale() == 'ar' ? 'Anemia in Pregnancy' : 'Anemia in Pregnancy' }}</span>
                </div>
            </div>
            <div class="bg-white px-8 py-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-pink-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-book-medical text-pink-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.definition') }}</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ app()->getLocale() == 'ar' ? 'انخفاض مستوى الهيموجلوبين في الدم عن 11 جم/ديسيلتر أثناء الحمل. أكثرها شيوعاً فقر الدم بسبب نقص الحديد.' : 'Hemoglobin below 11 g/dL during pregnancy. Iron-deficiency anemia is the most common type worldwide.' }}</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-rose-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-search text-rose-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.causes') }}</h4>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-rose-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'نقص الحديد أو حمض الفوليك في الغذاء' : 'Dietary deficiency of iron or folate' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-rose-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'زيادة احتياج الجسم خلال الحمل' : 'Increased bodily demands during pregnancy' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-rose-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'حالات مزمنة كالكلى أو التهابات' : 'Chronic conditions (kidney disease, infections)' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-exclamation-triangle text-orange-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.complications') }}</h4>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'الولادة المبكرة' : 'Preterm birth' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'انخفاض وزن المولود' : 'Low birth weight' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'إرهاق الأم الشديد وضعف المناعة' : 'Severe maternal fatigue & weak immunity' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="flex gap-4 bg-red-50 rounded-2xl p-4 border border-red-200">
                    <div class="w-10 h-10 rounded-xl bg-red-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-ambulance text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-red-700 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.emergency') }}</h4>
                        <ul class="text-red-700 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-red-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'ضيق تنفس شديد ومفاجئ' : 'Sudden severe shortness of breath' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-red-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'خفقان قلب سريع جداً' : 'Very rapid heart palpitations' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-red-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'إغماء أو شحوب مفاجئ شديد' : 'Fainting or sudden severe pallor' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- 4. Placenta Previa --}}
        <div id="placenta" class="rounded-3xl border border-purple-100 shadow-sm overflow-hidden scroll-mt-24" data-aos="fade-up" data-aos-delay="100">
            <div class="bg-gradient-to-r from-purple-500 to-violet-500 px-8 py-6 text-white flex items-center gap-5">
                <div class="w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-baby text-white text-3xl"></i>
                </div>
                <div>
                    <h2 style="color: black" class="text-2xl font-bold {{ app()->getLocale() == 'ar' ? '!text-black' : '' }}">{{ app()->getLocale() == 'ar' ? 'المشيمة المنزاحة' : 'Placenta Previa' }}</h2>
                    <span class="text-purple-500 text-sm">{{ app()->getLocale() == 'ar' ? 'Placenta Previa' : 'Placenta Previa' }}</span>
                </div>
            </div>
            <div class="bg-white px-8 py-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-purple-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-book-medical text-purple-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.definition') }}</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ app()->getLocale() == 'ar' ? 'تغطية المشيمة لعنق الرحم جزئياً أو كلياً، مما يعيق مسار الولادة الطبيعية ويسبب نزيفاً حاداً.' : 'The placenta partially or completely covers the cervix, blocking the birth canal and causing severe bleeding.' }}</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-violet-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-search text-violet-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.causes') }}</h4>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-violet-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'عمليات قيصرية سابقة' : 'Previous C-sections' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-violet-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'التدخين أو تعدد الحمل' : 'Smoking or multiple pregnancy' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-violet-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'تقدم سن الأم' : 'Advanced maternal age' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-violet-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'تاريخ من جراحات الرحم' : 'History of uterine surgeries' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-exclamation-triangle text-orange-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.complications') }}</h4>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'نزيف حاد مفاجئ' : 'Sudden severe bleeding' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'الولادة المبكرة الاضطرارية' : 'Emergency preterm delivery' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'الاضطرار للولادة القيصرية' : 'Mandatory C-section' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'صدمة نزفية' : 'Hemorrhagic shock' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="flex gap-4 bg-red-50 rounded-2xl p-4 border border-red-200">
                    <div class="w-10 h-10 rounded-xl bg-red-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-ambulance text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-red-700 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.emergency') }}</h4>
                        <p class="text-red-700 text-sm font-semibold">
                            {{ app()->getLocale() == 'ar'
                                ? '⚠️ أي نزيف مهبلي مفاجئ غير مؤلم في النصف الثاني من الحمل — اذهبي فوراً للطوارئ.'
                                : '⚠️ Any painless vaginal bleeding in the second half of pregnancy — go to the ER immediately.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 5. Multiple Pregnancy --}}
        <div id="multiple" class="rounded-3xl border border-cyan-100 shadow-sm overflow-hidden scroll-mt-24" data-aos="fade-up" data-aos-delay="100">
            <div class="bg-gradient-to-r from-cyan-500 to-teal-500 px-8 py-6 text-white flex items-center gap-5">
                <div class="w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-users text-white text-3xl"></i>
                </div>
                <div>
                    <h2 style="color: black" class="text-2xl font-bold {{ app()->getLocale() == 'ar' ? '!text-black' : '' }}">{{ app()->getLocale() == 'ar' ? 'الحمل المتعدد (توأم فأكثر)' : 'Multiple Pregnancy (Twins or More)' }}</h2>
                    <span class="text-cyan-500 text-sm">{{ app()->getLocale() == 'ar' ? 'Multiple Gestation' : 'Multiple Gestation' }}</span>
                </div>
            </div>
            <div class="bg-white px-8 py-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-cyan-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-book-medical text-cyan-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.definition') }}</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ app()->getLocale() == 'ar' ? 'وجود جنينين أو أكثر في الرحم في نفس الوقت، يتطلب متابعة طبية مكثفة خلال كل مراحل الحمل.' : 'Two or more fetuses in the uterus simultaneously, requiring intensive medical monitoring throughout the entire pregnancy.' }}</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-teal-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-search text-teal-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.causes') }}</h4>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-teal-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'طبيعي أو تاريخ عائلي' : 'Natural occurrence or family history' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-teal-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'علاجات الخصوبة وحقن التبويض' : 'Fertility treatments or ovulation induction' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-teal-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'أطفال الأنابيب (IVF)' : 'IVF (In Vitro Fertilization)' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-exclamation-triangle text-orange-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.complications') }}</h4>
                        <ul class="text-gray-600 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'ولادة مبكرة وانخفاض وزن الأجنة' : 'Preterm birth & low birth weight' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'ارتفاع ضغط الدم وتسمم الحمل' : 'Hypertension & preeclampsia' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'تشابك الحبال السرية' : 'Umbilical cord entanglement' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-orange-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'متلازمة نقل الدم بين التوأمين' : 'Twin-to-twin transfusion syndrome' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="flex gap-4 bg-red-50 rounded-2xl p-4 border border-red-200">
                    <div class="w-10 h-10 rounded-xl bg-red-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <i class="fas fa-ambulance text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-red-700 mb-2 text-sm uppercase tracking-wide">{{ __('high_risk.emergency') }}</h4>
                        <ul class="text-red-700 text-sm space-y-1">
                            <li class="flex gap-2"><i class="fas fa-circle text-red-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'انقطاع مفاجئ في حركة أحد الأجنة' : 'Sudden loss of movement in one fetus' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-red-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'نزيف أو ضيق تنفس شديد' : 'Bleeding or severe shortness of breath' }}</li>
                            <li class="flex gap-2"><i class="fas fa-circle text-red-400 text-[6px] mt-2 flex-shrink-0"></i> {{ app()->getLocale() == 'ar' ? 'تقلصات منتظمة مبكرة' : 'Regular early contractions' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 text-center" data-aos="zoom-in">
        <div class="bg-gradient-to-r from-rose-600 to-pink-600 rounded-3xl p-10 
        text-white shadow-2xl" style="color: black">
            <i class="fas fa-hospital-alt text-5xl mb-5 opacity-90"></i>
            <h3 class="text-2xl font-bold mb-3">{{ __('high_risk.cta_title') }}</h3>
            <p class="text-rose-100 mb-8 text-sm leading-relaxed max-w-lg mx-auto">
                {{ __('high_risk.cta_description') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('calculator') }}" class="bg-white text-rose-600 font-bold px-8 py-3 rounded-xl hover:bg-rose-50 transition-colors text-sm inline-flex items-center justify-center gap-2">
                    <i class="fas fa-calculator"></i>
                    {{ __('nav.calculator') }}
                </a>
                <a href="{{ route('chatbot') }}" class="bg-rose-700 text-white font-bold px-8 py-3 rounded-xl hover:bg-rose-800 transition-colors border border-rose-400 text-sm inline-flex items-center justify-center gap-2">
                    <i class="fas fa-robot"></i>
                    {{ __('nav.chatbot') }}
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
