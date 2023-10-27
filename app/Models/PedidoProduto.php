<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PedidoProduto extends Pivot
{
    protected $table = 'pedido_produtos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'produto_id',
        'pedido_id',
    ];

    protected $primaryKey = 'pedido_produto_id';

    public function produtos()
    {
        return $this->belongsTo(Produto::class);
    }

    public function pedidos()
    {
        return $this->belongsTo(Pedido::class);
    }
    
}
