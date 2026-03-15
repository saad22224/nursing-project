@extends('layouts.app')

@section('title', __('clinic.register_title'))

@section('content')
<div class="min-h-screen flex flex-col lg:flex-row" style="padding-top: 64px;">

    {{-- ===== الجانب الأيسر: المعلومات / Hero ===== --}}
    <div class="lg:w-1/2 relative bg-gradient-to-br from-cyan-700 via-cyan-600 to-teal-500 flex flex-col justify-center px-10 lg:px-20 py-16 overflow-hidden">
        {{-- خلفية زخرفية --}}
        <div class="absolute -top-20 -right-20 w-72 h-72 bg-white/5 rounded-full"></div>
        <div class="absolute bottom-10 -left-10 w-56 h-56 bg-white/5 rounded-full"></div>
        <div class="absolute top-1/2 right-1/4 w-32 h-32 bg-teal-400/20 rounded-full blur-2xl"></div>

        <div class="relative z-10 max-w-lg">
            {{-- Logo --}}
            <div class="flex items-center gap-3 mb-12">
                <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30 shadow-lg">
                    <i class="fas fa-hand-holding-medical text-white text-xl"></i>
                </div>
                <span class="text-2xl font-extrabold text-white tracking-tight uppercase">{{ __('nav.brand') }}</span>
            </div>

            {{-- Headline --}}
            <h1 class="text-4xl lg:text-5xl font-extrabold text-white leading-tight mb-6">
                {{ app()->getLocale() == 'ar' ? 'سجّل عيادتك' : 'Register' }}
                <br>
                <span class="text-teal-200">{{ app()->getLocale() == 'ar' ? 'وابدأ الإدارة الذكية' : 'Your Clinic Today' }}</span>
            </h1>
            <p class="text-cyan-100 text-lg leading-relaxed mb-10">
                {{ app()->getLocale() == 'ar'
                    ? 'منصة متكاملة لإدارة ملفات المريضات، سجل الزيارات، وتتبع التاريخ الطبي بكل سهولة واحترافية.'
                    : 'A complete platform to manage patient files, visit records, and medical history effortlessly.' }}
            </p>

            {{-- Features --}}
            <div class="space-y-4">
                @foreach([
                    [app()->getLocale() == 'ar' ? 'إدارة ملفات المريضات' : 'Patient File Management', 'fas fa-folder-open'],
                    [app()->getLocale() == 'ar' ? 'سجل الزيارات والتحاليل' : 'Visit & Lab Records', 'fas fa-notes-medical'],
                    [app()->getLocale() == 'ar' ? 'حساب تاريخ الولادة تلقائياً' : 'Auto EDD Calculation', 'fas fa-calendar-check'],
                    [app()->getLocale() == 'ar' ? 'تقارير طبية قابلة للطباعة' : 'Printable Medical Reports', 'fas fa-print'],
                ] as [$label, $icon])
                <div class="flex items-center gap-4">
                    <div class="w-9 h-9 rounded-xl bg-white/15 flex items-center justify-center flex-shrink-0 border border-white/20">
                        <i class="{{ $icon }} text-teal-200 text-sm"></i>
                    </div>
                    <span class="text-white font-semibold text-sm">{{ $label }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ===== الجانب الأيمن: الفورم ===== --}}
    <div class="lg:w-1/2 flex items-center justify-center bg-slate-50 px-6 lg:px-16 py-14">
        <div class="w-full max-w-md" data-aos="fade-left">

            {{-- Header --}}
            <div class="mb-8">
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                    {{ app()->getLocale() == 'ar' ? 'إنشاء حساب جديد' : 'Create Account' }}
                </h2>
                <p class="text-slate-400 text-sm mt-1.5 font-medium">
                    {{ app()->getLocale() == 'ar' ? 'أدخل بيانات العيادة للبدء' : 'Enter your clinic details to get started' }}
                </p>
            </div>

            {{-- Errors --}}
            @if($errors->any())
            <div class="bg-red-50 text-red-700 px-4 py-3 rounded-xl text-sm font-bold border border-red-100 mb-6 flex items-start gap-3">
                <i class="fas fa-exclamation-circle mt-0.5 text-red-400 flex-shrink-0"></i>
                <div class="space-y-1">
                    @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
            </div>
            @endif

            {{-- Form --}}
            <form action="{{ route('clinic.register') }}" method="POST" class="space-y-5">
                @csrf

                {{-- Clinic Name --}}
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">
                        {{ __('clinic.clinic_name') }} <span class="text-rose-400">*</span>
                    </label>
                    <div class="relative">
                        <i class="fas fa-hospital-user absolute {{ app()->getLocale() == 'ar' ? 'right-4' : 'left-4' }} top-1/2 -translate-y-1/2 text-slate-300 text-sm"></i>
                        <input type="text" name="name" required
                            class="w-full border-2 border-slate-200 rounded-xl py-3.5 {{ app()->getLocale() == 'ar' ? 'pr-11 pl-4' : 'pl-11 pr-4' }} text-sm font-medium text-slate-700 focus:outline-none focus:border-cyan-500 focus:ring-4 focus:ring-cyan-50 transition-all bg-white placeholder-slate-300"
                            placeholder="{{ app()->getLocale() == 'ar' ? 'اسم العيادة أو الطبيب' : 'Clinic / Doctor Name' }}"
                            value="{{ old('name') }}">
                    </div>
                </div>

                {{-- Email --}}
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">
                        {{ __('clinic.email') }} <span class="text-rose-400">*</span>
                    </label>
                    <div class="relative">
                        <i class="fas fa-envelope absolute {{ app()->getLocale() == 'ar' ? 'right-4' : 'left-4' }} top-1/2 -translate-y-1/2 text-slate-300 text-sm"></i>
                        <input type="email" name="email" required
                            class="w-full border-2 border-slate-200 rounded-xl py-3.5 {{ app()->getLocale() == 'ar' ? 'pr-11 pl-4' : 'pl-11 pr-4' }} text-sm font-medium text-slate-700 focus:outline-none focus:border-cyan-500 focus:ring-4 focus:ring-cyan-50 transition-all bg-white placeholder-slate-300"
                            placeholder="doctor@example.com"
                            value="{{ old('email') }}">
                    </div>
                </div>

                {{-- Password + Confirm side by side --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">
                            {{ __('clinic.password') }} <span class="text-rose-400">*</span>
                        </label>
                        <div class="relative">
                            <i class="fas fa-lock absolute {{ app()->getLocale() == 'ar' ? 'right-4' : 'left-4' }} top-1/2 -translate-y-1/2 text-slate-300 text-sm"></i>
                            <input type="password" name="password" required
                                class="w-full border-2 border-slate-200 rounded-xl py-3.5 {{ app()->getLocale() == 'ar' ? 'pr-11 pl-4' : 'pl-11 pr-4' }} text-sm font-medium text-slate-700 focus:outline-none focus:border-cyan-500 focus:ring-4 focus:ring-cyan-50 transition-all bg-white placeholder-slate-300"
                                placeholder="••••••••">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">
                            {{ __('clinic.confirm_password') }} <span class="text-rose-400">*</span>
                        </label>
                        <div class="relative">
                            <i class="fas fa-shield-alt absolute {{ app()->getLocale() == 'ar' ? 'right-4' : 'left-4' }} top-1/2 -translate-y-1/2 text-slate-300 text-sm"></i>
                            <input type="password" name="password_confirmation" required
                                class="w-full border-2 border-slate-200 rounded-xl py-3.5 {{ app()->getLocale() == 'ar' ? 'pr-11 pl-4' : 'pl-11 pr-4' }} text-sm font-medium text-slate-700 focus:outline-none focus:border-cyan-500 focus:ring-4 focus:ring-cyan-50 transition-all bg-white placeholder-slate-300"
                                placeholder="••••••••">
                        </div>
                    </div>
                </div>

                {{-- Submit --}}
                <button type="submit"
                    class="w-full bg-cyan-600 hover:bg-cyan-700 text-white font-extrabold py-4 rounded-xl transition-all shadow-lg shadow-cyan-500/25 hover:shadow-cyan-500/40 hover:-translate-y-0.5 flex items-center justify-center gap-2 text-sm mt-2">
                    <i class="fas fa-user-plus"></i>
                    {{ __('clinic.register_btn') }}
                </button>
            </form>

            {{-- Divider --}}
            <div class="flex items-center gap-4 my-6">
                <div class="flex-1 h-px bg-slate-200"></div>
                <span class="text-xs text-slate-400 font-bold uppercase tracking-widest">{{ app()->getLocale() == 'ar' ? 'أو' : 'OR' }}</span>
                <div class="flex-1 h-px bg-slate-200"></div>
            </div>

            {{-- Login link --}}
            <a href="{{ route('clinic.login') }}"
                class="w-full flex items-center justify-center gap-2 py-3.5 rounded-xl border-2 border-slate-200 text-slate-600 font-bold text-sm hover:border-cyan-500 hover:text-cyan-600 transition-all bg-white">
                <i class="fas fa-sign-in-alt text-xs"></i>
                {{ app()->getLocale() == 'ar' ? 'تسجيل الدخول لحساب موجود' : 'Sign in to existing account' }}
            </a>

            <p class="text-center text-slate-300 text-xs mt-6 flex items-center justify-center gap-1.5">
                <i class="fas fa-shield-check text-cyan-300"></i>
                {{ app()->getLocale() == 'ar' ? 'بياناتك مشفرة وآمنة تماماً' : 'Your data is fully encrypted & secure' }}
            </p>
        </div>
    </div>

</div>
@endsection
