<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', __('nav.clinic_dashboard')) | {{ config('app.name', 'Nursing Care') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Cairo', sans-serif; }
        
        .sidebar {
            width: 280px;
            background: white;
            border-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}: 1px solid #e2e8f0;
            position: fixed;
            top: 0;
            bottom: 0;
            z-index: 1000;
        }

        .main-content {
            margin-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}: 280px;
            min-height: 100vh;
            background: #f8fafc;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.875rem 1.25rem;
            color: #64748b;
            font-weight: 600;
            border-radius: 0.75rem;
            margin: 0.25rem 1rem;
            transition: all 0.2s;
        }

        .nav-link:hover {
            background: #f1f5f9;
            color: #0891b2;
        }

        .nav-link.active {
            background: #ecfeff;
            color: #0891b2;
        }

        .nav-link i {
            width: 1.5rem;
            text-align: center;
            margin-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}: 0.75rem;
        }

        .btn-primary {
            background: #0891b2;
            color: white;
            padding: 0.625rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s;
        }

        .btn-primary:hover {
            background: #0e7490;
            transform: translateY(-1px);
        }

        .input-field {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.75rem;
            outline: none;
            transition: all 0.2s;
            background: white;
        }

        .input-field:focus {
            border-color: #0891b2;
            box-shadow: 0 0 0 4px rgba(8, 145, 178, 0.1);
        }

        .card-custom {
            background: white;
            border-radius: 1rem;
            border: 1px solid #f1f5f9;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        @media (max-width: 1024px) {
            .sidebar { transform: translateX({{ app()->getLocale() == 'ar' ? '100%' : '-100%' }}); transition: transform 0.3s; }
            .sidebar.active { transform: translateX(0); }
            .main-content { margin: 0 !important; }
        }
    </style>
</head>
<body class="bg-gray-50 antialiased overflow-x-hidden">

    <!-- Mobile Header -->
    <header class="lg:hidden bg-white border-b h-16 flex items-center justify-between px-4 sticky top-0 z-50">
        <button id="toggle-sidebar" class="text-slate-600 p-2 rounded-lg hover:bg-slate-50">
            <i class="fas fa-bars text-xl"></i>
        </button>
        <span class="font-bold text-cyan-700 uppercase tracking-tight">{{ __('nav.brand') }}</span>
        <div class="w-8 h-8 rounded-full bg-cyan-600 text-white flex items-center justify-center font-bold">
            {{ strtoupper(substr(Auth::guard('clinic')->user()->name, 0, 1)) }}
        </div>
    </header>

    <!-- Sidebar Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black/50 z-[999] hidden lg:hidden"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="sidebar">
        <div class="h-16 flex items-center px-6 border-b">
            <a href="{{ route('clinic.dashboard') }}" class="flex items-center gap-3">
                <div class="w-10 h-10 bg-cyan-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-cyan-500/20">
                    <i class="fas fa-hand-holding-medical"></i>
                </div>
                <div>
                    <span class="text-xl font-bold tracking-tight text-slate-800 block uppercase">{{ __('nav.brand') }}</span>
                    <span class="text-[10px] text-cyan-500 font-bold uppercase tracking-widest">{{ app()->getLocale() == 'ar' ? 'نظام العيادة' : 'CLINIC SYSTEM' }}</span>
                </div>
            </a>
        </div>

        <div class="flex flex-col h-[calc(100vh-64px)] justify-between overflow-y-auto">
            <nav class="py-6">
                <p class="px-8 text-[11px] font-bold text-slate-400 uppercase tracking-[0.2em] mb-4">{{ __('Menu') }}</p>
                
                <a href="{{ route('clinic.dashboard') }}" class="nav-link {{ request()->routeIs('clinic.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-columns"></i>
                    <span>{{ app()->getLocale() == 'ar' ? 'لوحة التحكم' : 'Dashboard' }}</span>
                </a>

                <a href="{{ route('clinic.patients.index') }}" class="nav-link {{ request()->routeIs('clinic.patients.*') ? 'active' : '' }}">
                    <i class="fas fa-hospital-user"></i>
                    <span>{{ __('clinic.patients') }}</span>
                </a>

                <div class="mt-8 pt-8 border-t border-slate-100">
                    <p class="px-8 text-[11px] font-bold text-slate-400 uppercase tracking-[0.2em] mb-4">{{ __('Actions') }}</p>
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="fas fa-globe"></i>
                        <span>{{ __('nav.home') }}</span>
                    </a>
                </div>
            </nav>

            <div class="p-6">
                <div class="bg-slate-50 border border-slate-100 rounded-2xl p-4 mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-cyan-600 text-white flex items-center justify-center font-bold shadow-lg shadow-cyan-500/20">
                            {{ strtoupper(substr(Auth::guard('clinic')->user()->name, 0, 1)) }}
                        </div>
                        <div class="overflow-hidden">
                            <p class="text-sm font-bold text-slate-900 truncate">{{ Auth::guard('clinic')->user()->name }}</p>
                            <p class="text-[10px] text-slate-500 uppercase font-bold">{{ app()->getLocale() == 'ar' ? 'طبيب مسجل' : 'Logged in' }}</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-2 mb-4">
                    <a href="{{ route('lang.switch', 'ar') }}" class="py-2 text-center text-xs rounded-xl {{ app()->getLocale() == 'ar' ? 'bg-white shadow-sm border border-slate-100 text-cyan-600 font-bold' : 'text-slate-400 hover:text-slate-600' }}">العربية</a>
                    <a href="{{ route('lang.switch', 'en') }}" class="py-2 text-center text-xs rounded-xl {{ app()->getLocale() == 'en' ? 'bg-white shadow-sm border border-slate-100 text-cyan-600 font-bold' : 'text-slate-400 hover:text-slate-600' }}">English</a>
                </div>

                <form action="{{ route('clinic.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-2 py-3 rounded-xl bg-red-50 text-red-600 font-bold text-sm hover:bg-red-100 transition-colors">
                        <i class="fas fa-sign-out-alt"></i>
                        {{ app()->getLocale() == 'ar' ? 'تسجيل الخروج' : 'Logout' }}
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <div class="p-4 lg:p-10">
            @if(session('success'))
            <div class="mb-6 bg-emerald-50 border border-emerald-100 text-emerald-700 px-6 py-4 rounded-2xl flex items-center gap-3 shadow-sm animate-fade-in">
                <i class="fas fa-check-circle text-lg"></i>
                <span class="font-bold">{{ session('success') }}</span>
            </div>
            @endif

            @yield('content')
        </div>
    </main>

    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const toggleBtn = document.getElementById('toggle-sidebar');

        function toggleMenu() {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        }

        if(toggleBtn) toggleBtn.addEventListener('click', toggleMenu);
        if(overlay) overlay.addEventListener('click', toggleMenu);
    </script>
    @yield('scripts')
</body>
</html>
