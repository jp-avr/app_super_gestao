<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
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
        'unidade_id',
    ];

    protected $primaryKey = 'produto_id';

    public function produtoDetalhe(){
        return $this->hasOne(ProdutoDetalhe::class, 'produto_id','produto_id');
    }
}
