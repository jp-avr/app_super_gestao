<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id('unidade_id');
            $table->string('unidade', 5);
            $table->string('unidade_descricao');
            $table->timestamps();
        });

        //Adiciona o relacionamento
        //Schema::table('produtos',function(Blueprint $table)) {
        //    $table->foreignId('unidade_id')->references('unidade_id')-on('unidades');
        //}

        //Adiciona o relacionamento
        //Schema::table('produto_detalhes',function(Blueprint $table)) {
        //    $table->foreignId('unidade_id')->references('unidade_id')-on('unidades');
        //}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidades');
    }
}
