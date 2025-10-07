<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    use HasFactory;

   
    protected $table = 'infomacaoUser';
    protected $primaryKey = 'id_informacao';
    public $timestamps = true;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cep',
        'endereco',
        'cpf',
    ];
}
