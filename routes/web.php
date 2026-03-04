<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\VisitController;
use App\Http\Controllers\Admin\ArticleController;

// Home Route
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Risk Calculator Route
Route::get('/calculator', function () {
    return view('calculator');
})->name('calculator');

// Health Education Route
Route::get('/education', function () {
    $locale = app()->getLocale();
    $articles = \App\Models\Article::where('lang', $locale)->latest()->get();
    return view('education', compact('articles'));
})->name('education');

// High-Risk Pregnancy Route
Route::get('/high-risk', function () {
    return view('high-risk');
})->name('high-risk');

// AI Chatbot Route
Route::get('/chatbot', function () {
    return view('chatbot');
})->name('chatbot');

// Chatbot API Route
Route::post('/api/chat', [ChatbotController::class, 'chat'])->name('api.chat');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('patients', PatientController::class);
    Route::resource('patients.visits', VisitController::class)->shallow();
    Route::resource('articles', ArticleController::class);
    Route::post('articles/generate', [ArticleController::class, 'generate'])->name('articles.generate');
});

// Language Switcher Route
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        session(['locale' => $locale]);
        App::setLocale($locale);
    }
    return redirect()->back();
})->name('lang.switch');
