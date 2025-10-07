<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoUser;

class InfoUserController extends Controller
{
    public function show()
    {
        echo auth()->user();
        // Usa o usuário logado, se não existir cria objeto vazio
        $usuario = auth()->user() ?? new InfoUser();
        return view('fenmi.infouser', compact('usuario'));
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
            'endereco' => 'nullable|string|max:200',
            'cpf' => 'nullable|string|max:14',
        ]));

        return redirect()->back()->with('success', 'Dados atualizados com sucesso!');
    }

    public function destroy()
    {
        $usuario = auth()->user();

        if (!$usuario) {
            return redirect()->back()->with('error', 'Nenhum usuário logado para excluir.');
        }

        $usuario->delete();

        return redirect()->route('minhacontacliente')->with('success', 'Conta excluída com sucesso!');
    }
}
