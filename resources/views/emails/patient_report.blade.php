<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: sans-serif; line-height: 1.6; }
    </style>
</head>
<body>
    <p>{{ app()->getLocale() == 'ar' ? 'مرحباً،' : 'Hello,' }}</p>
    <p>{{ app()->getLocale() == 'ar' ? 'مرفق طيه تقرير المريضة: ' : 'Please find attached the report for patient: ' }} <strong>{{ $patient->name }}</strong></p>
    <p>{{ app()->getLocale() == 'ar' ? 'تم الإرسال عبر تطبيق MaterniQ.' : 'Sent via MaterniQ App.' }}</p>
</body>
</html>
