@extends('layouts.clinic')

@section('content')
<div class="space-y-6" data-aos="fade-up">
    <!-- Breadcrumbs & Actions -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <nav class="text-sm font-bold text-gray-400">
            <ol class="flex items-center gap-2">
                <li><a href="{{ route('clinic.dashboard') }}" class="hover:text-cyan-600">{{ __('clinic.dashboard') }}</a></li>
                <li><i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-[10px]"></i></li>
                <li><a href="{{ route('clinic.patients.index') }}" class="hover:text-cyan-600">{{ __('clinic.patients') }}</a></li>
                <li><i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-[10px]"></i></li>
                <li class="text-gray-900">{{ $patient->name }}</li>
            </ol>
        </nav>
        <a href="{{ route('clinic.patients.visits.create', $patient) }}" class="btn-primary">
            <i class="fas fa-plus-circle"></i>
            {{ __('clinic.add_visit') }}
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Sidebar Profile -->
        <div class="space-y-6">
            <div class="card-minimal p-6 text-center">
                <div class="w-20 h-20 rounded-2xl bg-cyan-100 text-cyan-600 flex items-center justify-center text-3xl font-bold mx-auto mb-4 border-2 border-white shadow-sm">
                    {{ strtoupper(substr($patient->name, 0, 1)) }}
                </div>
                <h2 class="text-2xl font-bold text-gray-900">{{ $patient->name }}</h2>
                <p class="text-gray-500 font-medium text-sm">{{ $patient->phone ?: '-' }}</p>
                
                <div class="mt-6 grid grid-cols-3 gap-2">
                    <div class="p-2 bg-gray-50 rounded-xl">
                        <p class="text-[10px] text-gray-400 font-bold uppercase">{{ __('clinic.age') }}</p>
                        <p class="text-sm font-bold text-gray-800">{{ $patient->age ?: '-' }}</p>
                    </div>
                    <div class="p-2 bg-gray-50 rounded-xl">
                        <p class="text-[10px] text-gray-400 font-bold uppercase">{{ app()->getLocale() == 'ar' ? 'الطول' : 'Height' }}</p>
                        <p class="text-sm font-bold text-gray-800">{{ $patient->height ?: '-' }}</p>
                    </div>
                    <div class="p-2 bg-cyan-50 rounded-xl">
                        <p class="text-[10px] text-cyan-500 font-bold uppercase">{{ __('clinic.bmi') }}</p>
                        <p class="text-sm font-bold text-cyan-700">{{ $patient->bmi ?: '-' }}</p>
                    </div>
                </div>
            </div>

            <div class="card-minimal p-6 space-y-4">
                <h3 class="font-bold text-gray-800 border-b pb-2 mb-4">{{ __('clinic.ob_history') }}</h3>
                <div class="flex justify-between text-center px-2">
                    <div><p class="text-lg font-bold text-cyan-600">G{{ $patient->gravida }}</p><p class="text-[10px] text-gray-400 uppercase font-bold">Gravida</p></div>
                    <div><p class="text-lg font-bold text-cyan-600">P{{ $patient->para }}</p><p class="text-[10px] text-gray-400 uppercase font-bold">Para</p></div>
                    <div><p class="text-lg font-bold text-cyan-600">A{{ $patient->abortion }}</p><p class="text-[10px] text-gray-400 uppercase font-bold">Abortion</p></div>
                    <div><p class="text-lg font-bold text-cyan-600">L{{ $patient->living }}</p><p class="text-[10px] text-gray-400 uppercase font-bold">Living</p></div>
                </div>
                <div class="pt-4 space-y-3 border-t">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-500">{{ __('clinic.lmp') }}</span>
                        <span class="font-bold">{{ $patient->lmp ? $patient->lmp->format('Y-m-d') : '-' }}</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-cyan-600 font-bold">{{ __('clinic.edd') }}</span>
                        <span class="font-bold text-cyan-700">{{ $patient->edd ? $patient->edd->format('Y-m-d') : '-' }}</span>
                    </div>
                    @if($patient->previous_cs)
                    <div class="bg-red-50 text-red-700 p-2 rounded-lg text-xs font-bold border border-red-100 text-center">
                        {{ __('clinic.previous_cs') }}
                    </div>
                    @endif
                </div>
            </div>

            @if($patient->medical_history)
            <div class="card-minimal p-6">
                <h3 class="font-bold text-gray-800 border-b pb-2 mb-3">{{ __('clinic.medical_history') }}</h3>
                <p class="text-sm text-gray-600 leading-relaxed italic">{{ $patient->medical_history }}</p>
            </div>
            @endif
        </div>

        <!-- Visits History -->
        <div class="lg:col-span-2 space-y-6">
            <h2 class="text-xl font-bold text-gray-900 border-b pb-3">{{ __('clinic.visits') }} ({{ $patient->visits->count() }})</h2>
            <div class="space-y-4">
                @forelse($patient->visits()->latest('visit_date')->get() as $visit)
                <div class="card-minimal p-6 hover:border-cyan-200 transition-colors">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-gray-50 flex flex-col items-center justify-center font-bold text-gray-400 border">
                                <span class="text-[10px] uppercase leading-none">{{ $visit->visit_date->format('M') }}</span>
                                <span class="text-xl leading-none">{{ $visit->visit_date->format('d') }}</span>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase">{{ $visit->visit_date->format('Y-m-d') }}</p>
                                <h4 class="font-bold text-gray-800">{{ $visit->complaints ?: (app()->getLocale() == 'ar' ? 'متابعة دورية' : 'Routine Check-up') }}</h4>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="flex gap-4">
                                <div class="text-center">
                                    <p class="text-[9px] text-gray-400 font-bold uppercase">{{ __('clinic.bp') }}</p>
                                    <p class="font-bold text-gray-800 text-sm">{{ $visit->bp ?: '-' }}</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-[9px] text-gray-400 font-bold uppercase">{{ __('clinic.weight') }}</p>
                                    <p class="font-bold text-gray-800 text-sm">{{ $visit->weight ?: '-' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($visit->medications || $visit->tests_required)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        @if($visit->medications)
                        <div class="p-4 bg-emerald-50 rounded-xl border border-emerald-100">
                            <p class="text-[10px] text-emerald-600 font-bold uppercase mb-1">{{ __('clinic.medications') }}</p>
                            <p class="text-xs text-emerald-900 font-medium whitespace-pre-line">{{ $visit->medications }}</p>
                        </div>
                        @endif
                        @if($visit->tests_required)
                        <div class="p-4 bg-indigo-50 rounded-xl border border-indigo-100">
                            <p class="text-[10px] text-indigo-600 font-bold uppercase mb-1">{{ __('clinic.tests') }}</p>
                            <p class="text-xs text-indigo-900 font-medium whitespace-pre-line">{{ $visit->tests_required }}</p>
                        </div>
                        @endif
                    </div>
                    @endif

                    <div class="mt-6 flex items-center justify-between pt-4 border-t border-gray-50">
                        @if($visit->next_visit_date)
                        <div class="text-xs font-bold text-cyan-600">
                            <i class="fas fa-calendar-check mr-1 rtl:ml-1"></i>
                            {{ __('clinic.next_visit') }}: {{ $visit->next_visit_date->format('Y-m-d') }}
                        </div>
                        @else
                        <div></div>
                        @endif
                        <a href="{{ route('clinic.patients.visits.show', [$patient, $visit]) }}" class="text-xs font-bold text-gray-400 hover:text-cyan-600 flex items-center gap-1 transition-colors">
                            {{ app()->getLocale() == 'ar' ? 'عرض التقرير' : 'View Report' }}
                            <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-[10px]"></i>
                        </a>
                    </div>
                </div>
                @empty
                <div class="card-minimal p-10 text-center text-gray-400 italic">
                    <p>{{ app()->getLocale() == 'ar' ? 'لا يوجد سجل زيارات حتى الآن.' : 'No visits recorded for this patient yet.' }}</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
