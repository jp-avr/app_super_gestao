<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'cliente_nome'
    ];

    protected $primaryKey = 'cliente_id';

    public function pedidos()
    {
        return $this->hasMany(Pedido::class,'pedido_id','pedido_id');
    }
}
