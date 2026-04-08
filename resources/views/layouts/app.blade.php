<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', __('nav.brand')) | {{ config('app.name', 'Nursing Care') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            font-family: 'Cairo', 'Inter', sans-serif;
        }

        /* Clean Minimal Theme - Single Color */
        :root {
            --primary: #0891b2;
            --primary-light: #ecfeff;
            --primary-dark: #0e7490;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
            overflow-x: hidden;

        }

        /* Glass Header */
        .glass-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        /* Minimal Card */
        .card-minimal {
            background: white;
            border: 1px solid #f1f5f9;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-minimal:hover {
            border-color: #0891b2;
            box-shadow: 0 10px 40px -10px rgba(8, 145, 178, 0.15);
            transform: translateY(-4px);
        }

        /* Button Styles */
        .btn-primary {
            background: #0891b2;
            color: white;
            padding: 12px 28px;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #0e7490;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px -10px rgba(8, 145, 178, 0.5);
        }

        .btn-outline {
            background: transparent;
            color: #0891b2;
            padding: 12px 28px;
            border-radius: 12px;
            font-weight: 600;
            border: 2px solid #0891b2;
            transition: all 0.3s ease;
        }

        .btn-outline:hover {
            background: #0891b2;
            color: white;
        }

        /* Input Style */
        .input-minimal {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            transition: all 0.3s ease;
            outline: none;
        }

        .input-minimal:focus {
            border-color: #0891b2;
            box-shadow: 0 0 0 4px rgba(8, 145, 178, 0.1);
        }

        /* Language Switcher */
        .lang-switcher {
            display: flex;
            background: #f1f5f9;
            border-radius: 10px;
            padding: 4px;
            gap: 4px;
        }

        .lang-btn {
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.3s ease;
            color: #64748b;
        }

        .lang-btn.active {
            background: white;
            color: #0891b2;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .lang-btn:hover:not(.active) {
            color: #0891b2;
        }

        /* Animations */
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .pulse-soft {
            animation: pulseSoft 2s ease-in-out infinite;
        }

        @keyframes pulseSoft {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        .slide-up {
            animation: slideUp 0.6s ease-out forwards;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #0891b2 0%, #0e7490 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0891b2;
        }

        /* Header Nav Underline Effect */
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #0891b2;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        [dir="rtl"] .nav-link::after {
            right: 0;
            left: auto;
        }

        /* RTL Support */
        [dir="rtl"] .space-x-reverse> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 1;
        }

        /* Page Specific Spacing Overrides (Education & High Risk) */
        #nutrition,
        #danger-signs,
        #vaccination,
        #mental-health,
        section.bg-gray-50,
        section.py-12 {
            padding-top: 6rem !important;
            padding-bottom: 6rem !important;
        }

        #hypertension,
        #diabetes,
        #anemia,
        #placenta,
        #multiple {
            margin-bottom: 5rem !important;
            padding: 2.5rem !important;
        }

        /* Hero spacing for specific pages */
        section[style*="padding-top: 100px"],
        section[style*="padding-top: 110px"] {
            padding-top: 140px !important;
            padding-bottom: 80px !important;
        }

        /* Grid and Element Gaps */
        .grid {
            gap: 2rem !important;
        }

        /* Titles and Headers Margins */
        .mb-10 {
            margin-bottom: 3.5rem !important;
        }

        .card-minimal,
        .bg-white.rounded-2xl {
            margin-bottom: 1rem;
        }

        #danger-signs .grid,
        #nutrition .grid,
        #vaccination .grid,
        #mental-health .grid {
            gap: 2.5rem !important;
        }

        /* High Risk Condition Card Internal Spacing */
        .bg-white.px-8.py-8.grid.grid-cols-1.md:grid-cols-2.gap-6 {
            gap: 3rem !important;
            padding: 3rem !important;
        }
    </style>

    @yield('styles')
</head>

