@extends('layouts.admin')

@section('title', app()->getLocale() == 'ar' ? 'المحتوى التثقيفي' : 'Educational Content')

@section('content')
<div class="mb-6 flex justify-between items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100">
    <div class="flex-1">
        <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <div class="w-8 h-8 rounded-lg bg-indigo-50 flex items-center justify-center">
                <i class="fas fa-book-medical text-indigo-600"></i>
            </div>
            {{ app()->getLocale() == 'ar' ? 'إدارة التوعية الصحية' : 'Manage Health Education' }}
        </h2>
    </div>
    <a href="{{ route('admin.articles.create') }}" class="btn-primary flex items-center gap-2 shadow-sm hover:shadow-md transition-all">
        <i class="fas fa-plus bg-white/20 p-1 rounded"></i>
        {{ app()->getLocale() == 'ar' ? 'إضافة مقال جديد' : 'Add New Article' }}
    </a>
</div>

<div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden text-sm">
    <div class="overflow-x-auto">
        <table class="table-minimal w-full">
            <thead>
                <tr>
                    <th class="px-6 py-4 uppercase tracking-wider text-xs">{{ app()->getLocale() == 'ar' ? 'العنوان' : 'Title' }}</th>
                    <th class="px-6 py-4 uppercase tracking-wider text-xs">{{ app()->getLocale() == 'ar' ? 'التصنيف' : 'Category' }}</th>
                    <th class="px-6 py-4 uppercase tracking-wider text-xs">{{ app()->getLocale() == 'ar' ? 'اللغة' : 'Lang' }}</th>
                    <th class="px-6 py-4 text-center uppercase tracking-wider text-xs">{{ app()->getLocale() == 'ar' ? 'الإجراءات' : 'Actions' }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @forelse($articles as $article)
                <tr class="hover:bg-slate-50 transition-colors group">
                    <td class="px-6 py-4 font-semibold text-gray-800">
                        {{ $article->title }}
                    </td>
                    <td class="px-6 py-4 text-gray-600">
                        <span class="bg-gray-100 px-2.5 py-1 rounded-md text-xs font-medium">{{ $article->category ?? 'General' }}</span>
                    </td>
                    <td class="px-6 py-4 font-mono">
                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold rounded-md bg-indigo-50 text-indigo-700 uppercase border border-indigo-100">
                            {{ $article->lang }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="{{ route('admin.articles.edit', $article) }}" class="w-8 h-8 flex items-center justify-center rounded-lg bg-cyan-50 text-cyan-600 hover:bg-cyan-100 transition-colors" title="{{ app()->getLocale() == 'ar' ? 'تعديل' : 'Edit' }}">
                                <i class="fas fa-edit text-sm"></i>
                            </a>
                            <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="inline-block" onsubmit="return confirm('{{ app()->getLocale() == 'ar' ? 'هل أنت متأكد من الحذف؟' : 'Are you sure you want to delete?' }}');">
                                @csrf @method('DELETE')
                                <button type="submit" class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-600 hover:bg-red-100 transition-colors" title="{{ app()->getLocale() == 'ar' ? 'حذف' : 'Delete' }}">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-12 text-center text-gray-500">
                        <div class="flex flex-col items-center justify-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mb-3">
                                <i class="fas fa-file-alt text-2xl text-gray-300"></i>
                            </div>
                            <p class="text-gray-500 font-medium">{{ app()->getLocale() == 'ar' ? 'لا توجد مقالات مسجلة.' : 'No articles recorded.' }}</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if(method_exists($articles, 'links'))
    <div class="px-6 py-4 border-t border-gray-100 bg-gray-50">
        {{ $articles->links() }}
    </div>
    @endif
</div>
@endsection
