<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Admin Panel') | MamaCare</title>
    <link rel="icon" type="image/webp" href="{{ asset('assets/materniq.webp') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        * { font-family: 'Cairo', 'Inter', sans-serif; }
        
        :root {
            --primary: #0891b2;
            --primary-light: #ecfeff;
            --primary-dark: #0e7490;
        }

        .sidebar-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            border-radius: 12px;
            color: #64748b;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-bottom: 8px;
        }

        .sidebar-item:hover, .sidebar-item.active {
            background: #ecfeff;
            color: #0891b2;
        }
        
        .sidebar-item i {
            width: 20px;
            text-align: center;
        }

        .glass-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        
        .btn-primary {
            background: #0891b2;
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: #0e7490;
            box-shadow: 0 4px 12px rgba(8, 145, 178, 0.2);
        }

        .btn-outline {
            background: transparent;
            color: #0891b2;
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 600;
            border: 2px solid #0891b2;
            transition: all 0.3s ease;
        }

        .btn-outline:hover {
            background: #0891b2;
            color: white;
        }
        
        .input-minimal {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            transition: all 0.3s ease;
            outline: none;
        }
        
        .input-minimal:focus {
            border-color: #0891b2;
            box-shadow: 0 0 0 3px rgba(8, 145, 178, 0.1);
        }
        
        /* Table Styles */
        .table-minimal {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .table-minimal th {
            background: #f8fafc;
            color: #64748b;
            font-weight: 600;
            text-align: left;
            padding: 12px 16px;
            border-bottom: 1px solid #e2e8f0;
        }
        
        [dir="rtl"] .table-minimal th {
            text-align: right;
        }
        
        .table-minimal td {
            padding: 16px;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
            vertical-align: middle;
        }
        
        .table-minimal tr:last-child td {
            border-bottom: none;
        }
        
        .table-minimal tr:hover td {
            background: #f8fafc;
        }

        .badge {
            padding: 4px 10px;
            border-radius: 9999px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
        }

        .badge-green { background: #dcfce7; color: #166534; }
        .badge-yellow { background: #fef9c3; color: #854d0e; }
        .badge-red { background: #fee2e2; color: #991b1b; }
        .badge-blue { background: #dbeafe; color: #1e40af; }
    </style>
    @yield('styles')
</head>
<body class="bg-slate-50 min-h-screen text-gray-800 flex">
    
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-gray-100 flex-shrink-0 flex flex-col hidden md:flex" style="position: sticky; top: 0; height: 100vh;">
        <div class="h-16 flex items-center justify-center p-4 border-b border-gray-100">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center">
                <img src="{{ asset('assets/materniq.webp') }}" alt="Logo" class="h-14 w-auto">
            </a>
        </div>
        
        <div class="p-4 flex-1 overflow-y-auto">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">{{ app()->getLocale() == 'ar' ? 'القائمة الرئيسية' : 'Main Menu' }}</p>
            
            <a href="{{ route('admin.dashboard') }}" class="sidebar-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="fas fa-chart-pie"></i>
                <span>{{ app()->getLocale() == 'ar' ? 'لوحة التحكم' : 'Dashboard' }}</span>
            </a>
            
            <a href="{{ route('admin.patients.index') }}" class="sidebar-item {{ request()->routeIs('admin.patients.*') || request()->routeIs('admin.visits.*') ? 'active' : '' }}">
                <i class="fas fa-users"></i>
                <span>{{ app()->getLocale() == 'ar' ? 'المرضى' : 'Patients' }}</span>
            </a>

            <a href="{{ route('admin.articles.index') }}" class="sidebar-item {{ request()->routeIs('admin.articles.*') ? 'active' : '' }}">
                <i class="fas fa-book-medical"></i>
                <span>{{ app()->getLocale() == 'ar' ? 'التوعية الصحية' : 'Education Articles' }}</span>
            </a>
            
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mt-6 mb-3">{{ app()->getLocale() == 'ar' ? 'النظام' : 'System' }}</p>
            
            <a href="{{ route('home') }}" class="sidebar-item" target="_blank">
                <i class="fas fa-globe"></i>
                <span>{{ app()->getLocale() == 'ar' ? 'زيارة الموقع' : 'Visit Website' }}</span>
            </a>
        </div>
        
        <div class="p-4 border-t border-gray-100">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center">
                    <i class="fas fa-user text-slate-500"></i>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-gray-800">Admin User</h4>
                    <p class="text-xs text-gray-500">admin@mamacare.com</p>
                </div>
            </div>
            <!-- Settings intentionally omitted for MVP -->
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen overflow-hidden">
        <!-- Topbar -->
        <header class="h-16 glass-header border-b border-gray-100 flex items-center justify-between px-6 z-10">
            <div class="flex items-center gap-4">
                <button class="md:hidden text-gray-500 hover:text-cyan-600 transition-colors">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <h1 class="text-xl font-semibold text-gray-800">@yield('title')</h1>
            </div>
            
            <div class="flex items-center gap-4">
                <div class="flex bg-slate-100 p-1 rounded-lg">
                    <a href="{{ route('lang.switch', 'ar') }}" class="px-3 py-1 rounded-md text-sm font-medium {{ app()->getLocale() == 'ar' ? 'bg-white text-cyan-600 shadow-sm' : 'text-slate-500 hover:text-slate-700' }}">AR</a>
                    <a href="{{ route('lang.switch', 'en') }}" class="px-3 py-1 rounded-md text-sm font-medium {{ app()->getLocale() == 'en' ? 'bg-white text-cyan-600 shadow-sm' : 'text-slate-500 hover:text-slate-700' }}">EN</a>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-6">
            <div class="max-w-7xl mx-auto">
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-green-50 border border-green-100 text-green-700 flex items-center gap-3">
                        <i class="fas fa-check-circle text-green-500"></i>
                        {{ session('success') }}
                    </div>
                @endif
                
                @if($errors->any())
                    <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-100 text-red-700">
                        <div class="flex items-center gap-3 mb-2 font-semibold">
                            <i class="fas fa-exclamation-triangle text-red-500"></i>
                            {{ app()->getLocale() == 'ar' ? 'يرجى تصحيح الأخطاء التالية:' : 'Please fix the following errors:' }}
                        </div>
                        <ul class="list-disc list-inside text-sm pl-8">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>
    
    @yield('scripts')
</body>
</html>
