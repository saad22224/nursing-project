@extends('layouts.app')

@section('title', __('education.title'))

@section('content')
<!-- Hero Section -->
<section class="py-10 bg-gradient-to-b from-cyan-50 to-white" style="padding-top: 100px;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3" data-aos="fade-up">
            {{ __('education.title') }}
        </h1>
        <p class="text-gray-600 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            {{ __('education.hero_desc') }}
        </p>
    </div>
</section>
<!-- Dynamic AI Articles Section -->
@if($articles->count() > 0)
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-100 text-indigo-700 text-xs font-medium mb-3">
                <i class="fas fa-magic"></i>
                {{ __('education.smart_articles') }}
            </span>
            <h2 class="text-3xl font-bold text-gray-900">
                {{ __('education.library') }}
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $article)
            <div class="bg-white rounded-2xl shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="h-2 bg-gradient-to-r from-cyan-400 to-indigo-500"></div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full text-xs font-bold tracking-wider uppercase border border-indigo-100">
                            {{ $article->category ?? (app()->getLocale() == 'ar' ? __('education.general') : 'General') }}
                        </span>
                        <span class="text-gray-400 text-xs font-medium">
                            {{ $article->created_at->diffForHumans() }}
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 leading-tight">{{ $article->title }}</h3>
                    <div class="text-gray-600 text-sm mb-4 line-clamp-3 prose prose-sm max-w-none">
                        {!! Str::limit(strip_tags($article->content), 120) !!}
                    </div>
                    
                    <button onclick="openArticleModal('{{ $article->id }}')" class="text-indigo-600 font-semibold text-sm flex items-center gap-2 hover:text-indigo-800 transition-colors mt-auto pt-4 border-t border-gray-50 w-full group">
                        {{ app()->getLocale() == 'ar' ? __('education.read_more') : __('education.read_more') }}
                        <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} transform group-hover:translate-x-1 transition-transform"></i>
                    </button>
                    
                    <!-- Hidden content for modal -->
                    <div id="article-content-{{ $article->id }}" class="hidden">
                        {!! $article->content !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Article Modal -->
<div id="articleModal" class="fixed inset-0 z-[100] hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity backdrop-blur-sm" aria-hidden="true" onclick="closeArticleModal()"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 relative">
                <button onclick="closeArticleModal()" class="absolute top-4 right-4 rtl:right-auto rtl:left-4 text-gray-400 hover:text-gray-600 bg-gray-50 hover:bg-gray-100 rounded-full w-8 h-8 flex items-center justify-center transition-colors">
                    <i class="fas fa-times"></i>
                </button>
                <div class="sm:flex sm:items-start mt-4">
                    <div class="mt-3 text-center sm:mt-0 sm:text-left rtl:sm:text-right w-full">
                        <h3 class="text-2xl leading-6 font-bold text-gray-900 mb-6 pb-4 border-b border-gray-100" id="modal-title"></h3>
                        <div class="mt-2 prose prose-cyan max-w-none text-gray-600 leading-relaxed" id="modal-content">
                            <!-- Content injected here -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-slate-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse border-t border-gray-100">
                <button type="button" class="w-full inline-flex justify-center rounded-xl border border-transparent shadow-sm px-6 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm" onclick="closeArticleModal()">
                    {{ app()->getLocale() == 'ar' ? __('education.close') : __('education.close') }}
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function openArticleModal(id) {
        // Find title
        const card = document.querySelector(`[onclick="openArticleModal('${id}')"]`).closest('div.p-6');
        const title = card.querySelector('h3').innerText;
        const content = document.getElementById(`article-content-${id}`).innerHTML;
        
        document.getElementById('modal-title').innerText = title;
        document.getElementById('modal-content').innerHTML = content;
        
        const modal = document.getElementById('articleModal');
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
    
    function closeArticleModal() {
        const modal = document.getElementById('articleModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
</script>
@endif

<!-- Categories -->
<section class="py-6 {{ $articles->count() > 0 ? '' : '-mt-4' }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4" data-aos="fade-up" data-aos-delay="200">
            <a href="#nutrition" class="card-minimal rounded-xl p-5 text-center">
                <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-apple-alt text-green-600 text-lg"></i>
                </div>
                <h3 class="font-semibold text-gray-800 text-sm">{{ __('education.nutrition') }}</h3>
            </a>
            
            <a href="#danger-signs" class="card-minimal rounded-xl p-5 text-center">
                <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-exclamation-triangle text-red-600 text-lg"></i>
                </div>
                <h3 class="font-semibold text-gray-800 text-sm">{{ __('education.danger_signs') }}</h3>
            </a>
            
            <a href="#vaccination" class="card-minimal rounded-xl p-5 text-center">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-syringe text-blue-600 text-lg"></i>
                </div>
                <h3 class="font-semibold text-gray-800 text-sm">{{ __('education.vaccination') }}</h3>
            </a>
            
            <a href="#mental-health" class="card-minimal rounded-xl p-5 text-center">
                <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-brain text-purple-600 text-lg"></i>
                </div>
                <h3 class="font-semibold text-gray-800 text-sm">{{ __('education.mental_health') }}</h3>
            </a>
        </div>
    </div>
</section>

<!-- Nutrition Section -->
<section id="nutrition" class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-medium mb-3">
                <i class="fas fa-apple-alt"></i>
                {{ __('education.nutrition_title') }}
            </span>
            <h2 class="text-2xl font-bold text-gray-900">
                {{ __('education.nutrition_subtitle') }}
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Iron -->
            <div class="card-minimal rounded-2xl p-6" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center mb-4">
                    <i class="fas fa-drumstick-bite text-green-600"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-3">{{ __('education.iron') }}</h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> {{ __('education.red_meat') }}</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> {{ __('education.spinach') }}</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> {{ __('education.lentils_beans') }}</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-green-500 text-xs"></i> {{ __('education.eggs') }}</li>
                </ul>
            </div>
            
            <!-- Folic Acid -->
            <div class="card-minimal rounded-2xl p-6" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 rounded-xl bg-cyan-100 flex items-center justify-center mb-4">
                    <i class="fas fa-capsules text-cyan-600"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-3">{{ __('education.folic_acid') }}</h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-cyan-500 text-xs"></i> {{ __('education.oranges') }}</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-cyan-500 text-xs"></i> {{ __('education.avocado') }}</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-cyan-500 text-xs"></i> {{ __('education.broccoli') }}</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-cyan-500 text-xs"></i> {{ __('education.whole_grains') }}</li>
                </ul>
                <p class="mt-3 text-xs text-cyan-600 bg-cyan-50 rounded-lg p-2">
                    {{ __('education.folic_acid_daily') }}
                </p>
            </div>
            
            <!-- Calcium -->
            <div class="card-minimal rounded-2xl p-6" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
                    <i class="fas fa-bone text-blue-600"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-3">{{ __('education.calcium') }}</h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-blue-500 text-xs"></i> {{ __('education.milk') }}</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-blue-500 text-xs"></i> {{ __('education.yogurt') }}</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-blue-500 text-xs"></i> {{ __('education.cheese') }}</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-blue-500 text-xs"></i> {{ __('education.sardines') }}</li>
                </ul>
                <p class="mt-3 text-xs text-blue-600 bg-blue-50 rounded-lg p-2">
                    {{ __('education.calcium_daily') }}
                </p>
            </div>
        </div>
        
        <!-- Foods to Avoid -->
        <div class="mt-8 bg-red-50 rounded-2xl p-6 border border-red-100" data-aos="fade-up">
            <h3 class="font-bold text-red-700 mb-4 flex items-center gap-2">
                <i class="fas fa-ban"></i>
                {{ __('education.foods_avoid') }}
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <div class="flex items-center gap-2 p-3 bg-white rounded-xl text-sm">
                    <i class="fas fa-fish text-red-500"></i>
                    <span class="text-gray-700">{{ __('education.raw_fish') }}</span>
                </div>
                <div class="flex items-center gap-2 p-3 bg-white rounded-xl text-sm">
                    <i class="fas fa-wine-bottle text-red-500"></i>
                    <span class="text-gray-700">{{ __('education.alcohol') }}</span>
                </div>
                <div class="flex items-center gap-2 p-3 bg-white rounded-xl text-sm">
                    <i class="fas fa-mug-hot text-red-500"></i>
                    <span class="text-gray-700">{{ __('education.excess_caffeine') }}</span>
                </div>
                <div class="flex items-center gap-2 p-3 bg-white rounded-xl text-sm">
                    <i class="fas fa-egg text-red-500"></i>
                    <span class="text-gray-700">{{ __('education.raw_eggs') }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Danger Signs Section -->
<section id="danger-signs" class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-100 text-red-700 text-xs font-medium mb-3">
                <i class="fas fa-exclamation-triangle"></i>
                {{ __('education.pay_attention') }}
            </span>
            <h2 class="text-2xl font-bold text-gray-900">
                {{ __('education.danger_signs') }}
            </h2>
            <p class="text-red-600 text-sm mt-2">
                {{ __('education.contact_doctor') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white rounded-xl p-5 border-r-4 border-red-500" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-head-side-virus text-red-600"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-sm mb-1">{{ __('education.severe_headache') }}</h3>
                        <p class="text-gray-600 text-xs">{{ __('education.vision_problems') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl p-5 border-r-4 border-red-500" data-aos="fade-up" data-aos-delay="150">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-tint text-red-600"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-sm mb-1">{{ __('education.vaginal_bleeding') }}</h3>
                        <p class="text-gray-600 text-xs">{{ __('education.bleeding_evaluation') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl p-5 border-r-4 border-red-500" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-heartbeat text-red-600"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-sm mb-1">{{ __('education.decreased_movement') }}</h3>
                        <p class="text-gray-600 text-xs">{{ __('education.movement_count') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl p-5 border-r-4 border-red-500" data-aos="fade-up" data-aos-delay="250">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-hand-sparkles text-red-600"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-sm mb-1">{{ __('education.face_swelling') }}</h3>
                        <p class="text-gray-600 text-xs">{{ __('education.preeclampsia_sign') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl p-5 border-r-4 border-red-500" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-fire text-red-600"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-sm mb-1">{{ __('education.high_fever') }}</h3>
                        <p class="text-gray-600 text-xs">{{ __('education.fever_temp') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl p-5 border-r-4 border-red-500" data-aos="fade-up" data-aos-delay="350">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-utensils text-red-600"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-sm mb-1">{{ __('education.severe_vomiting') }}</h3>
                        <p class="text-gray-600 text-xs">{{ __('education.cannot_keep_food') }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Emergency -->
        <div class="mt-8 bg-red-600 rounded-2xl p-6 text-white text-center" data-aos="zoom-in">
            <i class="fas fa-ambulance text-4xl mb-3"></i>
            <h3 class="text-xl font-bold mb-1">{{ __('education.emergency') }}</h3>
            <p class="text-3xl font-bold">123</p>
        </div>
    </div>
</section>

<!-- Vaccination Section -->
<section id="vaccination" class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-medium mb-3">
                <i class="fas fa-syringe"></i>
                {{ __('education.prevention') }}
            </span>
            <h2 class="text-2xl font-bold text-gray-900">
                {{ __('education.essential_vaccinations') }}
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Tetanus -->
            <div class="card-minimal rounded-2xl p-6" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                        <i class="fas fa-syringe text-blue-600"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">{{ __('education.tetanus') }}</h3>
                        <span class="text-xs text-blue-600 font-medium">{{ __('education.mandatory') }}</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600">
                    {{ __('education.tetanus_doses') }}
                </p>
            </div>
            
            <!-- Flu -->
            <div class="card-minimal rounded-2xl p-6" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center">
                        <i class="fas fa-virus-slash text-green-600"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">{{ __('education.influenza') }}</h3>
                        <span class="text-xs text-green-600 font-medium">{{ __('education.recommended') }}</span>
                    </div>
                </div>
                <p class="text-sm text-gray-600">
                    {{ __('education.flu_safe') }}
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Mental Health Section -->
<section id="mental-health" class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-100 text-purple-700 text-xs font-medium mb-3">
                <i class="fas fa-heart"></i>
                {{ __('education.mental_health_matters') }}
            </span>
            <h2 class="text-2xl font-bold text-gray-900">
                {{ __('education.mental_health') }}
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-2xl p-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="fas fa-cloud-rain text-purple-500"></i>
                    {{ __('education.anxiety_stress') }}
                </h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><i class="fas fa-check text-purple-500 text-xs"></i> {{ __('education.talk_someone') }}</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-purple-500 text-xs"></i> {{ __('education.breathing_exercises') }}</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check text-purple-500 text-xs"></i> {{ __('education.enough_sleep') }}</li>
                </ul>
            </div>
            
            <div class="bg-white rounded-2xl p-6" data-aos="fade-up" data-aos-delay="200">
                <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="fas fa-baby text-pink-500"></i>
                    {{ __('education.postpartum_depression') }}
                </h3>
                <p class="text-sm text-gray-600 mb-3">
                    {{ __('education.depression_signs') }}
                </p>
                <p class="text-sm text-purple-600 font-medium">
                    {{ __('education.seek_help') }}
                </p>
            </div>
        </div>
        
        <!-- Tips -->
        <div class="mt-6 grid grid-cols-2 md:grid-cols-4 gap-4" data-aos="fade-up" data-aos-delay="300">
            <div class="bg-white rounded-xl p-4 text-center">
                <div class="w-10 h-10 rounded-lg bg-pink-100 flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-walking text-pink-600"></i>
                </div>
                <p class="text-xs font-medium text-gray-700">{{ __('education.walking') }}</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center">
                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-music text-blue-600"></i>
                </div>
                <p class="text-xs font-medium text-gray-700">{{ __('education.music') }}</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center">
                <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-users text-green-600"></i>
                </div>
                <p class="text-xs font-medium text-gray-700">{{ __('education.social') }}</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center">
                <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-spa text-purple-600"></i>
                </div>
                <p class="text-xs font-medium text-gray-700">{{ __('education.relaxation') }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
