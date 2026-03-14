@extends('layouts.app')

@section('title', __('clinic.register_title'))

@section('content')
<div class="min-h-screen bg-gray-50 flex items-center justify-center p-6 py-24">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden" data-aos="fade-up">
        <div class="p-8 text-center bg-cyan-600 text-white">
            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4 text-2xl">
                <i class="fas fa-user-plus"></i>
            </div>
            <h1 class="text-2xl font-bold">{{ __('clinic.register_title') }}</h1>
            <p class="text-cyan-100 text-sm mt-1 uppercase font-bold tracking-widest">{{ app()->getLocale() == 'ar' ? 'انضم إلينا كعيادة مسجلة' : 'JOIN AS A REGISTERED CLINIC' }}</p>
        </div>

        <div class="p-8 space-y-6">
            @if($errors->any())
            <div class="bg-red-50 text-red-700 p-4 rounded-xl text-sm font-bold border border-red-100">
                @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif

            <form action="{{ route('clinic.register') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">{{ __('clinic.clinic_name') }}</label>
                    <input type="text" name="name" required class="input-minimal" placeholder="{{ app()->getLocale() == 'ar' ? 'اسم العيادة أو الطبيب' : 'Clinic/Doctor Name' }}" value="{{ old('name') }}">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">{{ __('clinic.email') }}</label>
                    <input type="email" name="email" required class="input-minimal" placeholder="doctor@example.com" value="{{ old('email') }}">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">{{ __('clinic.password') }}</label>
                    <input type="password" name="password" required class="input-minimal" placeholder="********">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">{{ __('clinic.confirm_password') }}</label>
                    <input type="password" name="password_confirmation" required class="input-minimal" placeholder="********">
                </div>

                <button type="submit" class="w-full btn-primary justify-center py-3 text-lg mt-4">
                    {{ __('clinic.register_btn') }}
                </button>
            </form>

            <div class="text-center pt-6 border-t border-gray-50">
                <p class="text-xs font-bold text-gray-400 uppercase mb-4">{{ app()->getLocale() == 'ar' ? 'لديك حساب بالفعل؟' : "Already have an account?" }}</p>
                <a href="{{ route('clinic.login') }}" class="text-cyan-600 font-bold hover:underline">
                    {{ __('clinic.login_btn') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
