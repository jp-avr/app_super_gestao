<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdutoDetalhe extends Model
{
    protected $table = 'produto_detalhes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'produto_id',
        'unidade_id',
        'produto_comprimento',
        'produto_largura',
        'produto_altura',
    ];

    protected $primaryKey = 'produto_detalhe_id';

    // public function produtoDetalhe()
    // {
    //     return $this->belongsTo(Produto::class,'produto_id','produto_id');
    // }

}
