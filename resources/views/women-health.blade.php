@extends('layouts.app')

@section('title', __('women_health.title'))

@section('content')
<!-- Hero Section -->
<section class="py-10 bg-gradient-to-b from-pink-50 to-white" style="padding-top: 100px;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-pink-100 text-pink-700 text-sm font-medium mb-4" data-aos="fade-up">
            <i class="fas fa-female"></i>
            {{ __('women_health.badge') }}
        </div>
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3" data-aos="fade-up" data-aos-delay="100">
            {{ __('women_health.hero_title') }}
        </h1>
        <p class="text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            {{ __('women_health.hero_desc') }}
        </p>
        
        <!-- Trusted By -->
        <div class="mt-6 flex flex-wrap justify-center gap-4 text-xs text-gray-500" data-aos="fade-up" data-aos-delay="300">
            <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-500"></i> {{ __('women_health.ref_who') }}</span>
            <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-500"></i> {{ __('women_health.ref_acog') }}</span>
            <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-500"></i> {{ __('women_health.ref_figo') }}</span>
            <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-500"></i> {{ __('women_health.ref_aap') }}</span>
        </div>
    </div>
</section>

<!-- Main Tabs Navigation -->
<section class="py-6 sticky top-16 z-40 bg-white/95 backdrop-blur-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-2" role="tablist">
            <button onclick="switchTab('pregnancy')" id="tab-pregnancy" class="tab-btn px-4 py-2 rounded-xl text-sm font-medium transition-all bg-pink-600 text-white" role="tab" aria-selected="true">
                <i class="fas fa-baby mr-2"></i>{{ __('women_health.tab_pregnancy') }}
            </button>
            <button onclick="switchTab('family-planning')" id="tab-family-planning" class="tab-btn px-4 py-2 rounded-xl text-sm font-medium transition-all bg-gray-100 text-gray-700 hover:bg-purple-50 hover:text-purple-600" role="tab" aria-selected="false">
                <i class="fas fa-heart mr-2"></i>{{ __('women_health.tab_family_planning') }}
            </button>
            <button onclick="switchTab('menopause')" id="tab-menopause" class="tab-btn px-4 py-2 rounded-xl text-sm font-medium transition-all bg-gray-100 text-gray-700 hover:bg-orange-50 hover:text-orange-600" role="tab" aria-selected="false">
                <i class="fas fa-sun mr-2"></i>{{ __('women_health.tab_menopause') }}
            </button>
            <button onclick="switchTab('postpartum')" id="tab-postpartum" class="tab-btn px-4 py-2 rounded-xl text-sm font-medium transition-all bg-gray-100 text-gray-700 hover:bg-cyan-50 hover:text-cyan-600" role="tab" aria-selected="false">
                <i class="fas fa-baby-carriage mr-2"></i>{{ __('women_health.tab_postpartum') }}
            </button>
        </div>
    </div>
</section>

