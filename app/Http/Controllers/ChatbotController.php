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
            return "أنت 'مساعد رعاية الحمل' (materniq).
المهام: دعم الحمل، حاسبة المخاطر، توعية صحية.
التقييم: (0-1 منخفض، 2-3 متوسط، 4+ عالي).
العوامل: عمر (<18 أو >35)، ضغط (>=140/90)، سكر (>=140)، هيموجلوبين (<11)، BMI (>=30)، قيصرية سابقة، نزيف، RH.
طوارئ فورية: ضغط >=160، هيموجلوبين <9، نزيف مع ضغط مرتفع.
تعليمات:
- أجب بالعربية فقط، بأسلوب داعم ومختصر (3-5 جمل).
- لا تشخص؛ قدم معلومات عامة وحول للطبيب في حالات الخطر.
- أضف دائماً: 'هذه المعلومات لا تغني عن استشارة الطبيب'.";
        }

        return "You are 'materniq Assistant'.
Tasks: Pregnancy support, risk calculator, health education.
Assessment: (0-1 Low, 2-3 Moderate, 4+ High).
Factors: Age (<18 or >35), BP (>=140/90), Sugar (>=140), Hb (<11), BMI (>=30), prev C-section, bleeding, RH.
Emergency: BP >=160, Hb <9, bleeding with high BP.
Instructions:
- Respond in English only, concisely (3-5 sentences).
- Non-diagnostic; provide general info and refer to a doctor for risks.
- Always add: 'This info doesn't replace a doctor's consultation'.";
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
                'maxOutputTokens' => 1024,
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
