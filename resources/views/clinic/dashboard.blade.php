@extends('layouts.clinic')

@section('content')
    <div class="space-y-8">
        <!-- PWA Install Banner -->
        <div id="pwa-install-banner"
            class="hidden bg-gradient-to-r from-cyan-600 to-indigo-600 rounded-2xl p-6 text-white shadow-lg shadow-cyan-500/20 relative overflow-hidden">
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-4 text-center md:text-left">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center text-xl">
                        <i class="fas fa-mobile-screen-button"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg leading-tight">
                            {{ app()->getLocale() == 'ar' ? 'تثبيت تطبيق MaterniQ' : 'Install MaterniQ App' }}</h3>
                        <p class="text-white/80 text-sm font-medium">
                            {{ app()->getLocale() == 'ar' ? 'ثبت التطبيق على هاتفك للوصول السريع والسهل' : 'Install the app on your phone for quick and easy access' }}
                        </p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button onclick="installPWA()"
                        class="bg-white text-cyan-600 px-6 py-2.5 rounded-xl font-bold text-sm hover:bg-cyan-50 transition-colors shadow-sm">
                        {{ app()->getLocale() == 'ar' ? 'تثبيت الآن' : 'Install Now' }}
                    </button>
                    <button onclick="dismissPWABanner()"
                        class="bg-white/10 text-white px-4 py-2.5 rounded-xl font-bold text-sm hover:bg-white/20 transition-colors">
                        {{ app()->getLocale() == 'ar' ? 'لاحقاً' : 'Later' }}
                    </button>
                </div>
            </div>
            <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
        </div>
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 tracking-tight">{{ __('clinic.dashboard') }}</h1>
                <p class="text-slate-500 font-medium mt-1">
                    {{ app()->getLocale() == 'ar' ? 'مرحباً دكتور، إليك ملخص نشاط العيادة اليوم' : 'Welcome Doctor, here is your clinic activity summary' }}
                </p>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('clinic.patients.create') }}" class="btn-primary">
                    <i class="fas fa-plus"></i>
                    {{ __('clinic.add_patient') }}
                </a>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div
                class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-5 group hover:border-cyan-200 transition-colors">
                <div
                    class="w-14 h-14 rounded-2xl bg-cyan-50 text-cyan-600 flex items-center justify-center text-2xl shadow-inner">
                    <i class="fas fa-users"></i>
                </div>
                <div>
                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-1">
                        {{ __('clinic.total_patients') }}</p>
                    <p class="text-3xl font-extrabold text-slate-900 tracking-tight">{{ $patientsCount }}</p>
                </div>
            </div>

            <div
                class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-5 group hover:border-indigo-200 transition-colors">
                <div
                    class="w-14 h-14 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-2xl shadow-inner">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div>
                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-1">
                        {{ __('clinic.today_visits') }}</p>
                    <p class="text-3xl font-extrabold text-slate-900 tracking-tight">{{ $todayVisits }}</p>
                </div>
            </div>
        </div>

        <!-- Recent Patients Table -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                <h2 class="text-xl font-bold text-slate-900 tracking-tight">{{ __('clinic.recent_patients') }}</h2>
                <a href="{{ route('clinic.patients.index') }}" class="text-cyan-600 font-bold text-sm hover:underline">
                    {{ app()->getLocale() == 'ar' ? 'عرض السجل الكامل' : 'View Full Archive' }}
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}">
                    <thead>
                        <tr class="bg-slate-50 text-slate-400 text-[10px] font-bold uppercase tracking-widest">
                            <th class="px-8 py-4">{{ __('clinic.clinic_name') }}</th>
                            <th class="px-8 py-4">{{ __('clinic.phone') }}</th>
                            <th class="px-8 py-4 text-center">{{ __('clinic.ob_history') }}</th>
                            <th class="px-8 py-4"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($recentPatients as $p)
                            <tr class="hover:bg-slate-50/50 transition-colors group">
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-10 h-10 rounded-xl bg-slate-100 group-hover:bg-cyan-600 group-hover:text-white transition-all flex items-center justify-center font-bold text-slate-400">
                                            {{ strtoupper(substr($p->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-900 leading-none mb-1">{{ $p->name }}</p>
                                            <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">
                                                {{ $p->phone ?: (app()->getLocale() == 'ar' ? 'بدون هاتف' : 'No Phone') }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-5 text-sm font-bold text-slate-600 italic">{{ $p->phone ?: '-' }}</td>
                                <td class="px-8 py-5 text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        <span
                                            class="bg-slate-50 text-slate-500 px-2 py-0.5 rounded text-[10px] font-bold border border-slate-200">G{{ $p->gravida }}</span>
                                        <span
                                            class="bg-slate-50 text-slate-500 px-2 py-0.5 rounded text-[10px] font-bold border border-slate-200">P{{ $p->para }}</span>
                                    </div>
                                </td>
                                <td class="px-8 py-5 text-right">
                                    <a href="{{ route('clinic.patients.show', $p) }}"
                                        class="w-10 h-10 inline-flex items-center justify-center rounded-xl bg-white border border-slate-100 shadow-sm text-slate-400 hover:text-cyan-600 hover:border-cyan-600 transition-all">
                                        <i
                                            class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-xs"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-8 py-16 text-center">
                                    <p class="text-slate-300 font-bold uppercase tracking-[0.2em] text-xs">
                                        {{ app()->getLocale() == 'ar' ? 'قاعدة البيانات فارغة حالياً' : 'Database is currently empty' }}
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @section('scripts')
        <script>
            let deferredPrompt;
            const banner = document.getElementById('pwa-install-banner');

            window.addEventListener('beforeinstallprompt', (e) => {
                e.preventDefault();
                deferredPrompt = e;
                if (!localStorage.getItem('pwa-banner-dismissed')) {
                    banner.classList.remove('hidden');
                }
            });

            function installPWA() {
                if (!deferredPrompt) return;
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted the install prompt');
                    }
                    deferredPrompt = null;
                    banner.classList.add('hidden');
                });
            }

            function dismissPWABanner() {
                banner.classList.add('hidden');
                localStorage.setItem('pwa-banner-dismissed', 'true');
            }
        </script>
    @endsection
@endsection
