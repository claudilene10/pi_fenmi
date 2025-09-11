<?php

#Classe de criação das Entidades do Bancos de Dados   - Tabela Novidades
# Usa o Framework/bibliotecas Migrate

# PARA ENVIAR A TABELA PARA O BANCOS EXECUATNDO OS CAMNADOS DO  MINGRATION
# PHP ARTISAN MIGRATE - SOBRE AS ALTERAÇÕES E TABELAS NOVAS 
# PHP ARTISAN MIGRATE:FRESH - APAGA OS DADOS DAS TABELAS E CRIA AS NOVAS 
# PHP ARTISAN MIGRATE:REFRESH - APAGA OS DADOS E AS TABELAS E AS RECRIA



# importação das classes do Migrate
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Cria a tabela bancos de dados.
     * CREATE TABLE IF NOT EXISTS estetica_t99.news (
    *id_news INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    *email VARCHAR(254) NOT NULL UNIQUE,
    *validado INT(1) NOT NULL DEFAULT 0,
    *opt_out ENUM('sim','não') NOT NULL DEFAULT 'sim',
    *data_criacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    *    )
     * 
     */
    public function up(): void
    {
        Schema::create('novidades', function (Blueprint $table) {
            $table->id('id');#Cria a PK
            $table->string('email', 254 )->unique();#Cria email unico e obrigatorio
            $table->integer('validado')->default(0);
            $table->enum('opt_out', ['sim', 'não'])->default('sim');
            $table->dateTime('data_criacao')->nullable();
            $table->string('motivo_saida', 150)->nullable();#opcional
            $table->timestamps();
        });
    }

    
    /**
     * 
     */
    public function down(): void 
    {
        Schema::dropIfExists('novidades');
    }
};
