<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <title>{{ __('clinic.patient_file') }} - {{ $patient->name }}</title>
    <style>
        body {
            font-family: 'Amiri', 'DejaVu Sans', sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
            font-size: 12pt;
            direction: {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }};
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #00acc1;
            padding-bottom: 10px;
        }
        .header h1 {
            color: #00acc1;
            margin: 0;
            font-size: 20pt;
        }
        .section {
            margin-bottom: 20px;
        }
        .section-title {
            background-color: #e0f7fa;
            color: #00838f;
            padding: 8px 10px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: {{ app()->getLocale() == 'ar' ? 'right' : 'left' }};
        }
        th {
            background-color: #f5f5f5;
            font-weight: bold;
            width: 30%;
        }
        .visit-box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .visit-header {
            font-weight: bold;
            border-bottom: 1px solid #eee;
            margin-bottom: 5px;
            padding-bottom: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>{{ __('clinic.patient_file') }}</h1>
        <p>{{ date('Y-m-d') }}</p>
    </div>

    <div class="section">
        <div class="section-title">{{ __('clinic.patient_information') }}</div>
        <table>
            <tr>
                <th>{{ __('clinic.name') }}</th>
                <td>{{ $patient->name }}</td>
            </tr>
            <tr>
                <th>{{ __('clinic.husband_name') }}</th>
                <td>{{ $patient->husband_name ?: '-' }}</td>
            </tr>
            <tr>
                <th>{{ __('clinic.phone') }}</th>
                <td>{{ $patient->phone ?: '-' }}</td>
            </tr>
            <tr>
                <th>{{ __('clinic.age') }}</th>
                <td>{{ $patient->age ?: '-' }}</td>
            </tr>
            <tr>
                <th>{{ __('clinic.blood_group') }}</th>
                <td>{{ $patient->blood_group ?: '-' }}</td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">{{ __('clinic.ob_history') }}</div>
        <table>
            <tr>
                <th>{{ app()->getLocale() == 'ar' ? 'عدد مرات الحمل (G)' : 'Gravida (G)' }}</th>
                <td>{{ $patient->gravida ?: '-' }}</td>
            </tr>
            <tr>
                <th>{{ app()->getLocale() == 'ar' ? 'عدد مرات الولادة (P)' : 'Para (P)' }}</th>
                <td>{{ $patient->para ?: '-' }}</td>
            </tr>
            <tr>
                <th>{{ app()->getLocale() == 'ar' ? 'عدد مرات الإجهاض (A)' : 'Abortion (A)' }}</th>
                <td>{{ $patient->abortion ?: '-' }}</td>
            </tr>
            <tr>
                <th>{{ app()->getLocale() == 'ar' ? 'الأطفال الأحياء (L)' : 'Living (L)' }}</th>
                <td>{{ $patient->living ?: '-' }}</td>
            </tr>
            <tr>
                <th>{{ __('clinic.lmp') }}</th>
                <td>{{ $patient->lmp ? \Carbon\Carbon::parse($patient->lmp)->format('Y-m-d') : '-' }}</td>
            </tr>
            <tr>
                <th>{{ __('clinic.edd') }}</th>
                <td>{{ $patient->edd ? \Carbon\Carbon::parse($patient->edd)->format('Y-m-d') : '-' }}</td>
            </tr>
            <tr>
                <th>{{ __('clinic.previous_cs') }}</th>
                <td>{{ $patient->previous_cs ? __('clinic.yes') : __('clinic.no') }}</td>
            </tr>
        </table>
    </div>

    @if($patient->medical_history)
    <div class="section">
        <div class="section-title">{{ __('clinic.medical_history') }}</div>
        <p>{{ $patient->medical_history }}</p>
    </div>
    @endif

    @if($patient->visits->count() > 0)
    <div class="section">
        <div class="section-title">{{ __('clinic.visits') }}</div>
        @foreach($patient->visits as $visit)
            <div class="visit-box">
                <div class="visit-header">
                    {{ __('clinic.visit_date') }}: {{ \Carbon\Carbon::parse($visit->visit_date)->format('Y-m-d') }}
                </div>
                <table>
                    <tr>
                        <th>{{ __('clinic.complaints') }}</th>
                        <td>{{ $visit->complaints ?: '-' }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('clinic.bp') }}</th>
                        <td>{{ $visit->bp ?: '-' }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('clinic.weight') }}</th>
                        <td>{{ $visit->weight ?: '-' }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('clinic.examination') }}</th>
                        <td>{{ $visit->examination_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('clinic.ultrasound') }}</th>
                        <td>{{ $visit->ultrasound_findings ?: '-' }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('clinic.medications') }}</th>
                        <td>{{ $visit->medications ?: '-' }}</td>
                    </tr>
                </table>
            </div>
        @endforeach
    </div>
    @endif

</body>
</html>
