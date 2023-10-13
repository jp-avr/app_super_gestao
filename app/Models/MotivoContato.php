<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MotivoContato extends Model
{
    protected $table = 'motivo_contatos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'motivo_contato_descricao',  
    ];

    protected $primaryKey = 'motivo_contato_id';

}
