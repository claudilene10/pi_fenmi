<?php

namespace App\Http\Controllers;

use App\Models\Cadastro1;
use Illuminate\Http\Request;

class Cadastro1Controller extends Controller
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
    // Validação básica
    $request->validate([
        #'foto_perfil' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        #'foto_frente' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        #'foto_verso' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        #'selfie' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        #'ficha_criminal' => 'required|file|mimes:pdf,jpeg,png,jpg|max:2048',
        'cpf' => 'required|unique:verificacoesIdentidade,cpf',
        'rg' => 'required',
        'genero' => 'required',
        'estado_civil' => 'required',
    ]);

    // Upload de arquivos
    #$fotoPerfil = $request->file('foto_perfil')->store('uploads', 'public');
    #$fotoFrente = $request->file('foto_frente')->store('uploads', 'public');
    #$fotoVerso = $request->file('foto_verso')->store('uploads', 'public');
    #$selfie = $request->file('selfie')->store('uploads', 'public');
    #$fichaCriminal = $request->file('ficha_criminal')->store('uploads', 'public');

    // Criar registro
    Cadastro1::create([
        #'foto_perfil' => $fotoPerfil,
        #'foto_frente' => $fotoFrente,
        #'foto_verso' => $fotoVerso,
        #'selfie' => $selfie,
        #'ficha_criminal' => $fichaCriminal,
        'cpf' => $request->cpf,
        'rg' => $request->rg,
        'consentimento_criminal' => $request->consentimento_criminal ?? 0,
        'consentimento_antecedentes' => $request->consentimento_antecedentes ?? 0,
        'consentimento_transito' => $request->consentimento_transito ?? 0,
        'genero' => $request->genero,
        'estado_civil' => $request->estado_civil,
    ]);

    return redirect()->route('cadastro_prestadora_etapa2');
}


    /**
     * Display the specified resource.
     */
    public function show( )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
