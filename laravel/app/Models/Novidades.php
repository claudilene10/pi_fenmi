<?php
#Para acesso ao banco ao laravel usa o Eloquent (ORN) como framework
#classes que acessa a Entidade tabela novidades
#é obrigatorio declarar na $fillable os campos que em algumm momento serão preenchidos
# no php temos 03 tipos de arrays(ventores)
# Indexado -Lista os dados com indices numericos - $var =
# ['primeiro', 'segundo'] - var $var[1]
# Assoativo - usa chaves nomeados - $var = ['chaves'=>'valor','chaves02'=>'valor02'] - $var['chaves02']
# Multidimensional -$var = [['chaves03'=>'valor03'],['valor01']] - var[0]['chaves03'=>'valor03'],['valor01]
   

# Exemplo de cadrasto

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novidades extends Model
{

    #atributo ou propriedade protegida que lita os campos que podem ser preechidos
    protected $fillable = [
        'email',
        'validado',
        'opt_out',
        'motivo_saida'
    ];

   
}
