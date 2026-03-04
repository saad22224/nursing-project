@extends('layouts.admin')

@section('title', app()->getLocale() == 'ar' ? 'إضافة مقال جديد' : 'Add New Article')

@section('content')
<div class="mb-6 flex justify-between items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100">
    <div class="flex-1">
        <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <div class="w-8 h-8 rounded-lg bg-indigo-50 flex items-center justify-center">
                <i class="fas fa-edit text-indigo-600"></i>
            </div>
            {{ app()->getLocale() == 'ar' ? 'كتابة مقال أو نصيحة طبية' : 'Write / Generate Medical Article' }}
        </h2>
    </div>
    <a href="{{ route('admin.articles.index') }}" class="btn-outline flex items-center gap-2 hover:bg-gray-50 transition-colors">
        <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}"></i>
        {{ app()->getLocale() == 'ar' ? 'العودة' : 'Back' }}
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- AI Generator Section -->
    <div class="md:col-span-1">
        <div class="bg-gradient-to-br from-indigo-50 to-white rounded-2xl shadow-sm border border-indigo-100 overflow-hidden text-sm sticky top-20">
            <div class="p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center">
                        <i class="fas fa-robot text-indigo-600 text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800">{{ app()->getLocale() == 'ar' ? 'المؤلف الذكي' : 'AI Author' }}</h3>
                        <p class="text-xs text-gray-500 font-medium">Powered by Gemini</p>
                    </div>
                </div>
                
                <p class="text-gray-600 mb-6 leading-relaxed">
                    {{ app()->getLocale() == 'ar' 
                        ? 'أدخل موضوع المقال واضغط على توليد. سيقوم الذكاء الاصطناعي بكتابة مقال طبي مبسط ومنسق.' 
                        : 'Enter the article topic and hit Generate. AI will write a simple, formatted medical article.' }}
                </p>
                
                <form action="{{ route('admin.articles.generate') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'موضوع المقال' : 'Topic' }}</label>
                        <input type="text" name="topic" required class="input-minimal w-full border-indigo-200 focus:ring-indigo-500" placeholder="{{ app()->getLocale() == 'ar' ? 'مثال: علامات الخطر في الشهر التاسع' : 'e.g., Danger signs in the 9th month' }}">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'اللغة' : 'Language' }}</label>
                        <select name="lang" class="input-minimal w-full cursor-pointer appearance-none bg-white">
                            <option value="ar" {{ app()->getLocale() == 'ar' ? 'selected' : '' }}>العربية (Arabic)</option>
                            <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="w-full btn-primary bg-indigo-600 hover:bg-indigo-700 mt-2 py-3 flex items-center justify-center gap-2">
                        <i class="fas fa-magic"></i>
                        {{ app()->getLocale() == 'ar' ? 'توليد المحتوى بالذكاء الاصطناعي' : 'Generate with AI' }}
                    </button>
                    
                    @if(session('error'))
                        <div class="p-3 bg-red-50 text-red-600 rounded-lg text-xs mt-3 flex gap-2">
                            <i class="fas fa-exclamation-circle mt-0.5"></i>
                            {{ session('error') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <!-- Article Form Section -->
    <div class="md:col-span-2">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden text-sm">
            <div class="p-6 md:p-8">
                <form action="{{ route('admin.articles.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="col-span-1 md:col-span-2 border-b border-gray-100 pb-4 mb-2">
                            <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                                <i class="fas fa-pencil-alt text-cyan-500"></i>
                                {{ app()->getLocale() == 'ar' ? 'محرر المقال' : 'Article Editor' }}
                            </h3>
                        </div>

                        <div class="col-span-1 md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'العنوان' : 'Title' }} <span class="text-red-500">*</span></label>
                            <input type="text" name="title" value="{{ old('title') }}" required class="input-minimal w-full text-lg font-medium" placeholder="{{ app()->getLocale() == 'ar' ? 'أدخل عنوان المقال...' : 'Enter article title...' }}">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'التصنيف' : 'Category' }}</label>
                            <input type="text" name="category" value="{{ old('category') }}" class="input-minimal w-full" placeholder="{{ app()->getLocale() == 'ar' ? 'مثال: التغذية، التطعيمات' : 'Nutrition, Vaccination' }}">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'لغة المقال' : 'Article Language' }}</label>
                            <select name="lang" class="input-minimal w-full cursor-pointer appearance-none bg-white font-medium">
                                <option value="ar" {{ old('lang', app()->getLocale()) == 'ar' ? 'selected' : '' }}>العربية</option>
                                <option value="en" {{ old('lang', app()->getLocale()) == 'en' ? 'selected' : '' }}>English</option>
                            </select>
                        </div>

                        <div class="col-span-1 md:col-span-2 mt-4">
                            <div class="flex justify-between items-center mb-2">
                                <label class="block text-sm font-semibold text-gray-700">
                                    {{ app()->getLocale() == 'ar' ? 'محتوى المقال (يدعم HTML)' : 'Content (Supports HTML)' }} <span class="text-red-500">*</span>
                                </label>
                                <span class="text-xs text-gray-400 font-medium">HTML Allowed</span>
                            </div>
                            <textarea name="content" rows="16" required class="input-minimal w-full resize-y font-mono text-sm leading-relaxed p-4 bg-slate-50 border-gray-200" placeholder="{{ app()->getLocale() == 'ar' ? 'اكتب المحتوى هنا... يمكنك استخدام HTML للتنسيق.' : 'Write content here... HTML is supported.' }}">{{ old('content') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="pt-6 border-t border-gray-100 flex justify-end gap-3 mt-6">
                        <button type="submit" class="btn-primary px-8 py-3 rounded-xl text-md flex items-center gap-2 shadow-sm hover:shadow-md transition-all w-full md:w-auto justify-center">
                            <i class="fas fa-check-circle"></i>
                            {{ app()->getLocale() == 'ar' ? 'نشر المقال' : 'Publish Article' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
