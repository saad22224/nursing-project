<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\VisitController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\ClinicAuthController;
use App\Http\Controllers\ClinicDashboardController;
use App\Http\Controllers\ClinicPatientController;

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


// Clinic Routes
Route::prefix('clinic')->name('clinic.')->group(function () {
    Route::get('login', [ClinicAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [ClinicAuthController::class, 'login']);
    Route::get('register', [ClinicAuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [ClinicAuthController::class, 'register']);
    Route::post('logout', [ClinicAuthController::class, 'logout'])->name('logout');
    
    // Forgot Password
    Route::get('forgot-password', [ClinicAuthController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('forgot-password', [ClinicAuthController::class, 'processForgotPassword'])->name('password.email');
    Route::get('reset-password', [ClinicAuthController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('reset-password', [ClinicAuthController::class, 'resetPassword'])->name('password.update');

    Route::middleware('auth:clinic')->group(function () {
        Route::get('dashboard', [ClinicDashboardController::class, 'index'])->name('dashboard');
        
        Route::prefix('patients')->name('patients.')->group(function () {
            Route::get('/', [ClinicPatientController::class, 'index'])->name('index');
            Route::get('create', [ClinicPatientController::class, 'create'])->name('create');
            Route::post('/', [ClinicPatientController::class, 'store'])->name('store');
            Route::get('{patient}', [ClinicPatientController::class, 'show'])->name('show');
            Route::get('{patient}/visits/create', [ClinicPatientController::class, 'createVisit'])->name('visits.create');
            Route::post('{patient}/visits', [ClinicPatientController::class, 'storeVisit'])->name('visits.store');
            Route::get('{patient}/visits/{visit}', [ClinicPatientController::class, 'showVisit'])->name('visits.show');
        });
    });
});
