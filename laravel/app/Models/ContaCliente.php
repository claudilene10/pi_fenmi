<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContaCliente extends Model
{
    use HasFactory;

   
    protected $table = 'cadastroNormal';
    protected $primaryKey = 'id_conta';
    public $timestamps = true;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'profissao',
        'foto_perfil',
        'modo_escuro',
    ];
}
