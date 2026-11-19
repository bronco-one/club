<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // 1. Walidacja
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Próba logowania (drugi parametr to opcjonalne "Zapamiętaj mnie")
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            // Regeneracja sesji chroni przed atakiem Session Fixation
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        // 3. Powrót z błędem, jeśli dane są nieprawidłowe
        return back()->withErrors([
            'email' => 'Podane dane logowania są nieprawidłowe.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

