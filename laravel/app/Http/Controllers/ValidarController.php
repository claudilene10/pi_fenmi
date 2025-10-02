<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validar;

class ValidarController extends Controller
{
    // LISTAR TODOS OS REGISTROS
    public function index()
    {
        $documentos = Validar::all(); // pega todos os registros
        return view('validar_doc_profissional', compact('documentos'));
    }

    // SALVAR NOVO REGISTRO
    public function store(Request $request)
    {
        $documento = new Validar();

        if ($request->hasFile('cpf_arquivo')) {
            $documento->cpf_arquivo = $request->file('cpf_arquivo')->store('documentos', 'public');
        }
        if ($request->hasFile('rg_arquivo')) {
            $documento->rg_arquivo = $request->file('rg_arquivo')->store('documentos', 'public');
        }
        if ($request->hasFile('comprovante_endereco')) {
            $documento->comprovante_endereco = $request->file('comprovante_endereco')->store('documentos', 'public');
        }
        if ($request->hasFile('certificado_profissional')) {
            $documento->certificado_profissional = $request->file('certificado_profissional')->store('documentos', 'public');
        }

        $documento->save();

        return redirect()->route('Validar')->with('success', 'Documento cadastrado com sucesso!');
    }

    // DELETAR UM REGISTRO
    public function destroy(Validar $documento)
    {
        $documento->delete();
        return redirect()->route('Validar')->with('success', 'Documento excluído com sucesso!');
    }
}
