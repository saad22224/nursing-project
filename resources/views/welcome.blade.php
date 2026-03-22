@extends('layouts.app')

@section('title', __('home.title'))

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[85vh] flex items-center overflow-hidden bg-gradient-to-b from-cyan-50/50 to-white">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 right-10 w-72 h-72 bg-cyan-100 rounded-full blur-3xl opacity-60 float-animation"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-cyan-50 rounded-full blur-3xl opacity-60 float-animation" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Content -->
            <div class="text-center lg:text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-cyan-100 text-cyan-700 text-sm font-medium mb-6">
                    <span class="w-2 h-2 rounded-full bg-cyan-500 pulse-soft"></span>
                    {{ __('home.badge') }}
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                    {{ __('home.hero_title_1') }}
                    <br>
                    <span class="gradient-text">{{ __('home.hero_title_2') }}</span>
                </h1>
                
                <p class="text-lg text-gray-600 mb-8 leading-relaxed max-w-xl {{ app()->getLocale() == 'ar' ? 'mr-auto lg:mr-0' : 'ml-auto lg:ml-0' }} lg:mx-0">
                    {{ __('home.hero_desc') }}
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-{{ app()->getLocale() == 'ar' ? 'end' : 'start' }}">
                    <a href="{{ route('calculator') }}" class="btn-primary inline-flex items-center justify-center gap-2">
                        <i class="fas fa-calculator"></i>
                        {{ __('home.btn_calculate') }}
                    </a>
                    <a href="{{ route('chatbot') }}" class="btn-outline inline-flex items-center justify-center gap-2">
                        <i class="fas fa-comments"></i>
                        {{ __('home.btn_chat') }}
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-3 gap-8 mt-12 pt-8 border-t border-gray-100">
                    <div data-aos="fade-up" data-aos-delay="100">
                        <div class="text-3xl font-bold text-cyan-600">10K+</div>
                        <div class="text-sm text-gray-500 mt-1">{{ __('home.stat_cases') }}</div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="text-3xl font-bold text-cyan-600">98%</div>
                        <div class="text-sm text-gray-500 mt-1">{{ __('home.stat_accuracy') }}</div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="300">
                        <div class="text-3xl font-bold text-cyan-600">24/7</div>
                        <div class="text-sm text-gray-500 mt-1">{{ __('home.stat_support') }}</div>
                    </div>
                </div>
            </div>
            
            <!-- Hero Visual -->
            <div class="relative" data-aos="fade-up" data-aos-delay="200">
                <div class="relative">
                    <!-- Main Card -->
                    <div class="bg-white rounded-3xl shadow-xl shadow-cyan-500/10 p-8 border border-gray-100">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="font-semibold text-gray-800">{{ __('home.quick_assessment') }}</h3>
                            <span class="w-3 h-3 rounded-full bg-green-500 pulse-soft"></span>
                        </div>
                        
                        <div class="space-y-4">
                            <!-- Risk Level -->
                            <div class="bg-gray-50 rounded-2xl p-5">
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-sm text-gray-600">{{ __('home.risk_level') }}</span>
                                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                                        {{ __('home.risk_low') }}
                                    </span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full transition-all duration-1000" style="width: 25%"></div>
                                </div>
                            </div>
                            
                            <!-- Health Metrics -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-cyan-50 rounded-2xl p-4 text-center" data-aos="zoom-in" data-aos-delay="400">
                                    <i class="fas fa-heartbeat text-cyan-600 text-2xl mb-2"></i>
                                    <p class="text-xs text-gray-500">{{ __('home.bp') }}</p>
                                    <p class="font-bold text-gray-800 mt-1">120/80</p>
                                </div>
                                <div class="bg-cyan-50 rounded-2xl p-4 text-center" data-aos="zoom-in" data-aos-delay="500">
                                    <i class="fas fa-droplet text-cyan-600 text-2xl mb-2"></i>
                                    <p class="text-xs text-gray-500">{{ __('home.sugar') }}</p>
                                    <p class="font-bold text-gray-800 mt-1">95 mg</p>
                                </div>
                                <div class="bg-cyan-50 rounded-2xl p-4 text-center" data-aos="zoom-in" data-aos-delay="600">
                                    <i class="fas fa-weight text-cyan-600 text-2xl mb-2"></i>
                                    <p class="text-xs text-gray-500">{{ __('home.weight') }}</p>
                                    <p class="font-bold text-gray-800 mt-1">68 kg</p>
                                </div>
                                <div class="bg-cyan-50 rounded-2xl p-4 text-center" data-aos="zoom-in" data-aos-delay="700">
                                    <i class="fas fa-baby text-cyan-600 text-2xl mb-2"></i>
                                    <p class="text-xs text-gray-500">{{ __('home.week') }}</p>
                                    <p class="font-bold text-gray-800 mt-1">24</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 bg-white rounded-2xl shadow-lg p-4 float-animation" data-aos="fade-down" data-aos-delay="800">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="fas fa-check text-green-600"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">{{ __('home.status') }}</p>
                                <p class="font-semibold text-green-600 text-sm">{{ __('home.status_excellent') }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-lg p-4 float-animation" style="animation-delay: 1s;" data-aos="fade-up" data-aos-delay="900">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-cyan-100 flex items-center justify-center">
                                <i class="fas fa-robot text-cyan-600"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">{{ __('home.assistant') }}</p>
                                <p class="font-semibold text-cyan-600 text-sm">{{ __('home.assistant_online') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                {{ __('home.services_title') }}
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                {{ __('home.services_desc') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Feature 1 -->
            <div class="card-minimal rounded-2xl p-6" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 rounded-2xl bg-cyan-100 flex items-center justify-center mb-5">
                    <i class="fas fa-calculator text-cyan-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    {{ __('home.svc_calc_title') }}
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    {{ __('home.svc_calc_desc') }}
                </p>
                <a href="{{ route('calculator') }}" class="text-cyan-600 text-sm font-medium hover:text-cyan-700 inline-flex items-center gap-1">
                    {{ __('home.svc_calc_cta') }}
                    <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-xs"></i>
                </a>
            </div>
            
            <!-- Feature 2 -->
            <div class="card-minimal rounded-2xl p-6" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 rounded-2xl bg-cyan-100 flex items-center justify-center mb-5">
                    <i class="fas fa-book-medical text-cyan-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    {{ __('home.svc_edu_title') }}
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    {{ __('home.svc_edu_desc') }}
                </p>
                <a href="{{ route('women-health') }}" class="text-cyan-600 text-sm font-medium hover:text-cyan-700 inline-flex items-center gap-1">
                    {{ __('home.svc_edu_cta') }}
                    <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-xs"></i>
                </a>
            </div>
            
            <!-- Feature 3 -->
            <div class="card-minimal rounded-2xl p-6" data-aos="fade-up" data-aos-delay="300">
                <div class="w-14 h-14 rounded-2xl bg-cyan-100 flex items-center justify-center mb-5">
                    <i class="fas fa-robot text-cyan-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    {{ __('home.svc_ai_title') }}
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    {{ __('home.svc_ai_desc') }}
                </p>
                <a href="{{ route('chatbot') }}" class="text-cyan-600 text-sm font-medium hover:text-cyan-700 inline-flex items-center gap-1">
                    {{ __('home.svc_ai_cta') }}
                    <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-xs"></i>
                </a>
            </div>
            
            <!-- Feature 4 - Women's Health Hub -->
            {{-- <div class="card-minimal rounded-2xl p-6" data-aos="fade-up" data-aos-delay="400">
                <div class="w-14 h-14 rounded-2xl bg-pink-100 flex items-center justify-center mb-5">
                    <i class="fas fa-female text-pink-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    {{ app()->getLocale() == 'ar' ? 'مركز صحة نسا' : "Women's Health Hub" }}
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    {{ app()->getLocale() == 'ar' ? 'معلومات شاملة عن الحمل، تخطيط الأسرة، سن اليأس، وما بعد الولادة' : 'Comprehensive info on pregnancy, family planning, menopause, and postpartum' }}
                </p>
                <a href="{{ route('women-health') }}" class="text-pink-600 text-sm font-medium hover:text-pink-700 inline-flex items-center gap-1">
                    {{ app()->getLocale() == 'ar' ? 'استكشفي المزيد' : 'Learn More' }}
                    <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-xs"></i>
                </a>
            </div> --}}
            
            <!-- Feature 5 -->
            {{-- <div class="card-minimal rounded-2xl p-6" data-aos="fade-up" data-aos-delay="500">
                <div class="w-14 h-14 rounded-2xl bg-cyan-100 flex items-center justify-center mb-5">
                    <i class="fas fa-file-medical text-cyan-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">
                    {{ __('home.svc_rep_title') }}
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    {{ __('home.svc_rep_desc') }}
                </p>
                <a href="#" class="text-cyan-600 text-sm font-medium hover:text-cyan-700 inline-flex items-center gap-1">
                    {{ __('home.svc_rep_cta') }}
                    <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-xs"></i>
                </a>
            </div> --}}
        </div>
    </div>
</section>

<!-- Risk Levels Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                {{ __('home.risk_levels_title') }}
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                {{ __('home.risk_levels_desc') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Low Risk -->
            <div class="bg-white rounded-2xl p-8 border-2 border-green-100 hover:border-green-300 transition-colors" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-6">
                    <i class="fas fa-check-circle text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('home.low_title') }}</h3>
                <div class="text-4xl font-bold text-green-600 mb-4">0-1</div>
                <p class="text-gray-600 text-sm mb-6">
                    {{ __('home.low_desc') }}
                </p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-green-500 text-xs"></i>
                        {{ __('home.low_li1') }}
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-green-500 text-xs"></i>
                        {{ __('home.low_li2') }}
                    </li>
                </ul>
            </div>
            
            <!-- Moderate Risk -->
            <div class="bg-white rounded-2xl p-8 border-2 border-yellow-100 hover:border-yellow-300 transition-colors" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 rounded-full bg-yellow-100 flex items-center justify-center mb-6">
                    <i class="fas fa-exclamation-circle text-yellow-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('home.moderate_title') }}</h3>
                <div class="text-4xl font-bold text-yellow-600 mb-4">2-3</div>
                <p class="text-gray-600 text-sm mb-6">
                    {{ __('home.moderate_desc') }}
                </p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-yellow-500 text-xs"></i>
                        {{ __('home.moderate_li1') }}
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-yellow-500 text-xs"></i>
                        {{ __('home.moderate_li2') }}
                    </li>
                </ul>
            </div>
            
            <!-- High Risk -->
            <div class="bg-white rounded-2xl p-8 border-2 border-red-100 hover:border-red-300 transition-colors" data-aos="fade-up" data-aos-delay="300">
                <div class="w-14 h-14 rounded-full bg-red-100 flex items-center justify-center mb-6">
                    <i class="fas fa-exclamation-triangle text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('home.high_title') }}</h3>
                <div class="text-4xl font-bold text-red-600 mb-4">4+</div>
                <p class="text-gray-600 text-sm mb-6">
                    {{ __('home.high_desc') }}
                </p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-red-500 text-xs"></i>
                        {{ __('home.high_li1') }}
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-red-500 text-xs"></i>
                        {{ __('home.high_li2') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-24 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-cyan-100 text-cyan-700 text-sm font-medium mb-4">
                <i class="fas fa-question-circle"></i>
                <span>{{ __('home.faq_badge') }}</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                {{ __('home.faq_title') }}
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                {{ __('home.faq_desc') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- FAQ Item 1 -->
            <div class="group bg-gradient-to-br from-cyan-50 to-white rounded-2xl p-6 border border-cyan-100 hover:border-cyan-300 hover:shadow-xl hover:shadow-cyan-500/10 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <button class="faq-btn w-full text-left flex items-start justify-between gap-4">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-10 h-10 rounded-xl bg-cyan-600 text-white flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">1</span>
                        </div>
                        <span class="font-semibold text-gray-900 text-lg leading-relaxed">{{ __('home.faq_q1') }}</span>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-cyan-100 flex items-center justify-center flex-shrink-0 group-hover:bg-cyan-600 transition-colors">
                        <i class="fas fa-plus text-cyan-600 group-hover:text-white transition-colors"></i>
                    </div>
                </button>
                <div class="faq-content hidden mt-4 pt-4 border-t border-cyan-100">
                    <p class="text-gray-600 leading-relaxed text-sm">{{ __('home.faq_a1') }}</p>
                </div>
            </div>
            
            <!-- FAQ Item 2 -->
            <div class="group bg-gradient-to-br from-cyan-50 to-white rounded-2xl p-6 border border-cyan-100 hover:border-cyan-300 hover:shadow-xl hover:shadow-cyan-500/10 transition-all duration-300" data-aos="fade-up" data-aos-delay="150">
                <button class="faq-btn w-full text-left flex items-start justify-between gap-4">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-10 h-10 rounded-xl bg-cyan-600 text-white flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">2</span>
                        </div>
                        <span class="font-semibold text-gray-900 text-lg leading-relaxed">{{ __('home.faq_q2') }}</span>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-cyan-100 flex items-center justify-center flex-shrink-0 group-hover:bg-cyan-600 transition-colors">
                        <i class="fas fa-plus text-cyan-600 group-hover:text-white transition-colors"></i>
                    </div>
                </button>
                <div class="faq-content hidden mt-4 pt-4 border-t border-cyan-100">
                    <p class="text-gray-600 leading-relaxed text-sm">{{ __('home.faq_a2') }}</p>
                </div>
            </div>
            
            <!-- FAQ Item 3 -->
            <div class="group bg-gradient-to-br from-cyan-50 to-white rounded-2xl p-6 border border-cyan-100 hover:border-cyan-300 hover:shadow-xl hover:shadow-cyan-500/10 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <button class="faq-btn w-full text-left flex items-start justify-between gap-4">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-10 h-10 rounded-xl bg-cyan-600 text-white flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">3</span>
                        </div>
                        <span class="font-semibold text-gray-900 text-lg leading-relaxed">{{ __('home.faq_q3') }}</span>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-cyan-100 flex items-center justify-center flex-shrink-0 group-hover:bg-cyan-600 transition-colors">
                        <i class="fas fa-plus text-cyan-600 group-hover:text-white transition-colors"></i>
                    </div>
                </button>
                <div class="faq-content hidden mt-4 pt-4 border-t border-cyan-100">
                    <p class="text-gray-600 leading-relaxed text-sm">{{ __('home.faq_a3') }}</p>
                </div>
            </div>
            
            <!-- FAQ Item 4 -->
            <div class="group bg-gradient-to-br from-cyan-50 to-white rounded-2xl p-6 border border-cyan-100 hover:border-cyan-300 hover:shadow-xl hover:shadow-cyan-500/10 transition-all duration-300" data-aos="fade-up" data-aos-delay="250">
                <button class="faq-btn w-full text-left flex items-start justify-between gap-4">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-10 h-10 rounded-xl bg-cyan-600 text-white flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">4</span>
                        </div>
                        <span class="font-semibold text-gray-900 text-lg leading-relaxed">{{ __('home.faq_q4') }}</span>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-cyan-100 flex items-center justify-center flex-shrink-0 group-hover:bg-cyan-600 transition-colors">
                        <i class="fas fa-plus text-cyan-600 group-hover:text-white transition-colors"></i>
                    </div>
                </button>
                <div class="faq-content hidden mt-4 pt-4 border-t border-cyan-100">
                    <p class="text-gray-600 leading-relaxed text-sm">{{ __('home.faq_a4') }}</p>
                </div>
            </div>
            
            <!-- FAQ Item 5 -->
            <div class="group bg-gradient-to-br from-cyan-50 to-white rounded-2xl p-6 border border-cyan-100 hover:border-cyan-300 hover:shadow-xl hover:shadow-cyan-500/10 transition-all duration-300 md:col-span-2" data-aos="fade-up" data-aos-delay="300">
                <button class="faq-btn w-full text-left flex items-start justify-between gap-4">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-10 h-10 rounded-xl bg-cyan-600 text-white flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="font-bold">5</span>
                        </div>
                        <span class="font-semibold text-gray-900 text-lg leading-relaxed">{{ __('home.faq_q5') }}</span>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-cyan-100 flex items-center justify-center flex-shrink-0 group-hover:bg-cyan-600 transition-colors">
                        <i class="fas fa-plus text-cyan-600 group-hover:text-white transition-colors"></i>
                    </div>
                </button>
                <div class="faq-content hidden mt-4 pt-4 border-t border-cyan-100">
                    <p class="text-gray-600 leading-relaxed text-sm">{{ __('home.faq_a5') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-cyan-600 rounded-3xl p-12 text-center text-white relative overflow-hidden" data-aos="zoom-in">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-0 w-40 h-40 border border-white rounded-full"></div>
                <div class="absolute bottom-0 right-0 w-60 h-60 border border-white rounded-full"></div>
            </div>
            
            <div class="relative">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    {{ __('home.cta_title') }}
                </h2>
                <p class="text-cyan-100 text-lg mb-8 max-w-xl mx-auto">
                    {{ __('home.cta_desc') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('calculator') }}" class="px-8 py-4 bg-white text-cyan-600 font-bold rounded-xl hover:bg-cyan-50 transition-colors">
                        <i class="fas fa-calculator mr-2"></i>
                        {{ __('home.cta_btn1') }}
                    </a>
                    <a href="{{ route('chatbot') }}" class="px-8 py-4 bg-cyan-700 text-white font-bold rounded-xl hover:bg-cyan-800 transition-colors">
                        <i class="fas fa-comments mr-2"></i>
                        {{ __('home.cta_btn2') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
