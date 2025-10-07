<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerfilUser;

class PerfilUserController extends Controller
{
    // Mostrar usuário
    public function show($id_usuario)
    {
        $usuario = PerfilUser::findOrFail($id_usuario);
        return view('fenmi.infouser', compact('usuario'));
    }

    // Atualizar
    public function update(Request $request, $id_usuario)
    {
        $usuario = PerfilUser::findOrFail($id_usuario);

        $request->validate([
            'nome' => 'required|string|max:150',
            'email' => 'required|email|max:254|unique:perfilUser,email,' . $id_usuario . ',id_usuario',
            'telefone' => 'nullable|string|max:20',
            'profissao' => 'nullable|string|max:100',
        ]);

        $usuario->update($request->only(['nome','email','telefone','profissao']));

        return redirect()->route('infouser.show', $usuario->id_usuario)
                         ->with('success', 'Perfil atualizado com sucesso!');
    }

    // Excluir
    public function destroy($id_usuario)
    {
        $usuario = PerfilUser::findOrFail($id_usuario);
        $usuario->delete();

        return redirect('/')->with('success', 'Conta excluída com sucesso!');
    }
}
