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
            $table->string('produto_nome');
            $table->text('produto_descricao')->nullable();
            $table->integer('produto_peso');
            $table->float('produto_preco_venda', 8, 2)->default(0.01);
            $table->string('produto_estoque_minimo')->default(1);
            $table->string('produto_estoque_maximo')->default(1);

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
