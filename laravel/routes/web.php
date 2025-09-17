<?php
# importaçoes de classes do laravel
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NovidadesController;

 
# define uma rota - url - caminho
Route::get('/', function () {
    //return redirect('/painel'); //redirect('/caminho')
    return view('home');
});
Route::get('/sobre', function () {
   // return redirect('/sobre'); //redirect('/caminho')
   return view('sobre');
    
}); 

Route::get('/painel', function() {
    return view('painel');
});

#------------------
# Rotas: CRUD Novidades
#------------------
# rota que usa o método Store para cadastrar os dados

# exibe os dados no painel - cRud - SELECT
Route::get('/novidades',[NovidadesController::class,'index'])->name('novidades');

# cadastra o dado no banco -Crud -INSERT
Route::post('/novidades',[NovidadesController::class,'create']);

# cadastra o dado no banco -crUd -UPDATE
Route::put('/novidades',[NovidadesController::class,'update']);

Route::get('/novodades',[NovidadesController::class,'edit'])->name('novidades.editar');

# cadastra o dado no banco -cruD - DELETE
Route::delete('/novidades',[NovidadesController::class,'destroy'])->name('novidades.apagar');



Route::get('/dev/faker', [NovidadesController::class,'dadosTeste']); 

Route::get('/buscar-servicos', [ServicoController::class, 'buscar'])->name('buscar.servicos');

#------------------
# Rotas: CRUD Modelos
#------------------
# rota que usa o método Store para cadastrar os dados

# exibe os dados no painel - cRud - SELECT
Route::get('/modelos',[NovidadesController::class,'index'])->name('modelos');




//////************************************************************************** */

///   FENMI home publico? ///

Route::get('/fenmi',function(){ // essa rota vai para home http://127.0.0.1:5000/laravel/public/fenmi
    return view('fenmi/fenmi'); 
});

#home
Route::get('/', function(){
    return view('fenmi/fenmi');  // essa rota vai para home http://127.0.0.1:5000/laravel/public/fenmi
})->name('inicio');

#ecossistema
Route::get('/ecossistema', function(){   // essa rota vai para ecossistema http://127.0.0.1:5000/laravel/public/ecossistema
    return view('fenmi/ecossistema');
})->name('ecossistema');

#instituicao
Route::get('/instituicao', function(){   // essa rota vai para instituicao http://127.0.0.1:5000/laravel/public/ecossistema
    return view('fenmi/instituicao');
})->name('instituicao');

#emprego
Route::get('/emprego',function(){ // essa rota vai para emprego http://127.0.0.1:5000/laravel/public/emprego
    return view('fenmi/emprego'); 
})->name('emprego');

#catalogo
Route::get('/catalogo',function(){ // essa rota vai para loja pedidos área interno só com catalogo http://127.0.0.1:5000/laravel/public/catalogo
    return view('fenmi/catalogo'); 
})->name('catalogo');

#quemsomos
Route::get('/quemsomos',function(){ // essa rota vai para loja pedidos área interno só com catalogo http://127.0.0.1:5000/laravel/public/quemsomos
    return view('fenmi/quemsomos'); 
})->name('quemsomos');

#solicitação
Route::get('/solicitacao',function(){ // essa rota vai para loja pedidos área interno só com catalogo http://127.0.0.1:5000/laravel/public/solicitacao
    return view('fenmi/solicitacao'); 
})->name('solicitacao');

#planejar reforma
Route::get('/planejar_reforma',function(){ // essa rota vai para loja pedidos área interno só com catalogo http://127.0.0.1:5000/laravel/public/planejar_reforma
    return view('fenmi/planejar_reforma'); 
})->name('planejar_reforma');



///   FENMI Login e Cadastro? ///
#cadastro inicial

Route::get('/cadastro_inicial',function(){ // essa rota vai para loja pedidos área interno só com catalogo http://127.0.0.1:5000/laravel/public/cadastro_inicial
    return view('fenmi/cadastro_inicial'); 
})->name('cadastro_inicial');

#esqueceu a senha
Route::get('/esqueceu_senha',function(){ // essa rota vai para loja pedidos área interno só com catalogo http://127.0.0.1:5000/laravel/public/esqueceu_senha
    return view('fenmi/esqueceu_senha'); 
})->name('esqueceu_senha');

