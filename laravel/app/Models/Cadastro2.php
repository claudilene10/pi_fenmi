<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cadastro1 extends Model
{
    protected $table = 'preferenciasBancarias';          // nome da tabela no banco
    protected $primaryKey = 'id_preferencia';   // chave primária da tabela

    protected $fillable = [
        'area_atuacao',
        'historico_conducao',
        'formacao',
        'disponibilidade',
        'tipos_servico',
        'endereco',
        'whatsapp',
        'banco',
        'agencia',
        'conta',
        'tipo_conta',
        'politica_privacidade',
        'lgpd',
    ];
}
