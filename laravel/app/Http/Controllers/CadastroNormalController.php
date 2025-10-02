<?php

namespace App\Http\Controllers;

use App\Models\CadastroNormal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CadastroNormalController extends Controller
{
    public function store(Request $request)
    {
        // validação básica
        // $request->validate([
        //     'nome' => 'required|string|max:150',
        //     'email' => 'required|email|unique:cadastroNormal,email',
        //     'telefone' => 'required|string|max:20',
        //     'nascimento' => 'required|date',
        //     'endereco' => 'required|string|max:255',
        //     'senha' => 'required|string|min:6|confirmed',
        //     'perfil' => 'required|in:oferecer,contratar',
        // ]);


        CadastroNormal::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'nascimento' => $request->nascimento,
            'endereco' => $request->endereco,
            // sempre salva senha criptografada!
            'senha' => Hash::make($request->senha),
        //    'senha' => $request->senha,
            'perfil' => $request->perfil,
            'politica_privacidade' => true, // pode vir de checkbox no form
            'lgpd' => true, // idem
        ]);

    
    // redireciona de acordo com o perfil escolhido
    if ($request->perfil === 'oferecer') {
        return redirect()->route('cadastro_prestadora_etapa1')->with('success', 'Cadastro realizado! Complete seu perfil profissional.');
    } else {
        return redirect()->route('cadastro_cliente')->with('success', 'Cadastro realizado! Complete seu perfil de cliente.');
    
}
    }
}