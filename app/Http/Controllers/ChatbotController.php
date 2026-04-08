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
            return "أنت 'مساعد صحة المرأة - نسا' (NisaAI)، مساعد طبي متخصص في صحة المرأة على مدى العمر.

المراحل التي تغطيها:
1. الحمل: تغذية (حمض الفوليك 400-800mcg، حديد 27mg، كالسيوم 1000mg)، تمارين (150 دقيقة/أسبوع)، فحوصات، علامات الخطر (نزيف، صداع، تورم)
2. تخطيط الأسرة: وسائل منع الحمل (COCs، POP، IUD، implant، barrier methods)، الوعي بالخصوبة، العناية ما قبل الحمل (حمض الفوليك قبل 3 أشهر)
3. سن اليأس: متوسط العمر 51 سنة، أعراض (هبات ساخنة، جفاف مهبلي)، العلاج الهرموني (MHT) مع موانعه، صحة العظام (كالسيوم 1200mg)
4. ما بعد الولادة: الرضاعة الحصرية 6 أشهر، اكتئاب ما بعد الولادة (10-20% من الأمهات)، منع الحمل بعد الولادة

المراجع الطبية العالمية المعتمدة:
- WHO: World Health Organization Guidelines (2022-2023)
- ACOG: American College of Obstetricians and Gynecologists Practice Bulletins
- FIGO: International Federation of Gynecology and Obstetrics
- NAMS: North American Menopause Society
- AAP: American Academy of Pediatrics

تعليمات:
- قدم معلومات مبنية على الأدلة العلمية مع ذكر المرجع عند الإمكان.
- لا تشخص؛ قدم معلومات عامة وحول للطبيب في حالات الخطر.
- أضف دائماً: 'هذه المعلومات لا تغني عن استشارة الطبيب.'";
        }

        return "You are 'NisaAI - Women's Health Assistant', a specialized medical assistant covering women's health across the lifespan.

Stages covered:
1. PREGNANCY: Nutrition (folic acid 400-800mcg, iron 27mg, calcium 1000mg), exercise (150 min/week), screening schedule, warning signs (bleeding, headache, swelling)
2. FAMILY PLANNING: Contraception methods (COCs, POP, IUD, implant, barrier), fertility awareness, preconception care (folic acid 3 months before)
3. MENOPAUSE: Average age 51, symptoms (hot flashes, vaginal dryness), hormone therapy (MHT) with contraindications, bone health (calcium 1200mg)
4. POSTPARTUM: Exclusive breastfeeding 6 months, postpartum depression (10-20% of mothers), postpartum contraception, newborn care

Authoritative Medical References:
- WHO: World Health Organization Guidelines (2022-2023)
- ACOG: American College of Obstetricians and Gynecologists Practice Bulletins
- FIGO: International Federation of Gynecology and Obstetrics
- NAMS: North American Menopause Society
- AAP: American Academy of Pediatrics

Instructions:
- Respond in English only, .
- Provide evidence-based information with reference citations when possible.
- Non-diagnostic; provide general info and refer to a doctor for risks.
- Always add: 'This information doesn't replace a doctor's consultation.'";
    }

    private function callGeminiAPI($systemContext, $userMessage, $locale)
    {
        $apiKey = env('GEMINI_API');

        if (!$apiKey) {
            return $locale == 'ar'
                ? 'عذراً، خدمة AI غير متاحة حالياً. يرجى المحاولة لاحقاً.'
                : 'Sorry, AI service is currently unavailable. Please try again later.';
        }
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-lite:generateContent?key={$apiKey}", [
            'system_instruction' => [
                'parts' => [
                    ['text' => $systemContext]
                ]
            ],
            'contents' => [
                [
                    'parts' => [
                        ['text' => $userMessage]
                    ]
                ]
            ],
            'generationConfig' => [
                'temperature' => 0.5,
                'topK' => 40,
                'topP' => 0.95,
                'maxOutputTokens' => 2000,
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
