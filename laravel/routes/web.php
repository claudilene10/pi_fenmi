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

Route::get('/novidades',function(){
    return view('novidades'); 
})->name("novidades");

# rota que usa o método Store para cadastrar os dados
Route::post('/novidades',[NovidadesController::class,'index'])->name('novidades');

Route::get('/dev/faker', [NovidadesController::class,'dadosTeste']); 








//////************************************************************************** */

///   FENMI ? ///

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

#cadastro.prestadora_etapa1
Route::get('/cadastro_prestadora_etapa1',function(){ // essa rota vai para cadastro.prestadora_etapa1 http://127.0.0.1:5000/laravel/public/cadastro_prestadora_etapa1
    return view('fenmi.cadastro_prestadora_etapa1');
})->name('cadastro_prestadora_etapa1');

#cadastro.prestadora_etapa2
Route::get('/cadastro_prestadora_etapa2',function(){ // essa rota vai para cadastro.prestadora_etapa2 http://127.0.0.1:5000/laravel/public/cadastro_prestadora_etapa2
    return view('fenmi/cadastro_prestadora_etapa2'); 
})->name('cadastro_prestadora_etapa2');

#pedidos_aceito 
Route::get('/pedidos_aceito',function(){ // essa rota vai para aceito http://127.0.0.1:5000/laravel/public/cadastro_prestadora_etapa2
    return view('fenmi/pedidos_aceito'); 
});

#cadastro_cliente
Route::get('/cadastro_cliente',function(){ // essa rota vai para cadastro_cliente http://127.0.0.1:5000/laravel/public/cadastro_cliente
    return view('fenmi/cadastro_cliente'); 
});

#loja_pedidos
Route::get('/loja_pedidos',function(){ // essa rota vai para loja pedidos área interno só com loja_pedidos http://127.0.0.1:5000/laravel/public/loja_pedidos
    return view('fenmi/loja_pedidos'); 
});

#privasidade
Route::get('/privasidade',function(){ // essa rota vai para loja pedidos área interno só com privasidade http://127.0.0.1:5000/laravel/public/privasidade
    return view('fenmi/privasidade'); 
});

#realizado
Route::get('/realizados',function(){ // essa rota vai para loja pedidos área interno só com privasidade http://127.0.0.1:5000/laravel/public/realizados
    return view('fenmi/realizados'); 
});

#termo_cancelamento
Route::get('/termo_cancelamento',function(){ // essa rota vai para loja pedidos área interno só com privasidade http://127.0.0.1:5000/laravel/public/termo_cancelamento
    return view('fenmi/termo_cancelamento'); 
});

#termo_cancelamento
Route::get('/termo_uso',function(){ // essa rota vai para loja pedidos área interno só com privasidade http://127.0.0.1:5000/laravel/public/termo_uso
    return view('fenmi/termo_uso'); 
});


#validação
Route::get('/validacao',function(){ // essa rota vai para loja pedidos área interno só com validacao http://127.0.0.1:5000/laravel/public/validacao
    return view('fenmi/validacao'); 
});

#nfouser
Route::get('/infouser',function(){ // essa rota vai para loja pedidos área interno só com infouser http://127.0.0.1:5000/laravel/public/infouser
    return view('fenmi/infouser'); 
});

#login
Route::get('/login',function(){ // essa rota vai para loja pedidos área interno só com login http://127.0.0.1:5000/laravel/public/login
    return view('fenmi/login'); 
})->name('login');

#minhacontah 
Route::get('/minhaconta',function(){ // essa rota vai para loja pedidos área interno só com minhacontahttp://127.0.0.1:5000/laravel/public/minhaconta
    return view('fenmi/minhaconta'); 
});

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
});

#termos_uso_mika
Route::get('/termos_uso_mika',function(){ // essa rota vai para loja pedidos área interno só com termos_uso_mika http://127.0.0.1:5000/laravel/public/termos_uso_mika
    return view('fenmi/termos_uso_mika'); 
});

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
});

Route::get('/buscar-servicos', [ServicoController::class, 'buscar'])->name('buscar.servicos');











