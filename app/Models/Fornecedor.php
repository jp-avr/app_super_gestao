<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fornecedor_nome',
        'fornecedor_uf',
        'fornecedor_email',
        'fornecedor_site',
    ];

    protected $primaryKey = 'fornecedor_id';

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'produto_id', 'produto_id');
    }
}