#cadastro.prestadora_etapa1
Route::get('/cadastro_prestadora_etapa1',function(){ // essa rota vai para cadastro.prestadora_etapa1 http://127.0.0.1:5000/laravel/public/cadastro_prestadora_etapa1
    return view('fenmi.cadastro_prestadora_etapa1');
})->name('cadastro_prestadora_etapa1');

#cadastro.prestadora_etapa2
Route::get('/cadastro_prestadora_etapa2',function(){ // essa rota vai para cadastro.prestadora_etapa2 http://127.0.0.1:5000/laravel/public/cadastro_prestadora_etapa2
    return view('fenmi/cadastro_prestadora_etapa2'); 
})->name('cadastro_prestadora_etapa2');

#cadastro_cliente
Route::get('/cadastro_cliente',function(){ // essa rota vai para cadastro_cliente http://127.0.0.1:5000/laravel/public/cadastro_cliente
    return view('fenmi/cadastro_cliente'); 
});

#login
Route::get('/login',function(){ // essa rota vai para loja pedidos área interno só com login http://127.0.0.1:5000/laravel/public/login
    return view('fenmi/login'); 
})->name('login');



#------------------------
#perfil cliente
#-------------------------

#minhaconta cliente
Route::get('/minhacontacliente',function(){ // essa rota vai para loja pedidos área interno só com minhacontahttp://127.0.0.1:5000/laravel/public/minhacontacliente
    return view('fenmi/minhacontacliente'); 
})->name('minhacontacliente');

#meajuda
Route::get('/meajuda',function(){ // essa rota vai para loja pedidos área interno só com minhaconta http://127.0.0.1:5000/laravel/public/meajuda
    return view('fenmi/meajuda'); 
})->name('meajude');

#realizados
Route::get('/realizados',function(){ // essa rota vai para loja pedidos área interno só com minhaconta http://127.0.0.1:5000/laravel/public/realizados
    return view('fenmi.realizados'); 
})->name('realizados');

#perfil user
Route::get('/perfiluser',function(){ // essa rota vai para loja pedidos área interno só com perfiluser http://127.0.0.1:5000/laravel/public/perfiluser
    return view('fenmi/perfiluser'); 
});

#minhaconta cliente
Route::get('/minhacontacliente',function(){ // essa rota vai para loja pedidos área interno só com minhacontahttp://127.0.0.1:5000/laravel/public/minhacontacliente
    return view('fenmi/minhacontacliente'); 
})->name('minhacontacliente');

#meajuda
Route::get('/realizados',function(){ // essa rota vai para loja pedidos área interno só com minhaconta http://127.0.0.1:5000/laravel/public/realizados
    return view('fenmi.realizados'); 
})->name('realizados');

#perfil user
Route::get('/perfiluser',function(){ // essa rota vai para loja pedidos área interno só com perfiluser http://127.0.0.1:5000/laravel/public/perfiluser
    return view('fenmi/perfiluser'); 
});
#perfil user
Route::get('/profissional',function(){ // essa rota vai para loja pedidos área interno só com profissional http://127.0.0.1:5000/laravel/public/profissional
    return view('fenmi/profissional'); 
})->name('profissional');

#Profissional privassidade
Route::get('/profissionalpri',function(){ // essa rota vai para loja pedidos área interno só com profissionalpri http://127.0.0.1:5000/laravel/public/profissionalpri
    return view('fenmi/profissionalpri'); 
});

#termos_profissional
Route::get('/termos_profissional',function(){ // essa rota vai para loja pedidos área interno só com termo_profissional http://127.0.0.1:5000/laravel/public/termos_profissional
    return view('fenmi/termos_profissional'); 
});

#termo de cancelamento mika
Route::get('/termos_cancelamento_mika',function(){ // essa rota vai para loja pedidos área interno só com termos_cancelamento_mika http://127.0.0.1:5000/laravel/public/termos_cancelamento_mika
    return view('fenmi/termos_cancelamento_mika'); 
})->name('termos_cancelamento_mika');

