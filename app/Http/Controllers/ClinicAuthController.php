<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ClinicOtpMail;

class ClinicAuthController extends Controller
{
    public function showLoginForm() { return view('clinic.auth.login'); }
    public function showRegisterForm() { return view('clinic.auth.register'); }
    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clinics',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        $clinic = Clinic::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        Auth::guard('clinic')->login($clinic);
        return redirect()->route('clinic.dashboard');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (Auth::guard('clinic')->attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('clinic.dashboard'));
        }
        
        return back()->withErrors(['email' => __('auth.failed')])->onlyInput('email');
    }
    
    public function logout(Request $request)
    {
        Auth::guard('clinic')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function showForgotPasswordForm() { return view('clinic.auth.forgot-password'); }

    public function processForgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:clinics,email']);
        $code = rand(100000, 999999);
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            ['token' => Hash::make($code), 'created_at' => now()]
        );
        
        try {
            Mail::to($request->email)->send(new ClinicOtpMail($code));
        } catch (\Exception $e) {
            \Log::error('OTP Mail Error: ' . $e->getMessage());
        }
        
        session(['reset_email' => $request->email]);
        
        return redirect()->route('clinic.password.verify')->with('status', __('clinic.otp_sent'));
    }

    public function showVerifyCodeForm() 
    { 
        if (!session('reset_email')) {
            return redirect()->route('clinic.password.request');
        }
        return view('clinic.auth.verify-code', ['email' => session('reset_email')]); 
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:clinics,email',
            'code' => 'required|numeric'
        ]);

        $record = DB::table('password_reset_tokens')->where('email', $request->email)->first();
        if (!$record || !Hash::check($request->code, $record->token)) {
            return back()->withErrors(['code' => __('clinic.invalid_otp')]);
        }

        // Store the original code in session to pass to the reset form (as the "token")
        session(['reset_code' => $request->code]);

        return redirect()->route('clinic.password.reset', ['token' => $request->code, 'email' => $request->email]);
    }

    public function showResetPasswordForm(Request $request) {
        if (!session('reset_code') || session('reset_code') != $request->token) {
            return redirect()->route('clinic.password.request')->withErrors(['email' => __('clinic.invalid_reset_session')]);
        }
        return view('clinic.auth.reset-password', ['token' => $request->token, 'email' => $request->email]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:clinics,email',
            'password' => 'required|min:8|confirmed',
            'token' => 'required'
        ]);

        $record = DB::table('password_reset_tokens')->where('email', $request->email)->first();
        if (!$record || !Hash::check($request->token, $record->token)) {
            return back()->withErrors(['email' => __('clinic.invalid_token')]);
        }

        Clinic::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();
        
        session()->forget(['reset_email', 'reset_code']);

        return redirect()->route('clinic.login')->with('status', __('clinic.password_reset_success'));
    }
}
