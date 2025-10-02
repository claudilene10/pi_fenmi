<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cadastro1 extends Model
{
    protected $table = 'verificacoesIdentidade';          // nome da tabela no banco
    protected $primaryKey = 'id_verificacao';   // chave primária da tabela

    protected $fillable = [
        'foto_perfil',
        'foto_frente',
        'foto_verso',
        'selfie',
        'ficha_criminal',
        'cpf',
        'rg',
        'cnh',
        'consentimento_criminal',
        'consentimento_antecedentes',
        'consentimento_transito',
        'genero',
        'estado_civil',
    ];
}
