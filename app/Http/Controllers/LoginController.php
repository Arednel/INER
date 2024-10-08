<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public static function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => 'required',
            ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => __('Неверный email или пароль'),
        ])->onlyInput('email');
    }

    public static function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
