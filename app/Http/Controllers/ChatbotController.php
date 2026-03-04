<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class ChatbotController extends Controller
{
    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $userMessage = $request->input('message');
        $locale = app()->getLocale();

        // System context about the website
        $systemContext = $this->getSystemContext($locale);

        try {
            $response = $this->callGeminiAPI($systemContext, $userMessage, $locale);
            
            return response()->json([
                'success' => true,
                'message' => $response
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $locale == 'ar' 
                    ? 'عذراً، حدث خطأ. يرجى المحاولة مرة أخرى.'
                    : 'Sorry, an error occurred. Please try again.'
            ], 500);
        }
    }

    private function getSystemContext($locale)
    {
        if ($locale == 'ar') {
            return "أنت مساعد طبي متخصص في رعاية الحمل. اسمك 'مساعد رعاية الحمل'.

معلومات عن النظام:
- هذا نظام 'رعاية الحمل الذكية' (MamaCare)
- يوفر حاسبة مخاطر الحمل، محتوى تعليمي صحي، ومساعد AI
- نظام تقييم المخاطر: 0-1 نقطة = خطورة منخفضة، 2-3 = متوسطة، 4+ = عالية

عوامل الخطورة المقيمة:
- العمر: أقل من 18 أو أكثر من 35
- ضغط الدم: 140/90 أو أعلى
- السكر: 140 mg/dL أو أكثر
- الهيموجلوبين: أقل من 11 g/dL
- مؤشر كتلة الجسم: 30 أو أكثر
- عملية قيصرية سابقة
- نزيف مهبلي
- عدم توافق RH

قواعد مهمة للحالات الطارئة:
- ضغط الدم 160 أو أكثر = طوارئ
- الهيموجلوبين أقل من 9 = أنيميا حادة
- نزيف مع ارتفاع ضغط = طوارئ فورية

محتوى التوعية الصحية المتاح:
- التغذية: الحديد، حمض الفوليك، الكالسيوم، الأطعمة الممنوعة
- علامات الخطر: صداع شديد، نزيف، انخفاض حركة الجنين، تورم الوجه
- التطعيمات: الكزاز، الإنفلونزا
- الصحة النفسية: القلق، اكتئاب ما بعد الولادة

تعليمات:
1. أجب باللغة العربية فقط
2. كن داعماً ومطمئناً
3. قدم معلومات طبية دقيقة وموثوقة
4. في الحالات الخطيرة، انصح بالتوجه للطبيب فوراً
5. لا تشخص حالات - فقط قدم معلومات عامة
6. اذكر دائماً أن هذه المعلومات لا تغني عن استشارة الطبيب
7. اجعل إجاباتك مختصرة ومفيدة (3-5 جمل)";
        }

        return "You are a medical assistant specialized in pregnancy care. Your name is 'MamaCare Assistant'.

System Information:
- This is 'Smart Antenatal Care System' (MamaCare)
- Provides pregnancy risk calculator, health educational content, and AI assistant
- Risk assessment system: 0-1 points = Low risk, 2-3 = Moderate, 4+ = High

Risk factors assessed:
- Age: under 18 or over 35
- Blood Pressure: 140/90 or higher
- Blood Sugar: 140 mg/dL or more
- Hemoglobin: less than 11 g/dL
- BMI: 30 or more
- Previous cesarean section
- Vaginal bleeding
- RH incompatibility

Emergency rules:
- BP 160 or higher = Emergency
- Hemoglobin below 9 = Severe anemia
- Bleeding with high BP = Immediate emergency

Health education content available:
- Nutrition: Iron, folic acid, calcium, foods to avoid
- Danger signs: severe headache, bleeding, decreased fetal movement, face swelling
- Vaccinations: Tetanus, Influenza
- Mental health: Anxiety, postpartum depression

Instructions:
1. Respond in English only
2. Be supportive and reassuring
3. Provide accurate and reliable medical information
4. In serious cases, advise to see a doctor immediately
5. Don't diagnose conditions - only provide general information
6. Always mention that this information doesn't replace doctor consultation
7. Keep answers concise and helpful (3-5 sentences)";
    }

    private function callGeminiAPI($systemContext, $userMessage, $locale)
    {
        $apiKey = env('GEMINI_API');
        
        if (!$apiKey) {
            return $locale == 'ar' 
                ? 'عذراً، خدمة AI غير متاحة حالياً. يرجى المحاولة لاحقاً.'
                : 'Sorry, AI service is currently unavailable. Please try again later.';
        }
// https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key={$apiKey}", [
            'contents' => [
                [
                    'parts' => [
                        ['text' => $systemContext . "\n\nUser Question: " . $userMessage]
                    ]
                ]
            ],
            'generationConfig' => [
                'temperature' => 0.7,
                'topK' => 40,
                'topP' => 0.95,
                'maxOutputTokens' => 500,
            ],
            'safetySettings' => [
                [
                    'category' => 'HARM_CATEGORY_HARASSMENT',
                    'threshold' => 'BLOCK_MEDIUM_AND_ABOVE'
                ],
                [
                    'category' => 'HARM_CATEGORY_HATE_SPEECH',
                    'threshold' => 'BLOCK_MEDIUM_AND_ABOVE'
                ],
                [
                    'category' => 'HARM_CATEGORY_SEXUALLY_EXPLICIT',
                    'threshold' => 'BLOCK_MEDIUM_AND_ABOVE'
                ],
                [
                    'category' => 'HARM_CATEGORY_DANGEROUS_CONTENT',
                    'threshold' => 'BLOCK_MEDIUM_AND_ABOVE'
                ]
            ]
        ]);

        if ($response->successful()) {
            $data = $response->json();
            
            if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
                return $data['candidates'][0]['content']['parts'][0]['text'];
            }
        }

        Log::info($response);

        // Fallback response
        return $locale == 'ar'
            ? 'شكراً لسؤالك. أنصحك بالتواصل مع طبيبك للحصول على إجابة دقيقة حول هذا الموضوع.'
            : 'Thank you for your question. I recommend contacting your doctor for an accurate answer on this topic.';
    }
}
