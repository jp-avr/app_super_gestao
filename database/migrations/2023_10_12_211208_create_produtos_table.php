<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('produto_id');
            $table->foreignId('unidade_id')->references('unidade_id')->on('unidades');
            $table->foreignId('fornecedor_id')->references('fornecedor_id')->on('fornecedores');
            $table->string('produto_nome');
            $table->text('produto_descricao')->nullable();
            $table->integer('produto_peso');
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
        Schema::dropIfExists('produtos');
    }
}
