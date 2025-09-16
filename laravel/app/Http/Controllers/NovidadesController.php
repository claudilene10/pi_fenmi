<?php


/*
  
    CRUD   - Operação de manutencão de uma tabela 

    Métodos de CRUD no ORM Eloquent. (ORM - Object Relacio)

    CREATE - INSERT 
        - create() - cadastra os dados
        - save() - salva (opcional)
        - firstOrCreate() - cria apenas se não existe
        - updateOrCreate() - cria ou atualiza se existe
    
        Read - Leitura -SELECT
            - all() - traz todos os registros da tabela
            - find() - busca apenas o id informado
            - findOrFail() - se achar mostra, falha sem erro
            - first()* - trás apenas o primeiro registro encontrado
            - firstOrFail() -
            -  where()* - traz todos os registros filtrados
            - get()- organiza os dados em um objeto 
 
 */
namespace App\Http\Controllers;

use App\Models\Novidades; #conecta ao banco de dados
use App\Models\User;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class NovidadesController extends Controller
{

     # método construtor - 
     public function gerarUsuarios(){

        # criar o nosso cadrasto inicial
        # acesso direto á classe estática Novidades
        Novidades::create([
            'email'=>'claudilene.psantos@senacsp.edu.br',
            'validado'=>'1',
            'opt_out'=>'sim',
            'motivo_saida'=>'Não quero mais.',
            'data_criacao'=>date('Y-m-d h:i:s'),
        ]);

        # chamada do método desta classe
        $this->dadosTeste();  

       
    }
    
    # cadastra dados de teste (fake)
    public function dadosTeste(){
        #instancia a classe Faker()
        $faker = Faker::create();
        # realizar 10 cadastro por vez
        for ($i=0; $i <10; $i++)

       
    Novidades::create([
     'email'=> $faker->unique()->safeEmail(),
     'validado'=>'0',
     'data_criacao'=>date('Y-m-d h:i:s'),
 ]);

    }
    /**
     * Exibir a tabela com os dados na View
     */
    public function index()
    {
        #buscar todos os dados da tab;ela
        $todos = Novidades::all();

        #busca pelo PK se a coluna for id
       // $unico = User::find(1);

        #Busca pelo id ou falha sem erro
       // $unicof = User::findOrFail(1);

        #Busca de acordo com p filtro
        //$filtrado = Novidades::where('email','alessandro.kihn@example.com')->first();

       // $filtrado = Novidades::where('email','like','a%')-> get();

        #dump and die - exibe tudo que há na variavel interrope a execução do sistema aqui. Junta var_dump() e o die() do PHP
        //dd( $filtrado );

        #fazendo dump usando PHP puro
        //var_dump( $filtrado );

        //echo "<pre>";
       // print_r($filtrado);
        //echo"</PRE>";
        
        //die();

      #return permite retornar:texto, redirecionameno
      # return "<h1>texto a ser exibido</h1>"
      # return redirect ('htps://sp.senac.br')
      //return view('painel');
      //return redirect (route('novidades'));

      #redirecionando para rota passando os valores encontrados
      // passa direto pra view
      
      return view('novidades', ['dados' => $todos]);
      
        

      //  return $todos;
    }

    /**
     * cadastra o e-mail no banco.
     */
    public function create( Request $form)
    {
        # validação dos dados
        $dadosValidados =$form -> validate([
            'email'=> 'required|email|max:64|unique:novidades,email',
        ]);

        #insere o dado no banco
        $cadastro = Novidades::create([
            'email'=> $dadosValidados['email'],

        ]);

        
        if($cadastro){
            echo '<script>alert("E-mail cadastrado!");</script>';
        }else {
            echo '<script>alert("E-mail já cadastrado!");</script>';
        }

        return redirect()->route('novidades');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Novidades $novidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Novidades $novidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Novidades $novidades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Novidades $novidades)
    {
        //
    }
}
