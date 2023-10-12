<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produtos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'produto_nome',
        'produto_descricao',
        'produto_peso',
        'produto_preco_venda',
        'produto_estoque_minimo',
        'produto_estoque_maximo',
    ];

    protected $primaryKey = 'produto_id';
}
