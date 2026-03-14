@extends('layouts.app')

@section('title', __('clinic.forgot_password'))

@section('content')
<div class="min-h-screen flex items-center justify-center bg-slate-50 py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden" style="padding-top: 150px;">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-indigo-100 rounded-full blur-3xl opacity-50"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-cyan-100 rounded-full blur-3xl opacity-50"></div>

    <div class="max-w-md w-full" data-aos="zoom-in">
        <div class="bg-white rounded-[2.5rem] shadow-2xl border border-gray-100 overflow-hidden relative z-10">
            <!-- Header with Gradient -->
            <div class="bg-gradient-to-br from-slate-700 to-slate-900 p-10 text-center text-white">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-3xl bg-white/20 backdrop-blur-md shadow-xl mb-6 transform -rotate-6 transition-transform hover:rotate-0 cursor-default">
                    <i class="fas fa-key text-3xl"></i>
                </div>
                <h2 class="text-2xl font-black tracking-tight mb-2">{{ __('clinic.forgot_password') }}</h2>
                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.2em] opacity-80">
                    {{ app()->getLocale() == 'ar' ? 'استعادة الوصول إلى حسابك' : 'RECOVER ACCESS TO YOUR ACCOUNT' }}
                </p>
            </div>

            <div class="p-10 bg-white">
                <p class="text-gray-500 text-sm font-medium mb-8 text-center leading-relaxed">
                    {{ app()->getLocale() == 'ar' ? 'أدخل بريدك الإلكتروني المسجل وسوف نرسل لك رابطاً آمناً لإعادة تعيين كلمة السر الخاصة بك.' : 'Enter your registered email address and we will send you a secure link to reset your password.' }}
                </p>

                @if(session('status'))
                <div class="bg-emerald-50 text-emerald-700 p-4 rounded-2xl text-xs font-bold border border-emerald-100 mb-6 flex items-center gap-3">
                    <i class="fas fa-paper-plane animate-bounce"></i>
                    {{ session('status') }}
                </div>
                @endif

                @if($errors->any())
                <div class="bg-red-50 text-red-700 p-4 rounded-2xl text-xs font-bold border border-red-100 mb-6 flex items-center gap-3">
                    <i class="fas fa-exclamation-triangle"></i>
                    <div>
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
                @endif

                <form class="space-y-6" action="{{ route('clinic.password.email') }}" method="POST">
                    @csrf
                    <div class="group">
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 px-1">{{ __('clinic.email') }}</label>
                        <div class="relative">
                            <i class="fas fa-envelope absolute {{ app()->getLocale() == 'ar' ? 'right-4' : 'left-4' }} top-4 text-gray-300 group-focus-within:text-cyan-500 transition-colors"></i>
                            <input name="email" type="email" required 
                                   class="input-minimal {{ app()->getLocale() == 'ar' ? 'pr-12' : 'pl-12' }} py-4 border-gray-100 focus:border-cyan-500 focus:ring-4 focus:ring-cyan-50 font-bold" 
                                   placeholder="doctor@example.com" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full btn-primary py-4 rounded-2xl shadow-2xl shadow-cyan-500/30 flex items-center justify-center gap-3 active:scale-95 transition-all text-sm font-black uppercase tracking-widest">
                            <i class="fas fa-bolt"></i>
                            {{ __('clinic.send_link') }}
                        </button>
                    </div>
                </form>

                <div class="mt-10 text-center">
                    <a href="{{ route('clinic.login') }}" class="inline-flex items-center gap-2 text-sm font-black text-gray-400 hover:text-cyan-600 transition-all">
                        <i class="fas fa-arrow-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }} text-xs"></i>
                        {{ __('clinic.back_to_login') }}
                    </a>
                </div>
            </div>
        </div>
        
        <p class="mt-8 text-center text-[10px] font-black text-gray-400 uppercase tracking-[0.3em]">
            © 2026 Materniq Health System
        </p>
    </div>
</div>
@endsection
