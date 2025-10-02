<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class CadastroNormal extends Authenticatable
{
    use Notifiable;

    protected $table = 'cadastroNormal';

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'nascimento',
        'endereco',
        'senha',
        'perfil',
        'politica_privacidade',
        'lgpd',
    ];

    public function getAuthPassword()
    {
        return $this->senha;
    }
}
