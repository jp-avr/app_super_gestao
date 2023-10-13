<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_contatos', function (Blueprint $table) {
            $table->id('site_contato_id');
            $table->foreignId('motivo_contato_id')->references('motivo_contato_id')->on('motivo_contatos');
            $table->string('site_contato_nome');
            $table->string('site_contato_email');
            $table->string('site_contato_telefone');
            $table->string('site_contato_mensagem');
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
        Schema::dropIfExists('site_contatos');
    }
}
