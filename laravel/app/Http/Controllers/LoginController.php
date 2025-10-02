<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\CadastroNormal;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required|string',
        ]);

        $user = CadastroNormal::where('email', $request->email)
            ->orWhere('telefone', $request->email)
            ->first();

        if ($user && Hash::check($request->senha, $user->senha)) {
            auth()->login($user); // autentica

            if ($user->perfil === 'contratar') {
                return redirect()->route('minhacontacliente'); 
            }
            
            if ($user->perfil === 'oferecer') {
                return redirect()->route('minhacontaprofissional'); 
            }

            // fallback (caso não tenha tipo definido)
            return redirect()->route('inicio'); 
        }

        return back()->withErrors([
            'email' => 'E-mail ou senha inválidos.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();                  // encerra sessão
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login.form'); // volta pro login
    }
}
