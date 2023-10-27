<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cliente_id',
    ];

    protected $primaryKey = 'pedido_id';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'cliente_id','cliente_id');
    }

    public function produtos()
    {
        return $this->belongsToMany(Produto::class,'pedido_produtos', 'pedido_id','produto_id');
    }
}
