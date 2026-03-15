@extends('layouts.clinic')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
        <div>
            <h1 class="text-3xl font-bold text-slate-900 tracking-tight">{{ __('clinic.patients') }}</h1>
            <p class="text-slate-500 text-sm mt-1 font-medium">{{ app()->getLocale() == 'ar' ? 'البحث وإدارة سجلات المريضات' : 'Search and manage patient records' }}</p>
        </div>
        <a href="{{ route('clinic.patients.create') }}" class="btn-primary">
            <i class="fas fa-plus"></i>
            {{ __('clinic.add_patient') }}
        </a>
    </div>

    <!-- Search Section -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-50 bg-slate-50/50 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-cyan-50 text-cyan-600 rounded-lg flex items-center justify-center text-sm">
                    <i class="fas fa-search"></i>
                </div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">{{ app()->getLocale() == 'ar' ? 'بحث في سجلات المرضى' : 'Search Patient Records' }}</p>
            </div>
            @if(request('search'))
            <span class="text-xs font-bold text-cyan-600 bg-cyan-50 px-3 py-1 rounded-full border border-cyan-100">
                {{ app()->getLocale() == 'ar' ? 'نتائج: ' : 'Results for: ' }}&ldquo;{{ request('search') }}&rdquo;
            </span>
            @endif
        </div>
        <div class="p-4">
            <form action="{{ route('clinic.patients.index') }}" method="GET" class="flex flex-col sm:flex-row gap-3">
                <div class="relative flex-1">
                    <i class="fas fa-search absolute {{ app()->getLocale() == 'ar' ? 'right-4' : 'left-4' }} top-1/2 -translate-y-1/2 text-slate-300 text-sm"></i>
                    <input type="text" name="search" id="search-input" value="{{ request('search') }}"
                           class="w-full border border-slate-200 rounded-xl py-3 {{ app()->getLocale() == 'ar' ? 'pr-11 pl-4' : 'pl-11 pr-4' }} text-sm font-medium text-slate-700 placeholder-slate-300 focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-100 transition-all bg-slate-50 focus:bg-white"
                           placeholder="{{ __('clinic.search_patients') }}">
                </div>
                <button type="submit" class="bg-cyan-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-cyan-700 transition-all shadow-md shadow-cyan-500/20 hover:-translate-y-0.5 flex items-center gap-2 justify-center text-sm">
                    <i class="fas fa-search text-xs"></i>
                    {{ app()->getLocale() == 'ar' ? 'بحث' : 'Search' }}
                </button>
                @if(request('search'))
                <a href="{{ route('clinic.patients.index') }}" class="bg-slate-100 text-slate-600 px-6 py-3 rounded-xl font-bold hover:bg-slate-200 transition-all flex items-center gap-2 justify-center text-sm border border-slate-200">
                    <i class="fas fa-times text-xs"></i>
                    {{ app()->getLocale() == 'ar' ? 'إلغاء' : 'Reset' }}
                </a>
                @else
                <button type="button" onclick="document.getElementById('search-input').value=''; this.form.submit();" class="bg-slate-100 text-slate-400 px-6 py-3 rounded-xl font-bold hover:bg-slate-200 transition-all flex items-center gap-2 justify-center text-sm border border-slate-200 cursor-pointer">
                    <i class="fas fa-rotate-left text-xs"></i>
                    {{ app()->getLocale() == 'ar' ? 'مسح' : 'Clear' }}
                </button>
                @endif
            </form>
        </div>
    </div>

    <!-- Patients List -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-100">
                        <th class="px-6 py-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest">{{ __('clinic.clinic_name') }}</th>
                        <th class="px-6 py-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest">{{ __('clinic.phone') }}</th>
                        <th class="px-6 py-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest text-center">{{ __('clinic.age') }}</th>
                        <th class="px-6 py-4 text-[11px] font-bold text-slate-400 uppercase tracking-widest">{{ __('clinic.ob_history') }}</th>
                        <th class="px-6 py-4"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($patients as $p)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center font-bold text-lg">
                                    {{ strtoupper(substr($p->name, 0, 1)) }}
                                </div>
                                <div class="overflow-hidden">
                                    <p class="font-bold text-slate-900 leading-none truncate">{{ $p->name }}</p>
                                    @if($p->husband_name)
                                    <p class="text-[10px] text-slate-400 mt-1 uppercase tracking-tight">{{ __('clinic.husband_name') }}: {{ $p->husband_name }}</p>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5 text-slate-600 font-bold text-sm">{{ $p->phone ?: '-' }}</td>
                        <td class="px-6 py-5 text-center">
                            <span class="px-2.5 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold">{{ $p->age ?: '-' }}</span>
                        </td>
                        <td class="px-6 py-5">
                            <div class="flex gap-1.5">
                                <span class="bg-cyan-50 text-cyan-700 px-2 py-0.5 rounded-md text-[10px] font-bold border border-cyan-100">G{{ $p->gravida }}</span>
                                <span class="bg-cyan-50 text-cyan-700 px-2 py-0.5 rounded-md text-[10px] font-bold border border-cyan-100">P{{ $p->para }}</span>
                                <span class="bg-rose-50 text-rose-700 px-2 py-0.5 rounded-md text-[10px] font-bold border border-rose-100">A{{ $p->abortion }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-5 text-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}">
                            <a href="{{ route('clinic.patients.show', $p) }}" class="inline-flex items-center gap-2 px-4 py-2 border border-slate-200 text-slate-600 rounded-xl hover:border-cyan-600 hover:text-cyan-600 transition-all font-bold text-xs uppercase shadow-sm bg-white">
                                <i class="fas fa-file-medical"></i>
                                {{ __('clinic.view_file') }}
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-20 text-center">
                            <div class="flex flex-col items-center justify-center text-slate-300">
                                <i class="fas fa-folder-open text-5xl mb-4"></i>
                                <p class="font-bold uppercase tracking-widest text-sm text-slate-400">{{ app()->getLocale() == 'ar' ? 'لا يوجد مريضات مسجلات حالياً' : 'No patients found' }}</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($patients->hasPages())
        <div class="p-6 border-t border-slate-100 bg-slate-50/50">
            {{ $patients->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
