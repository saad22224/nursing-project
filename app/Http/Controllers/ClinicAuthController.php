<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
        $token = Str::random(60);
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            ['token' => Hash::make($token), 'created_at' => now()]
        );
        // Simulate email sending by redirecting straight to reset page with token.
        return redirect()->route('clinic.password.reset', ['token' => $token, 'email' => $request->email])->with('status', 'Check your email for password reset link. (Simulated by automatic redirect)');
    }

    public function showResetPasswordForm(Request $request) {
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
            return back()->withErrors(['email' => 'Invalid token']);
        }

        Clinic::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        return redirect()->route('clinic.login')->with('status', 'Password reset successfully');
    }
}
