<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerfilUser extends Model
{
    protected $table = 'perfilUser';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false; // se não tiver created_at e updated_at

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cep',
        'endereco',
        'cpf'
    ];
}
