<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoFiliaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->id('produto_filial_id');
            $table->foreignId('produto_id')->references('produto_id')->on('produtos');
            $table->foreignId('filial_id')->references('filial_id')->on('filiais');
            $table->float('produto_preco_venda', 8, 2)->default(0.01);
            $table->integer('produto_estoque_minimo')->default(1);
            $table->integer('produto_estoque_maximo')->default(1);
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
        Schema::dropIfExists('produto_filiais');
    }
}
