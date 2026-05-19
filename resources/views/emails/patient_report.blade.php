<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ app()->getLocale() == 'ar' ? 'تقرير المريضة' : 'Patient Report' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Cairo', 'Segoe UI', Tahoma, Arial, sans-serif; background-color: #f1f5f9; color: #334155; line-height: 1.6;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background-color: #f1f5f9; padding: 32px 16px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width: 560px; background: #ffffff; border-radius: 16px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.08);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #0891b2 0%, #0e7490 100%); padding: 28px 32px; text-align: center;">
                            <p style="margin: 0 0 6px 0; font-size: 11px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: #a5f3fc;">
                                {{ app()->getLocale() == 'ar' ? 'تقرير طبي' : 'Medical Report' }}
                            </p>
                            <h1 style="margin: 0; font-size: 22px; font-weight: 800; color: #ffffff;">
                                {{ $clinic->name }}
                            </h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 32px;">
                            <p style="margin: 0 0 20px 0; font-size: 16px; color: #0f172a; font-weight: 600;">
                                {{ app()->getLocale() == 'ar' ? 'تحية طيبة،' : 'Hello,' }}
                            </p>

                            <p style="margin: 0 0 16px 0; font-size: 15px; color: #475569;">
                                @if(app()->getLocale() == 'ar')
                                    يُرفق بهذا البريد الإلكتروني تقرير المريضة:
                                @else
                                    Please find attached the medical report for patient:
                                @endif
                            </p>

                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="margin-bottom: 24px;">
                                <tr>
                                    <td style="background: #ecfeff; border: 1px solid #a5f3fc; border-radius: 12px; padding: 16px 20px; text-align: center;">
                                        <p style="margin: 0; font-size: 18px; font-weight: 800; color: #0e7490;">
                                            {{ $patient->name }}
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin: 0 0 20px 0; font-size: 14px; color: #64748b;">
                                @if(app()->getLocale() == 'ar')
                                    يحتوي الملف المرفق (<strong style="color: #334155;">PDF</strong>) على بيانات المريضة وسجل زياراتها الطبية.
                                @else
                                    The attached <strong style="color: #334155;">PDF</strong> file contains the patient's information and visit history.
                                @endif
                            </p>

                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="margin-bottom: 8px;">
                                <tr>
                                    <td style="background: #f8fafc; border-radius: 10px; padding: 14px 18px; border: 1px solid #e2e8f0;">
                                        <p style="margin: 0 0 4px 0; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; color: #94a3b8;">
                                            {{ app()->getLocale() == 'ar' ? 'المرسل' : 'Sent by' }}
                                        </p>
                                        <p style="margin: 0; font-size: 15px; font-weight: 700; color: #0f172a;">
                                            {{ $clinic->name }}
                                        </p>
                                        @if($clinic->email)
                                        <p style="margin: 6px 0 0 0; font-size: 13px; color: #64748b;">
                                            {{ $clinic->email }}
                                        </p>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 20px 32px; background: #f8fafc; border-top: 1px solid #e2e8f0; text-align: center;">
                            <p style="margin: 0; font-size: 12px; color: #94a3b8;">
                                {{ app()->getLocale() == 'ar'
                                    ? 'تم الإرسال عبر نظام MaterniQ'
                                    : 'Sent via MaterniQ' }}
                            </p>
                            <p style="margin: 8px 0 0 0; font-size: 11px; color: #cbd5e1;">
                                {{ date('Y-m-d H:i') }}
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
