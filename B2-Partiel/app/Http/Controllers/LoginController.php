<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect((route('home')))->with('success', 'Bravo, vous êtes connecté !');
        }

        return back()->with('error', 'Identifiants incorrects.');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registration(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::create($data);

        Auth::login($user);

        return redirect(route('home'))->with('success', 'Bravo, vous êtes enregistré !');
    }

    public function logout() {
        Auth::logout();
        return redirect(route('home'));
    }
}
