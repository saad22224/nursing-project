@extends('layouts.admin')

@section('title', app()->getLocale() == 'ar' ? 'تعديل مقال' : 'Edit Article')

@section('content')
<div class="mb-6 flex justify-between items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100">
    <div class="flex-1">
        <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <div class="w-8 h-8 rounded-lg bg-indigo-50 flex items-center justify-center">
                <i class="fas fa-edit text-indigo-600"></i>
            </div>
            {{ app()->getLocale() == 'ar' ? 'تعديل المقال الطبي' : 'Edit Medical Article' }}
        </h2>
    </div>
    <a href="{{ route('admin.articles.index') }}" class="btn-outline flex items-center gap-2 hover:bg-gray-50 transition-colors">
        <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}"></i>
        {{ app()->getLocale() == 'ar' ? 'العودة' : 'Back' }}
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden text-sm">
    <div class="p-6 md:p-8">
        <form action="{{ route('admin.articles.update', $article) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="col-span-1 md:col-span-2 border-b border-gray-100 pb-4 mb-2">
                    <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                        <i class="fas fa-pencil-alt text-cyan-500"></i>
                        {{ app()->getLocale() == 'ar' ? 'محرر المقال' : 'Article Editor' }}
                    </h3>
                </div>

                <div class="col-span-1 md:col-span-2">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'العنوان' : 'Title' }} <span class="text-red-500">*</span></label>
                    <input type="text" name="title" value="{{ old('title', $article->title) }}" required class="input-minimal w-full text-lg font-medium">
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'التصنيف' : 'Category' }}</label>
                    <input type="text" name="category" value="{{ old('category', $article->category) }}" class="input-minimal w-full">
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">{{ app()->getLocale() == 'ar' ? 'لغة المقال' : 'Article Language' }}</label>
                    <select name="lang" class="input-minimal w-full cursor-pointer appearance-none bg-white font-medium">
                        <option value="ar" {{ old('lang', $article->lang) == 'ar' ? 'selected' : '' }}>العربية</option>
                        <option value="en" {{ old('lang', $article->lang) == 'en' ? 'selected' : '' }}>English</option>
                    </select>
                </div>

                <div class="col-span-1 md:col-span-2 mt-4">
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-sm font-semibold text-gray-700">
                            {{ app()->getLocale() == 'ar' ? 'محتوى المقال (يدعم HTML)' : 'Content (Supports HTML)' }} <span class="text-red-500">*</span>
                        </label>
                        <span class="text-xs text-gray-400 font-medium">HTML Allowed</span>
                    </div>
                    <textarea name="content" rows="16" required class="input-minimal w-full resize-y font-mono text-sm leading-relaxed p-4 bg-slate-50 border-gray-200">{{ old('content', $article->content) }}</textarea>
                </div>
            </div>
            
            <div class="pt-6 border-t border-gray-100 flex justify-end gap-3 mt-6">
                <a href="{{ route('admin.articles.index') }}" class="px-6 py-3 rounded-xl font-semibold text-gray-600 bg-gray-100 hover:bg-gray-200 transition-colors">
                    {{ app()->getLocale() == 'ar' ? 'إلغاء والتراجع' : 'Cancel' }}
                </a>
                <button type="submit" class="btn-primary px-8 py-3 rounded-xl text-md flex items-center gap-2 shadow-sm hover:shadow-md transition-all justify-center bg-indigo-600 hover:bg-indigo-700">
                    <i class="fas fa-save"></i>
                    {{ app()->getLocale() == 'ar' ? 'حفظ التحديث' : 'Update Article' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
