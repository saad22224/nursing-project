@extends('layouts.admin')

@section('title', app()->getLocale() == 'ar' ? 'المرضى' : 'Patients')

@section('content')
<div class="mb-6 flex justify-between items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100">
    <div class="flex-1">
        <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
            <div class="w-8 h-8 rounded-lg bg-cyan-50 flex items-center justify-center">
                <i class="fas fa-users text-cyan-600"></i>
            </div>
            {{ app()->getLocale() == 'ar' ? 'إدارة المرضى' : 'Manage Patients' }}
        </h2>
        <p class="text-sm text-gray-500 mt-1 mr-10">{{ app()->getLocale() == 'ar' ? 'عرض وسجل جميع المرضى' : 'View and manage patient records' }}</p>
    </div>
    <a href="{{ route('admin.patients.create') }}" class="btn-primary flex items-center gap-2 shadow-sm hover:shadow-md transition-all">
        <i class="fas fa-plus bg-white/20 p-1 rounded"></i>
        {{ app()->getLocale() == 'ar' ? 'إضافة مريض' : 'Add Patient' }}
    </a>
</div>

<div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden text-sm">
    <div class="overflow-x-auto">
        <table class="table-minimal w-full">
            <thead>
                <tr>
                    <th class="px-6 py-4 uppercase tracking-wider text-xs">ID</th>
                    <th class="px-6 py-4 uppercase tracking-wider text-xs">{{ app()->getLocale() == 'ar' ? 'الاسم' : 'Name' }}</th>
                    <th class="px-6 py-4 uppercase tracking-wider text-xs">{{ app()->getLocale() == 'ar' ? 'العمر' : 'Age' }}</th>
                    <th class="px-6 py-4 uppercase tracking-wider text-xs">{{ app()->getLocale() == 'ar' ? 'تاريخ الولادة المتوقع' : 'EDD' }}</th>
                    <th class="px-6 py-4 text-center uppercase tracking-wider text-xs">{{ app()->getLocale() == 'ar' ? 'الإجراءات' : 'Actions' }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @forelse($patients as $patient)
                <tr class="hover:bg-slate-50 transition-colors group">
                    <td class="px-6 py-4 font-mono text-gray-500">
                        <span class="bg-gray-100 px-2 py-1 rounded text-xs">{{ Str::padLeft($patient->id, 4, '0') }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-700 font-bold text-xs">
                                {{ substr($patient->name, 0, 1) }}
                            </div>
                            <span class="font-semibold text-gray-800">{{ $patient->name }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-gray-600">
                        <span class="inline-flex items-center gap-1">
                            <i class="far fa-calendar-alt text-gray-400"></i>
                            {{ $patient->age }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded text-xs font-medium {{ (strtotime($patient->edd) < time()) ? 'bg-red-50 text-red-700' : 'bg-blue-50 text-blue-700' }}">
                            <i class="fas fa-baby text-opacity-50"></i>
                            {{ $patient->edd }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="{{ route('admin.patients.show', $patient) }}" class="w-8 h-8 flex items-center justify-center rounded-lg bg-cyan-50 text-cyan-600 hover:bg-cyan-100 transition-colors" title="{{ app()->getLocale() == 'ar' ? 'عرض' : 'View' }}">
                                <i class="fas fa-eye text-sm"></i>
                            </a>
                            <a href="{{ route('admin.patients.edit', $patient) }}" class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-50 text-indigo-600 hover:bg-indigo-100 transition-colors" title="{{ app()->getLocale() == 'ar' ? 'تعديل' : 'Edit' }}">
                                <i class="fas fa-edit text-sm"></i>
                            </a>
                            <form action="{{ route('admin.patients.destroy', $patient) }}" method="POST" class="inline-block" onsubmit="return confirm('{{ app()->getLocale() == 'ar' ? 'هل أنت متأكد من الحذف؟' : 'Are you sure you want to delete?' }}');">
                                @csrf @method('DELETE')
                                <button type="submit" class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-600 hover:bg-red-100 transition-colors" title="{{ app()->getLocale() == 'ar' ? 'حذف' : 'Delete' }}">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                        <div class="flex flex-col items-center justify-center">
                            <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mb-3">
                                <i class="fas fa-user-slash text-2xl text-gray-300"></i>
                            </div>
                            <p class="text-gray-500 font-medium">{{ app()->getLocale() == 'ar' ? 'لا يوجد مرضى مسجلين.' : 'No patients registered.' }}</p>
                            <a href="{{ route('admin.patients.create') }}" class="mt-4 text-cyan-600 hover:text-cyan-700 font-medium text-sm inline-flex items-center gap-1">
                                <i class="fas fa-plus"></i> {{ app()->getLocale() == 'ar' ? 'إضافة مريض جديد' : 'Add new patient' }}
                            </a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if(method_exists($patients, 'links'))
    <div class="px-6 py-4 border-t border-gray-100 bg-gray-50">
        {{ $patients->links() }}
    </div>
    @endif
</div>
@endsection