<!-- Tab Contents -->
<section class="py-8 min-h-[600px]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Pregnancy Tab -->
        <div id="content-pregnancy" class="tab-content">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Quick Topics -->
                <div class="lg:col-span-1 space-y-4">
                    <div class="bg-white rounded-2xl shadow-sm border border-pink-100 p-5">
                        <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-bookmark text-pink-500"></i>
                            {{ __('women_health.pregnancy.topics_title') }}
                        </h3>
                        <div class="space-y-2">
                            @foreach(['nutrition', 'exercise', 'screening', 'warning_signs', 'mental_health', 'hygiene', 'dental', 'sleep', 'medication', 'preparation'] as $topic)
                            <button onclick="scrollToSection('preg-{{ $topic }}')" class="w-full text-left px-3 py-2 rounded-lg text-sm hover:bg-pink-50 hover:text-pink-700 transition-colors flex items-center gap-2">
                                <i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-xs text-gray-400"></i>
                                {{ __('women_health.pregnancy.topic_' . $topic) }}
                            </button>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Key Metrics -->
                    <div class="bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl p-5 text-white">
                        <h3 class="font-bold mb-4">{{ __('women_health.pregnancy.key_metrics') }}</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-pink-100 text-sm">{{ __('women_health.pregnancy.weight_gain') }}</span>
                                <span class="font-bold">11.5-16 kg</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-pink-100 text-sm">{{ __('women_health.pregnancy.folic_acid') }}</span>
                                <span class="font-bold">400-800 mcg</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-pink-100 text-sm">{{ __('women_health.pregnancy.iron') }}</span>
                                <span class="font-bold">27 mg/day</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-pink-100 text-sm">{{ __('women_health.pregnancy.calories') }}</span>
                                <span class="font-bold">+340/day</span>
                            </div>
                        </div>
                        <p class="mt-4 text-xs text-pink-200">
                            <i class="fas fa-info-circle mr-1"></i>
                            {{ __('women_health.pregnancy.who_ref') }}
                        </p>
                    </div>
                </div>
                
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-6">
                    
                    <!-- Nutrition -->
                    <div id="preg-nutrition" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-apple-alt text-green-500"></i>
                            {{ __('women_health.pregnancy.nutrition_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.pregnancy.nutrition_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.pregnancy.nutrition_refs') }}
                        </div>
                    </div>
                    
                    <!-- Exercise -->
                    <div id="preg-exercise" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-running text-blue-500"></i>
                            {{ __('women_health.pregnancy.exercise_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.pregnancy.exercise_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.pregnancy.exercise_refs') }}
                        </div>
                    </div>
                    
                    <!-- Screening -->
                    <div id="preg-screening" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-stethoscope text-purple-500"></i>
                            {{ __('women_health.pregnancy.screening_title') }}
                        </h2>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-2 text-left font-semibold">{{ __('women_health.trimester') }}</th>
                                        <th class="px-4 py-2 text-left font-semibold">{{ __('women_health.test') }}</th>
                                        <th class="px-4 py-2 text-left font-semibold">{{ __('women_health.purpose') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <tr><td class="px-4 py-2">{{ __('women_health.first_trimester') }}</td><td class="px-4 py-2">{{ __('women_health.pregnancy.test_dating') }}</td><td class="px-4 py-2">{{ __('women_health.pregnancy.purpose_dating') }}</td></tr>
                                    <tr><td class="px-4 py-2">{{ __('women_health.second_trimester') }}</td><td class="px-4 py-2">{{ __('women_health.pregnancy.test_anatomy') }}</td><td class="px-4 py-2">{{ __('women_health.pregnancy.purpose_anatomy') }}</td></tr>
                                    <tr><td class="px-4 py-2">{{ __('women_health.second_trimester') }}</td><td class="px-4 py-2">{{ __('women_health.pregnancy.test_glucose') }}</td><td class="px-4 py-2">{{ __('women_health.pregnancy.purpose_glucose') }}</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.pregnancy.screening_refs') }}
                        </div>
                    </div>
                    
                    <!-- Warning Signs -->
                    <div id="preg-warning_signs" class="bg-red-50 rounded-2xl border border-red-100 p-6">
                        <h2 class="text-xl font-bold text-red-700 mb-4 flex items-center gap-2">
                            <i class="fas fa-exclamation-triangle"></i>
                            {{ __('women_health.pregnancy.warning_title') }}
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            @foreach(['bleeding', 'pain', 'headache', 'swelling', 'fever', 'movement'] as $sign)
                            <div class="bg-white rounded-xl p-3 border-l-4 border-red-400">
                                <p class="font-medium text-gray-800 text-sm">{{ __('women_health.pregnancy.sign_' . $sign) }}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="mt-4 p-3 bg-red-100 rounded-lg text-sm text-red-700">
                            <i class="fas fa-ambulance mr-2"></i>
                            {{ __('women_health.pregnancy.emergency_note') }}
                        </div>
                    </div>
                    
                    <!-- Mental Health -->
                    <div id="preg-mental_health" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-brain text-purple-500"></i>
                            {{ __('women_health.pregnancy.mental_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.pregnancy.mental_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.pregnancy.mental_refs') }}
                        </div>
                    </div>
                    
                    <!-- Hygiene -->
                    <div id="preg-hygiene" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-hands-wash text-green-500"></i>
                            {{ __('women_health.pregnancy.hygiene_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.pregnancy.hygiene_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.pregnancy.hygiene_refs') }}
                        </div>
                    </div>
                    
                    <!-- Dental Care -->
                    <div id="preg-dental" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-tooth text-blue-500"></i>
                            {{ __('women_health.pregnancy.dental_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.pregnancy.dental_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.pregnancy.dental_refs') }}
                        </div>
                    </div>
                    
                    <!-- Sleep Hygiene -->
                    <div id="preg-sleep" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-bed text-indigo-500"></i>
                            {{ __('women_health.pregnancy.sleep_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.pregnancy.sleep_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.pregnancy.sleep_refs') }}
                        </div>
                    </div>
                    
                    <!-- Medication Safety -->
                    <div id="preg-medication" class="bg-amber-50 rounded-2xl border border-amber-100 p-6">
                        <h2 class="text-xl font-bold text-amber-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-pills text-amber-600"></i>
                            {{ __('women_health.pregnancy.medication_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-amber-800">
                            {!! __('women_health.pregnancy.medication_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-amber-100 rounded-lg text-xs text-amber-700">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.pregnancy.medication_refs') }}
                        </div>
                    </div>
                    
                    <!-- Preparation -->
                    <div id="preg-preparation" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-hospital text-cyan-500"></i>
                            {{ __('women_health.pregnancy.prep_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.pregnancy.prep_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.pregnancy.prep_refs') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Family Planning Tab -->
        <div id="content-family-planning" class="tab-content hidden">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-1 space-y-4">
                    <div class="bg-white rounded-2xl shadow-sm border border-purple-100 p-5">
                        <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-bookmark text-purple-500"></i>
                            {{ __('women_health.family_planning.topics_title') }}
                        </h3>
                        <div class="space-y-2">
                            @foreach(['contraception', 'fertility', 'preconception', 'sti', 'emergency_contraception', 'infertility', 'hygiene_intimate'] as $topic)
                            <button onclick="scrollToSection('fp-{{ $topic }}')" class="w-full text-left px-3 py-2 rounded-lg text-sm hover:bg-purple-50 hover:text-purple-700 transition-colors flex items-center gap-2">
                                <i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-xs text-gray-400"></i>
                                {{ __('women_health.family_planning.topic_' . $topic) }}
                            </button>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-2 space-y-6">
                    <!-- Contraception Methods -->
                    <div id="fp-contraception" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-shield-alt text-purple-500"></i>
                            {{ __('women_health.family_planning.contraception_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.family_planning.contraception_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.family_planning.contraception_refs') }}
                        </div>
                    </div>
                    
                    <!-- Fertility Awareness -->
                    <div id="fp-fertility" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-calendar-alt text-pink-500"></i>
                            {{ __('women_health.family_planning.fertility_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.family_planning.fertility_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.family_planning.fertility_refs') }}
                        </div>
                    </div>
                    
                    <!-- Preconception Care -->
                    <div id="fp-preconception" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-heartbeat text-red-500"></i>
                            {{ __('women_health.family_planning.preconception_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.family_planning.preconception_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.family_planning.preconception_refs') }}
                        </div>
                    </div>
                    
                    <!-- STI Prevention -->
                    <div id="fp-sti" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-shield-virus text-orange-500"></i>
                            {{ __('women_health.family_planning.sti_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.family_planning.sti_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.family_planning.sti_refs') }}
                        </div>
                    </div>
                    
                    <!-- Emergency Contraception -->
                    <div id="fp-emergency_contraception" class="bg-rose-50 rounded-2xl border border-rose-100 p-6">
                        <h2 class="text-xl font-bold text-rose-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-clock text-rose-600"></i>
                            {{ __('women_health.family_planning.emergency_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-rose-800">
                            {!! __('women_health.family_planning.emergency_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-rose-100 rounded-lg text-xs text-rose-700">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.family_planning.emergency_refs') }}
                        </div>
                    </div>
                    
                    <!-- Infertility Evaluation -->
                    <div id="fp-infertility" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-microscope text-teal-500"></i>
                            {{ __('women_health.family_planning.infertility_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.family_planning.infertility_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.family_planning.infertility_refs') }}
                        </div>
                    </div>
                    
                    <!-- Intimate Hygiene -->
                    <div id="fp-hygiene_intimate" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-soap text-green-500"></i>
                            {{ __('women_health.family_planning.hygiene_intimate_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.family_planning.hygiene_intimate_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.family_planning.hygiene_intimate_refs') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Menopause Tab -->
        <div id="content-menopause" class="tab-content hidden">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-1 space-y-4">
                    <div class="bg-white rounded-2xl shadow-sm border border-orange-100 p-5">
                        <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-bookmark text-orange-500"></i>
                            {{ __('women_health.menopause.topics_title') }}
                        </h3>
                        <div class="space-y-2">
                            @foreach(['symptoms', 'hormone', 'bone', 'heart', 'sexual', 'mental', 'urinary', 'cancer_screening', 'weight_management', 'skin_hair', 'hygiene_menopause'] as $topic)
                            <button onclick="scrollToSection('meno-{{ $topic }}')" class="w-full text-left px-3 py-2 rounded-lg text-sm hover:bg-orange-50 hover:text-orange-700 transition-colors flex items-center gap-2">
                                <i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-xs text-gray-400"></i>
                                {{ __('women_health.menopause.topic_' . $topic) }}
                            </button>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Age Info -->
                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl p-5 text-white">
                        <h3 class="font-bold mb-4">{{ __('women_health.menopause.facts_title') }}</h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex justify-between">
                                <span class="text-orange-100">{{ __('women_health.menopause.avg_age') }}</span>
                                <span class="font-bold">51 {{ __('women_health.years') }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-orange-100">{{ __('women_health.menopause.range') }}</span>
                                <span class="font-bold">45-55 {{ __('women_health.years') }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-orange-100">{{ __('women_health.menopause.perimenopause') }}</span>
                                <span class="font-bold">4-8 {{ __('women_health.years') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-2 space-y-6">
                    <!-- Symptoms -->
                    <div id="meno-symptoms" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-thermometer-half text-orange-500"></i>
                            {{ __('women_health.menopause.symptoms_title') }}
                        </h2>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            @foreach(['hot_flashes', 'night_sweats', 'mood', 'sleep', 'memory', 'vaginal', 'periods', 'weight'] as $symptom)
                            <div class="bg-orange-50 rounded-lg p-3 text-center">
                                <p class="text-sm font-medium text-gray-700">{{ __('women_health.menopause.symptom_' . $symptom) }}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.menopause.symptoms_refs') }}
                        </div>
                    </div>
                    
                    <!-- Hormone Therapy -->
                    <div id="meno-hormone" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-pills text-pink-500"></i>
                            {{ __('women_health.menopause.hormone_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.menopause.hormone_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.menopause.hormone_refs') }}
                        </div>
                    </div>
                    
                    <!-- Bone Health -->
                    <div id="meno-bone" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-bone text-gray-500"></i>
                            {{ __('women_health.menopause.bone_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.menopause.bone_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.menopause.bone_refs') }}
                        </div>
                    </div>
                    
                    <!-- Heart Health -->
                    <div id="meno-heart" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-heart text-red-500"></i>
                            {{ __('women_health.menopause.heart_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.menopause.heart_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.menopause.heart_refs') }}
                        </div>
                    </div>
                    
                    <!-- Sexual Health -->
                    <div id="meno-sexual" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-heart text-pink-500"></i>
                            {{ __('women_health.menopause.sexual_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.menopause.sexual_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.menopause.sexual_refs') }}
                        </div>
                    </div>
                    
                    <!-- Mental Health -->
                    <div id="meno-mental" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-brain text-purple-500"></i>
                            {{ __('women_health.menopause.mental_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.menopause.mental_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.menopause.mental_refs') }}
                        </div>
                    </div>
                    
                    <!-- Urinary Health -->
                    <div id="meno-urinary" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-tint text-cyan-500"></i>
                            {{ __('women_health.menopause.urinary_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.menopause.urinary_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.menopause.urinary_refs') }}
                        </div>
                    </div>
                    
                    <!-- Cancer Screening -->
                    <div id="meno-cancer_screening" class="bg-rose-50 rounded-2xl border border-rose-100 p-6">
                        <h2 class="text-xl font-bold text-rose-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-ribbon text-rose-600"></i>
                            {{ __('women_health.menopause.cancer_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-rose-800">
                            {!! __('women_health.menopause.cancer_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-rose-100 rounded-lg text-xs text-rose-700">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.menopause.cancer_refs') }}
                        </div>
                    </div>
                    
                    <!-- Weight Management -->
                    <div id="meno-weight_management" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-weight text-green-500"></i>
                            {{ __('women_health.menopause.weight_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.menopause.weight_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.menopause.weight_refs') }}
                        </div>
                    </div>
                    
                    <!-- Skin and Hair Changes -->
                    <div id="meno-skin_hair" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-spa text-pink-400"></i>
                            {{ __('women_health.menopause.skin_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.menopause.skin_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.menopause.skin_refs') }}
                        </div>
                    </div>
                    
                    <!-- Menopause Hygiene -->
                    <div id="meno-hygiene_menopause" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-pump-soap text-green-500"></i>
                            {{ __('women_health.menopause.hygiene_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.menopause.hygiene_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.menopause.hygiene_refs') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Postpartum Tab -->
        <div id="content-postpartum" class="tab-content hidden">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-1 space-y-4">
                    <div class="bg-white rounded-2xl shadow-sm border border-cyan-100 p-5">
                        <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-bookmark text-cyan-500"></i>
                            {{ __('women_health.postpartum.topics_title') }}
                        </h3>
                        <div class="space-y-2">
                            @foreach(['recovery', 'breastfeeding', 'newborn', 'depression', 'contraception', 'checkups', 'hygiene_postpartum', 'exercise', 'nutrition', 'pelvic_floor', 'emotional_bonding'] as $topic)
                            <button onclick="scrollToSection('pp-{{ $topic }}')" class="w-full text-left px-3 py-2 rounded-lg text-sm hover:bg-cyan-50 hover:text-cyan-700 transition-colors flex items-center gap-2">
                                <i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-xs text-gray-400"></i>
                                {{ __('women_health.postpartum.topic_' . $topic) }}
                            </button>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Timeline -->
                    <div class="bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-2xl p-5 text-white">
                        <h3 class="font-bold mb-4">{{ __('women_health.postpartum.timeline_title') }}</h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex items-start gap-2">
                                <span class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs flex-shrink-0">1</span>
                                <span>{{ __('women_health.postpartum.hour1') }}</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs flex-shrink-0">2</span>
                                <span>{{ __('women_health.postpartum.day1') }}</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs flex-shrink-0">3</span>
                                <span>{{ __('women_health.postpartum.week1') }}</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs flex-shrink-0">4</span>
                                <span>{{ __('women_health.postpartum.week6') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-2 space-y-6">
                    <!-- Physical Recovery -->
                    <div id="pp-recovery" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-user-md text-cyan-500"></i>
                            {{ __('women_health.postpartum.recovery_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.postpartum.recovery_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.postpartum.recovery_refs') }}
                        </div>
                    </div>
                    
                    <!-- Breastfeeding -->
                    <div id="pp-breastfeeding" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-baby text-pink-500"></i>
                            {{ __('women_health.postpartum.breastfeeding_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.postpartum.breastfeeding_content') !!}
                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-3">
                            <div class="bg-pink-50 rounded-lg p-3 text-center">
                                <p class="text-2xl font-bold text-pink-600">6</p>
                                <p class="text-xs text-gray-600">{{ __('women_health.postpartum.months_exclusive') }}</p>
                            </div>
                            <div class="bg-pink-50 rounded-lg p-3 text-center">
                                <p class="text-2xl font-bold text-pink-600">2</p>
                                <p class="text-xs text-gray-600">{{ __('women_health.postpartum.years_continue') }}</p>
                            </div>
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.postpartum.breastfeeding_refs') }}
                        </div>
                    </div>
                    
                    <!-- Newborn Care -->
                    <div id="pp-newborn" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-baby-carriage text-green-500"></i>
                            {{ __('women_health.postpartum.newborn_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.postpartum.newborn_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.postpartum.newborn_refs') }}
                        </div>
                    </div>
                    
                    <!-- Postpartum Depression -->
                    <div id="pp-depression" class="bg-purple-50 rounded-2xl border border-purple-100 p-6">
                        <h2 class="text-xl font-bold text-purple-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-cloud-rain"></i>
                            {{ __('women_health.postpartum.depression_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-700">
                            {!! __('women_health.postpartum.depression_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-purple-100 rounded-lg text-sm text-purple-800">
                            <i class="fas fa-phone mr-2"></i>
                            {{ __('women_health.postpartum.help_line') }}
                        </div>
                        <div class="mt-3 p-3 bg-white rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.postpartum.depression_refs') }}
                        </div>
                    </div>
                    
                    <!-- Postpartum Contraception -->
                    <div id="pp-contraception" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-shield-alt text-purple-500"></i>
                            {{ __('women_health.postpartum.contraception_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.postpartum.contraception_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.postpartum.contraception_refs') }}
                        </div>
                    </div>
                    
                    <!-- Checkups -->
                    <div id="pp-checkups" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-calendar-check text-blue-500"></i>
                            {{ __('women_health.postpartum.checkups_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.postpartum.checkups_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.postpartum.checkups_refs') }}
                        </div>
                    </div>
                    
                    <!-- Postpartum Hygiene -->
                    <div id="pp-hygiene_postpartum" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-hands-wash text-green-500"></i>
                            {{ __('women_health.postpartum.hygiene_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.postpartum.hygiene_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.postpartum.hygiene_refs') }}
                        </div>
                    </div>
                    
                    <!-- Exercise Recovery -->
                    <div id="pp-exercise" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-running text-orange-500"></i>
                            {{ __('women_health.postpartum.exercise_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.postpartum.exercise_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.postpartum.exercise_refs') }}
                        </div>
                    </div>
                    
                    <!-- Postpartum Nutrition -->
                    <div id="pp-nutrition" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-utensils text-green-500"></i>
                            {{ __('women_health.postpartum.nutrition_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.postpartum.nutrition_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.postpartum.nutrition_refs') }}
                        </div>
                    </div>
                    
                    <!-- Pelvic Floor Therapy -->
                    <div id="pp-pelvic_floor" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-female text-pink-500"></i>
                            {{ __('women_health.postpartum.pelvic_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-gray-600">
                            {!! __('women_health.postpartum.pelvic_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 rounded-lg text-xs text-gray-500">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.postpartum.pelvic_refs') }}
                        </div>
                    </div>
                    
                    <!-- Emotional Bonding -->
                    <div id="pp-emotional_bonding" class="bg-pink-50 rounded-2xl border border-pink-100 p-6">
                        <h2 class="text-xl font-bold text-pink-900 mb-4 flex items-center gap-2">
                            <i class="fas fa-heart text-pink-600"></i>
                            {{ __('women_health.postpartum.bonding_title') }}
                        </h2>
                        <div class="prose prose-sm max-w-none text-pink-800">
                            {!! __('women_health.postpartum.bonding_content') !!}
                        </div>
                        <div class="mt-4 p-3 bg-pink-100 rounded-lg text-xs text-pink-700">
                            <strong>{{ __('women_health.references') }}:</strong> {{ __('women_health.postpartum.bonding_refs') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!-- AI Assistant CTA -->
<section class="py-12 bg-gradient-to-r from-pink-500 via-purple-500 to-cyan-500">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h2 class="text-2xl md:text-3xl font-bold mb-4">
            {{ __('women_health.ai_cta_title') }}
        </h2>
        <p class="text-white/80 mb-6 max-w-xl mx-auto">
            {{ __('women_health.ai_cta_desc') }}
        </p>
        <a href="{{ route('chatbot') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-900 font-semibold rounded-xl hover:bg-gray-100 transition-colors">
            <i class="fas fa-robot"></i>
            {{ __('women_health.ai_cta_button') }}
        </a>
    </div>
</section>
@endsection

@section('scripts')
<script>
function switchTab(tabName) {
    // Hide all tabs
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.classList.add('hidden');
    });
    
    // Show selected tab
    document.getElementById('content-' + tabName).classList.remove('hidden');
    
    // Update button styles
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('bg-pink-600', 'bg-purple-600', 'bg-orange-600', 'bg-cyan-600', 'text-white');
        btn.classList.add('bg-gray-100', 'text-gray-700');
        btn.setAttribute('aria-selected', 'false');
    });
    
    // Style active button
    const activeBtn = document.getElementById('tab-' + tabName);
    activeBtn.classList.remove('bg-gray-100', 'text-gray-700');
    activeBtn.setAttribute('aria-selected', 'true');
    
    // Set color based on tab
    const colors = {
        'pregnancy': 'bg-pink-600',
        'family-planning': 'bg-purple-600',
        'menopause': 'bg-orange-600',
        'postpartum': 'bg-cyan-600'
    };
    activeBtn.classList.add(colors[tabName], 'text-white');
    
    // Scroll to top of content
    document.querySelector('section.py-8').scrollIntoView({ behavior: 'smooth' });
}

function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth', block: 'center' });
        element.classList.add('ring-2', 'ring-pink-400');
        setTimeout(() => {
            element.classList.remove('ring-2', 'ring-pink-400');
        }, 2000);
    }
}

// Initialize on load
if (window.location.hash) {
    const tab = window.location.hash.replace('#', '');
    if (document.getElementById('tab-' + tab)) {
        switchTab(tab);
    }
}
</script>
@endsection
