<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <title>{{ app()->getLocale() == 'ar' ? 'رمز التحقق' : 'Verification Code' }}</title>
</head>
<body style="font-family: 'Cairo', 'Inter', Arial, sans-serif; text-align: center; padding: 30px; background-color: #f8fafc; color: #334155;">
    <div style="max-w: 500px; margin: 0 auto; background: white; padding: 40px; border-radius: 16px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); border: 1px solid #e2e8f0;">
        <h2 style="color: #0f172a; margin-bottom: 20px;">{{ app()->getLocale() == 'ar' ? 'مرحباً،' : 'Hello,' }}</h2>
        <p style="font-size: 16px; line-height: 1.6; margin-bottom: 24px;">
            {{ app()->getLocale() == 'ar' ? 'لقد طلبت إعادة تعيين كلمة السر الخاصة بحسابك في.' : 'You have requested to reset your password for.' }} <strong>{{ config('app.name', 'Materniq') }}</strong>
        </p>
        <p style="font-size: 16px; margin-bottom: 16px;">
            {{ app()->getLocale() == 'ar' ? 'رمز التحقق الخاص بك هو:' : 'Your verification code is:' }}
        </p>
        <h1 style="color: #0891b2; font-size: 40px; letter-spacing: 8px; margin: 0 0 30px 0; background: #ecfeff; padding: 16px; border-radius: 12px; display: inline-block;">
            {{ $code }}
        </h1>
        <p style="font-size: 14px; color: #64748b; margin-bottom: 30px;">
            {{ app()->getLocale() == 'ar' ? 'يرجى إدخال هذا الرمز في صفحة التحقق لإكمال العملية.' : 'Please enter this code on the verification page to complete the process.' }}
        </p>
        <hr style="border: none; border-top: 1px solid #e2e8f0; margin-bottom: 20px;">
        <p style="font-size: 12px; color: #94a3b8;">
            {{ app()->getLocale() == 'ar' ? 'إذا لم تطلب إعادة تعيين كلمة السر، يرجى تجاهل هذا البريد ولن يتم تغيير أي شيء.' : 'If you did not request a password reset, please ignore this email and nothing will be changed.' }}
        </p>
    </div>
</body>
</html>
