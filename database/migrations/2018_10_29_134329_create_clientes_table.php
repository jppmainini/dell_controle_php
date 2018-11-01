<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('cli_id');
            $table->string('cli_razao');
            $table->string('cli_fantasia');
            $table->string('cli_cpfcnpj', 18);
            $table->string('cli_rgie', 15);
            $table->char('cli_tipo', 1)->default('F');
            $table->char('cli_ativo', 1)->default('S');
            $table->string('cli_cep', 9);
            $table->string('cli_endereco');
            $table->string('cli_num');
            $table->string('cli_complemento');
            $table->string('cli_bairro');
            $table->string('cli_cidade');
            $table->char('cli_estado', 2);
            $table->char('cli_pais', 2);
            $table->char('cli_codpais', 5);
            $table->char('cli_codcidade', 8);
            $table->string('cli_email');
            $table->string('cli_site');
            $table->string('cli_site');
            $table->string('cli_fone1', 14);
            $table->string('cli_fone2', 14);
            $table->string('cli_fone3', 14);
            $table->text('cli_observacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
