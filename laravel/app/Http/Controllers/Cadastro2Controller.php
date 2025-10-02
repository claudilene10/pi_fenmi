<?php

namespace App\Http\Controllers;

use App\Models\Cadastro2;
use Illuminate\Http\Request;

class Cadastro2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    Cadastro2::create([
        'area_atuacao' => $request->areaAtuacao,
        'descricao' => $request->descricao,
        'historico_conducao' => $request->historicoConducao,
        'formacao' => $request->formacao,
        'disponibilidade' => $request->disponibilidade,
        'tipos_servico' => $request->tiposServico,
        'endereco' => $request->endereco,
        'whatsapp' => $request->whatsapp,
        'banco' => $request->banco,
        'agencia' => $request->agencia,
        'conta' => $request->conta,
        'tipo_conta' => $request->tipoConta,
        'pix' => $request->pix,
        'politica_privacidade' => $request->politicaPrivacidade ? 1 : 0,

        // consentimentos (sempre 0 ou 1)
        'consentimento_criminal' => $request->consentimento_criminal ?? 0,
        'consentimento_antecedentes' => $request->consentimento_antecedentes ?? 0,
        'consentimento_transito' => $request->consentimento_transito ?? 0,
    ]);

    return redirect()->route('inicio')->with('success', 'Cadastro realizado com sucesso!');



}
    /**
     * Display the specified resource.
     */
    public function show(Modelos $modelos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modelos $modelos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modelos $modelos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modelos $modelos)
    {
        //
    }
}
