<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class CadastroNormal extends Authenticatable
{
    protected $table = 'cadastroNormal';
    protected $fillable = ['nome','email','telefone','nascimento','endereco','senha','perfil','politica_privacidade','lgpd'];

    public function getAuthPassword() {
        return $this->senha; // porque sua coluna não se chama "password"
    }
}

// class Login extends Model
// {
//     protected $table = 'login';          // nome da tabela no banco
//     protected $primaryKey = 'id_login';   // chave primária da tabela

//     protected $fillable = [
//         'email',
//         'telefone',
//         'senha',
//         'politica_privacidade',
//         'lgpd',
//     ];
// }

class Login extends Authenticatable
{
    protected $table = 'login';
    protected $primaryKey = 'id_login';

    protected $fillable = [
        'email',
        'telefone',
        'senha',
        'politica_privacidade',
        'lgpd',
    ];

    public function getAuthPassword()
    {
        return $this->senha;
    }
}