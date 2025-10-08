<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContaCliente;

class ContaClienteController extends Controller
{
    public function show()
    {

        $usuario = ContaCliente::where('id_normal','=', '2')->first();

       
        return view('fenmi.minhacontacliente', compact('usuario'));
    }

    public function update(Request $request)
    {
        $usuario = auth()->user();

        if (!$usuario) {
            return redirect()->back()->with('error', 'Nenhum usuário logado para atualizar.');
        }

        $usuario->update($request->validate([
            'nome' => 'required|string|max:150',
            'email' => 'required|email|max:150',
            'telefone' => 'nullable|string|max:20',
            'profissao' => 'nullable|string|max:200',
            'foto_perfil' => 'nullable|string|max:255',
            'modo_escuro' => 'nullable|boolean',
        ]));

        return redirect()->back()->with('success', 'Dados atualizados com sucesso!');
    }

}