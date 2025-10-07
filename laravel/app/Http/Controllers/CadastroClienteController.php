<?php

namespace App\Http\Controllers;

use App\Models\CadastroCliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CadastroClienteController extends Controller
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


        CadastroCliente::create([
            'nome' => $request->nome,
            'apelido' => $request->apelido,
            'Identidade_Genero' => $request->Identidade_Genero,
            'cpf' => $request->cpf,
            'contato_emergencia' => $request->endereco,
            
            'sms' => $request->sms,
        //    'senha' => $request->senha,
            'foto' => $request->foto,
            'politica_privacidade' => true, // pode vir de checkbox no form
            'lgpd' => true, // idem
        ]);

    
  
    }
}