#termos_uso_mika
Route::get('/termos_uso_mika',function(){ // essa rota vai para loja pedidos área interno só com termos_uso_mika http://127.0.0.1:5000/laravel/public/termos_uso_mika
    return view('fenmi/termos_uso_mika'); 
})->name('termos_uso_mika');
#loja_pedidos
Route::get('/loja_pedidos',function(){ // essa rota vai para loja pedidos área interno só com loja_pedidos http://127.0.0.1:5000/laravel/public/loja_pedidos
    return view('fenmi/loja_pedidos'); 
})->name('loja_pedidos');

#privasidade
Route::get('/privasidade',function(){ // essa rota vai para loja pedidos área interno só com privasidade http://127.0.0.1:5000/laravel/public/privasidade
    return view('fenmi/privasidade'); 
})->name('privasidade');

#realizado
Route::get('/realizados',function(){ // essa rota vai para loja pedidos área interno só com privasidade http://127.0.0.1:5000/laravel/public/realizados
    return view('fenmi/realizados'); 
});

#termo_cancelamento
Route::get('/termo_cancelamento',function(){ // essa rota vai para loja pedidos área interno só com privasidade http://127.0.0.1:5000/laravel/public/termo_cancelamento
    return view('fenmi/termo_cancelamento'); 
})->name('termo_cancelamento');

#termo_cancelamento
Route::get('/termo_uso',function(){ // essa rota vai para loja pedidos área interno só com privasidade http://127.0.0.1:5000/laravel/public/termo_uso
    return view('fenmi/termo_uso'); 
})->name('termo_uso');


#validação
Route::get('/validacao',function(){ // essa rota vai para loja pedidos área interno só com validacao http://127.0.0.1:5000/laravel/public/validacao
    return view('fenmi/validacao'); 
});

#nfouser
Route::get('/infouser',function(){ // essa rota vai para loja pedidos área interno só com infouser http://127.0.0.1:5000/laravel/public/infouser
    return view('fenmi/infouser'); 
});
#pedidos_aceito 
Route::get('/pedidos_aceito',function(){ // essa rota vai para aceito http://127.0.0.1:5000/laravel/public/pedidos_aceito
    return view('fenmi/pedidos_aceito'); 
})->name('pedidos_aceito');




#------------------------
#perfil prestadora
#-------------------------

# HistoricoDeAtendimentos
Route::get('/HistoricoDeAtendimentos',function(){ // essa rota vai para loja pedidos área interno só com catalogo http://127.0.0.1:5000/laravel/public/HistoricoDeAtendimentos
    return view('fenmi/HistoricoDeAtendimentos'); 
})->name('HistoricoDeAtendimentos');

# informacao_Profissinal
Route::get('/informacao_Profissinal',function(){ // essa rota vai para loja pedidos área interno só com catalogo http://127.0.0.1:5000/laravel/public/informacao_Profissinal
    return view('fenmi/informacao_Profissinal'); 
})->name('informacao_Profissinal');

# meajudeprofissional
Route::get('/meajudeprofissional',function(){ // essa rota vai para loja pedidos área interno só com catalogo http://127.0.0.1:5000/laravel/public/meajudeprofissional
    return view('fenmi/meajudeprofissional'); 
})->name('meajudeprofissional');

# informacao_Profissinal
Route::get('/minhacontaprofissional',function(){ // essa rota vai para loja pedidos área interno só com catalogo http://127.0.0.1:5000/laravel/public/minhacontaprofissional
    return view('fenmi/minhacontaprofissional'); 
})->name('minhacontaprofissional');

# informacao_Profissinal
Route::get('/perfil_profissional',function(){ // essa rota vai para loja pedidos área interno só com catalogo http://127.0.0.1:5000/laravel/public/perfil_profissional
    return view('fenmi/perfil_profissional'); 
})->name('perfil_profissional');

# informacao_Profissinal
Route::get('/termos_de_usoprofissional',function(){ // essa rota vai para loja pedidos área interno só com catalogo http://127.0.0.1:5000/laravel/public/termos_de_usoprofissional
    return view('fenmi/termos_de_usoprofissional'); 
})->name('termos_de_usoprofissional');

# informacao_Profissinal
Route::get('/validar_doc_profissional',function(){ // essa rota vai para loja pedidos área interno só com catalogo http://127.0.0.1:5000/laravel/public/validar_doc_profissional
    return view('fenmi/validar_doc_profissional'); 
})->name('validar_doc_profissional');



