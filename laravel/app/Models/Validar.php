<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validar extends Model
{
    protected $table = 'documentos';          // nome da tabela no banco
    protected $primaryKey = 'id_documento';   // chave primária da tabela

    protected $fillable = [
        'cpf_arquivo',
        'rg_arquivo',
        'comprovante_endereco',
        'certificado_profissional',
        'status_cpf',
        'status_rg',
        'status_comprovante',
        'status_certificado',
    ];
}
