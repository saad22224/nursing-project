<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Http;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'nullable|string',
            'lang' => 'required|in:ar,en',
        ]);

        Article::create($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully.');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'nullable|string',
            'lang' => 'required|in:ar,en',
        ]);

        $article->update($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'topic' => 'required|string|max:255',
            'lang' => 'required|in:ar,en',
        ]);

        $topic = $request->input('topic');
        $lang = $request->input('lang');
        $apiKey = env('GEMINI_API');

        if (!$apiKey) {
            return back()->with('error', 'Gemini API key is not configured.');
        }

        $prompt = $lang == 'ar'
            ? "اكتب مقالة طبية تثقيفية قصيرة ومفيدة للحوامل عن: '{$topic}'. استخدم لغة سهلة ومباشرة، ونسقها باستخدام HTML (استخدم <h3>، <ul>، <p>، <strong>)."
            : "Write a short, engaging, and informative medical article for pregnant women about: '{$topic}'. Use simple and direct language, and format it using HTML (use <h3>, <ul>, <p>, <strong>).";

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key={$apiKey}", [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $prompt]
                        ]
                    ]
                ],
                'generationConfig' => [
                    'temperature' => 0.7,
                    'maxOutputTokens' => 800,
                ],
            ]);

            if ($response->successful()) {
                $data = $response->json();

                if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
                    $content = $data['candidates'][0]['content']['parts'][0]['text'];

                    // Remove markdown wrapper if exists
                    $content = preg_replace('/```html\n?/', '', $content);
                    $content = preg_replace('/```\n?/', '', $content);

                    return back()->withInput([
                        'title' => $lang == 'ar' ? "مقال عن: " . $topic : "Article about: " . $topic,
                        'content' => trim($content),
                        'lang' => $lang
                    ])->with('success', 'Article content generated successfully via AI.');
                }
            }

            return back()->with('error', 'Failed to generate content from AI. Response issue.');
        } catch (\Exception $e) {
            return back()->with('error', 'Exception during AI generation: ' . $e->getMessage());
        }
    }
}
