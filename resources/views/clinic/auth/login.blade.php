@extends('layouts.app')

@section('title', __('clinic.login_title'))

@section('content')
<div class="min-h-screen bg-gray-50 flex items-center justify-center p-6 py-24">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden" data-aos="fade-up">
        <div class="p-8 text-center bg-cyan-600 text-white">
            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4 text-2xl">
                <i class="fas fa-clinic-medical"></i>
            </div>
            <h1 class="text-2xl font-bold">{{ __('clinic.login_title') }}</h1>
            <p class="text-cyan-100 text-sm mt-1 uppercase font-bold tracking-widest">{{ __('nav.brand') }} CLINIC SYSTEM</p>
        </div>

        <div class="p-8 space-y-6">
            @if(session('status'))
            <div class="bg-green-50 text-green-700 p-4 rounded-xl text-sm font-bold border border-green-100">
                {{ session('status') }}
            </div>
            @endif

            @if($errors->any())
            <div class="bg-red-50 text-red-700 p-4 rounded-xl text-sm font-bold border border-red-100">
                @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif

            <form action="{{ route('clinic.login') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">{{ __('clinic.email') }}</label>
                    <input type="email" name="email" required class="input-minimal" placeholder="doctor@example.com" value="{{ old('email') }}">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">{{ __('clinic.password') }}</label>
                    <input type="password" name="password" required class="input-minimal" placeholder="********">
                </div>

                <div class="flex items-center justify-between py-2">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 text-cyan-600 border-gray-300 rounded focus:ring-cyan-500">
                        <span class="text-xs font-bold text-gray-500">{{ app()->getLocale() == 'ar' ? 'تذكرني' : 'Remember me' }}</span>
                    </label>
                    <a href="{{ route('clinic.password.request') }}" class="text-xs font-bold text-cyan-600 hover:underline">
                        {{ __('clinic.forgot_password') }}
                    </a>
                </div>

                <button type="submit" class="w-full btn-primary justify-center py-3 text-lg">
                    {{ __('clinic.login_btn') }}
                </button>
            </form>

            <div class="text-center pt-6 border-t border-gray-50">
                <p class="text-xs font-bold text-gray-400 uppercase mb-4">{{ app()->getLocale() == 'ar' ? 'ليس لديك حساب؟' : "Don't have an account?" }}</p>
                <a href="{{ route('clinic.register') }}" class="text-cyan-600 font-bold hover:underline">
                    {{ __('clinic.register_btn') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
