<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class CadastroCliente extends Authenticatable
{
    use Notifiable;

    protected $table = 'cadastroCliente';

    protected $fillable = [
        'nome',
        'apelido',
        'Identidade_Gênero',
        'cpf',
        'contato_emergencia',
        'sms',
        'foto',
        'politica_privacidade',
        'lgpd',
    ];

    public function getAuthPassword()
    {
       
    }
}
