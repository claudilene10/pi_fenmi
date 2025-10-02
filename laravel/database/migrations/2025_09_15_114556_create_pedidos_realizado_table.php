<?php
# classe de criaçao das entidades do bancos de dados - tabela Novidade
# usa o firework/biblioteca migrate

# para enviar a tabela para o banco executamos os comandos do migration
# php artisan migrate - sobre as alteraçoes e tabelas novas 
# php artisan migrate:fresh - apaga os dados das tabelas e cria as novas 
# php artisan migrate:refresh - apaga os dados e as tabelas e as recria 
# php artisan migrate:rollback --steps=2 - retorna a versao anterior do banco

#importaçao  das classes do migrate 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * cria a tabela banco de dados 
     * 
     * $sql_cria_tabela = "CREATE TABLE IF NOT EXISTS estetica_t99.news ( 
     * id_news INT(255) NOT NULL DEFAULT AUTO_INCREMENT PRIMARY KEY,
     * email VARCHAR(254) NOT NULL UNIQUE,
     * validado INT(1) NOT NULL DEFAULT 0,
     * opt_out ENUM('sim','nao') NOT NULL DEFAULT 'sim',
     *  )
     * 
     */
    public function up(): void
    {
        Schema::create('pedidosRealizados', function (Blueprint $table) {
            $table->id('id_pedido'); # PK do pedido
            $table->string('titulo', 150); # Ex: "Tecnologia • Programadora"
            $table->string('cliente', 150); # Nome do cliente
            $table->enum('tipo_servico', ['presencial', 'online'])->default('presencial'); # Tipo de serviço
            $table->boolean('urgente')->default(false); # Se é urgente
            $table->integer('completos')->default(0); # Para barra de progresso
            $table->integer('total')->default(1);      # Total da barra de progresso
            $table->enum('status', ['contruido'])->default('contruido'); # Status do pedido
            $table->decimal('valor_liberar', 8,2)->nullable(); # Valor do botão Liberar
            $table->dateTime('data_criacao')->nullable(); # Data de criação do pedido
            $table->timestamps(); # created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     * 
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidosRealizados');
    }
};