<body class="bg-white min-h-screen text-gray-800">

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 glass-header border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-cyan-600 flex items-center justify-center">
                        <i class="fas fa-heart-pulse text-white text-lg"></i>
                    </div>
                    <span class="text-lg font-bold text-gray-800">
                        {{ __('nav.brand') }}
                    </span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('home') }}"
                        class="nav-link text-sm font-medium {{ request()->routeIs('home') ? 'text-cyan-600' : 'text-gray-600 hover:text-cyan-600' }} transition-colors">
                        {{ __('nav.home') }}
                    </a>
                    <a href="{{ route('calculator') }}"
                        class="nav-link text-sm font-medium {{ request()->routeIs('calculator') ? 'text-cyan-600' : 'text-gray-600 hover:text-cyan-600' }} transition-colors">
                        {{ __('nav.calculator') }}
                    </a>
                    <a href="{{ route('women-health') }}"
                        class="nav-link text-sm font-medium {{ request()->routeIs('education') ? 'text-cyan-600' : 'text-gray-600 hover:text-cyan-600' }} transition-colors">
                        {{ __('nav.education') }}
                    </a>
                    <a href="{{ route('high-risk') }}"
                        class="nav-link text-sm font-medium {{ request()->routeIs('high-risk') ? 'text-cyan-600' : 'text-gray-600 hover:text-cyan-600' }} transition-colors">
                        {{ __('nav.high_risk') }}
                    </a>
                    <!-- <a href="{{ route('women-health') }}"
                        class="nav-link text-sm font-medium {{ request()->routeIs('women-health') ? 'text-cyan-600' : 'text-gray-600 hover:text-cyan-600' }} transition-colors">
                        {{ __('nav.women_health') }}
                    </a> -->
                    <a href="{{ route('chatbot') }}"
                        class="nav-link text-sm font-medium {{ request()->routeIs('chatbot') ? 'text-cyan-600' : 'text-gray-600 hover:text-cyan-600' }} transition-colors">
                        {{ __('nav.chatbot') }}
                    </a>
                </div>

                <!-- Right Side -->
                <div class="flex items-center gap-4">
                    <!-- Clinic Button -->
                    <div class="hidden md:block">
                        @auth('clinic')
                            <a href="{{ route('clinic.dashboard') }}"
                                class="btn-primary text-sm shadow-lg shadow-cyan-500/30">
                                <i class="fas fa-stethoscope ml-1 rtl:mr-1"></i> {{ __('nav.clinic_dashboard') }}
                            </a>
                        @else
                            <a href="{{ route('clinic.register') }}"
                                class="btn-primary text-sm shadow-lg shadow-cyan-500/30">
                                <i class="fas fa-plus ml-1 rtl:mr-1"></i> {{ __('nav.register_clinic') }}
                            </a>
                        @endauth
                    </div>

                    <!-- Language Switcher -->
                    <div class="lang-switcher">
                        <a href="{{ route('lang.switch', 'ar') }}"
                            class="lang-btn {{ app()->getLocale() == 'ar' ? 'active' : '' }}">
                            {{ __('nav.lang_ar') }}
                        </a>
                        <a href="{{ route('lang.switch', 'en') }}"
                            class="lang-btn {{ app()->getLocale() == 'en' ? 'active' : '' }}">
                            {{ __('nav.lang_en') }}
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                        <i class="fas fa-bars text-gray-600"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
            <div class="px-4 py-3 space-y-1">
                <a href="{{ route('home') }}"
                    class="block px-4 py-3 rounded-xl {{ request()->routeIs('home') ? 'bg-cyan-50 text-cyan-600' : 'text-gray-600 hover:bg-gray-50' }} font-medium transition-colors">
                    {{ __('nav.home') }}
                </a>
                <a href="{{ route('calculator') }}"
                    class="block px-4 py-3 rounded-xl {{ request()->routeIs('calculator') ? 'bg-cyan-50 text-cyan-600' : 'text-gray-600 hover:bg-gray-50' }} font-medium transition-colors">
                    {{ __('nav.calculator') }}
                </a>
                <a href="{{ route('women-health') }}"
                    class="block px-4 py-3 rounded-xl {{ request()->routeIs('education') ? 'bg-cyan-50 text-cyan-600' : 'text-gray-600 hover:bg-gray-50' }} font-medium transition-colors">
                    {{ __('nav.education') }}
                </a>
                <a href="{{ route('high-risk') }}"
                    class="block px-4 py-3 rounded-xl {{ request()->routeIs('high-risk') ? 'bg-cyan-50 text-cyan-600' : 'text-gray-600 hover:bg-gray-50' }} font-medium transition-colors">
                    {{ __('nav.high_risk') }}
                </a>
                {{-- <a href="{{ route('women-health') }}"
                    class="block px-4 py-3 rounded-xl {{ request()->routeIs('women-health') ? 'bg-cyan-50 text-cyan-600' : 'text-gray-600 hover:bg-gray-50' }} font-medium transition-colors">
                    {{ __('nav.women_health') }}
                </a> --}}
                <a href="{{ route('chatbot') }}"
                    class="block px-4 py-3 rounded-xl {{ request()->routeIs('chatbot') ? 'bg-cyan-50 text-cyan-600' : 'text-gray-600 hover:bg-gray-50' }} font-medium transition-colors">
                    {{ __('nav.chatbot') }}
                </a>

                @auth('clinic')
                    <a href="{{ route('clinic.dashboard') }}"
                        class="block px-4 py-3 rounded-xl bg-cyan-600 text-white font-medium transition-colors text-center mt-2">
                        <i class="fas fa-stethoscope ml-1 rtl:mr-1"></i> {{ __('nav.clinic_dashboard') }}
                    </a>
                @else
                    <a href="{{ route('clinic.register') }}"
                        class="block px-4 py-3 rounded-xl bg-cyan-600 text-white font-medium transition-colors text-center mt-2">
                        <i class="fas fa-plus ml-1 rtl:mr-1"></i> {{ __('nav.register_clinic') }}
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 pt-24 pb-12 relative overflow-hidden">
        <!-- Decorational blur elements (scoped to footer) -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-cyan-600/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-cyan-600/5 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-20">

                <!-- Brand & Description Section -->
                <div class="lg:col-span-8">
                    <a href="{{ route('home') }}" class="flex items-center gap-4 mb-8 group">
                        <div
                            class="w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-500 to-indigo-600 flex items-center justify-center shadow-xl shadow-cyan-500/20 transform group-hover:rotate-6 transition-all duration-500">
                            <i class="fas fa-heart-pulse text-white text-2xl"></i>
                        </div>
                        <div>
                            <span
                                class="text-3xl font-extrabold text-white tracking-tight">{{ __('nav.brand') }}</span>
                            <div class="h-1 w-12 bg-cyan-500 rounded-full mt-1"></div>
                        </div>
                    </a>
                    <p class="text-gray-400 text-lg leading-relaxed mb-8 max-w-2xl">
                        {{ __('nav.tagline') }}
                    </p>
                </div>

                <!-- Strategic Links Section -->
                <div class="lg:col-span-4 lg:flex lg:flex-col lg:items-center">
                    <div>
                        <h4 class="text-white font-bold mb-8 text-sm uppercase tracking-widest relative inline-block">
                            {{ __('nav.quick_links') }}
                            <span class="absolute -bottom-2 right-0 w-8 h-1 bg-cyan-500 rounded-full"></span>
                        </h4>
                        <ul class="space-y-4">
                            <li><a href="{{ route('home') }}"
                                    class="text-gray-400 hover:text-cyan-400 transition-colors flex items-center gap-3 group">
                                    <i
                                        class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-[10px] text-cyan-600 group-hover:translate-{{ app()->getLocale() == 'ar' ? '-x-1' : 'x-1' }} transition-transform"></i>
                                    {{ __('nav.home') }}
                                </a></li>
                            <li><a href="{{ route('calculator') }}"
                                    class="text-gray-400 hover:text-cyan-400 transition-colors flex items-center gap-3 group">
                                    <i
                                        class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-[10px] text-cyan-600 group-hover:translate-{{ app()->getLocale() == 'ar' ? '-x-1' : 'x-1' }} transition-transform"></i>
                                    {{ __('nav.calculator') }}
                                </a></li>
                            <li><a href="{{ route('women-health') }}"
                                    class="text-gray-400 hover:text-cyan-400 transition-colors flex items-center gap-3 group">
                                    <i
                                        class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-[10px] text-cyan-600 group-hover:translate-{{ app()->getLocale() == 'ar' ? '-x-1' : 'x-1' }} transition-transform"></i>
                                    {{ __('nav.education') }}
                                </a></li>
                            {{-- <li><a href="{{ route('women-health') }}"
                                    class="text-gray-400 hover:text-cyan-400 transition-colors flex items-center gap-3 group">
                                    <i
                                        class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-[10px] text-cyan-600 group-hover:translate-{{ app()->getLocale() == 'ar' ? '-x-1' : 'x-1' }} transition-transform"></i>
                                    {{ __('nav.women_health') }}
                                </a></li> --}}
                            <li><a href="{{ route('chatbot') }}"
                                    class="text-gray-400 hover:text-cyan-400 transition-colors flex items-center gap-3 group">
                                    <i
                                        class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} text-[10px] text-cyan-600 group-hover:translate-{{ app()->getLocale() == 'ar' ? '-x-1' : 'x-1' }} transition-transform"></i>
                                    {{ __('nav.chatbot') }}
                                </a></li>
                        </ul>
                    </div>
                </div>


            </div>

            <!-- Credits & Copyright Bar -->
            <div class="pt-12 border-t border-gray-800">
                <div class="flex flex-col lg:flex-row justify-between items-center gap-8">
                    <div class="space-y-2 text-center lg:text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}">
                        <p class="text-gray-500 text-sm tracking-wide text-cyan-500">
                            {{ __('nav.supervisor') }}
                            <span class="text-white font-bold ml-1 text-cyan-500"
                                style="color:#00b8db;">{{ __('nav.supervisor_name') }}</span>
                        </p>
                     <div class="text-center" style="direction: ltr;">
                        <a href="https://wa.me/201099615358" target="_blank" class="inline-flex items-center text-purple-400 hover:text-purple-300 transition-all duration-300 group">
                            <span class="text-sm">Developed with</span>
                            <i class="fas fa-heart text-red-500 mx-2 animate-pulse"></i>
                            <span class="font-bold text-white hover:text-purple-300 transition-colors"> By Eng Saad Harera</span>
                        </a>
                    </div>
                    </div>

                    <div class="flex flex-col items-center lg:items-end gap-3 text-center">
                        <p class="text-gray-400 text-sm font-medium">
                            &copy; {{ date('Y') }} <span class="text-cyan-500">{{ __('nav.brand') }}</span>.
                            {{ __('nav.rights') }}.
                        </p>
                        <div class="flex gap-6 mt-1">
                            {{-- <a href="#"
                                class="text-gray-500 hover:text-white text-xs transition-colors cursor-not-allowed">{{ app()->getLocale() == 'ar' ? 'سياسة الخصوصية' : 'Privacy Policy' }}</a>
                            <a href="#"
                                class="text-gray-500 hover:text-white text-xs transition-colors cursor-not-allowed">{{ app()->getLocale() == 'ar' ? 'الشروط والأحكام' : 'Terms & Conditions' }}</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 50,
            easing: 'ease-out-cubic'
        });

        // Mobile Menu Toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('.fa-plus');

                // Toggle current
                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-minus');
                } else {
                    content.classList.add('hidden');
                    icon.classList.remove('fa-minus');
                    icon.classList.add('fa-plus');
                }
            });
        });
    </script>

    @yield('scripts')
</body>

</html>
