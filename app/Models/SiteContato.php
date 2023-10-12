<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $table = 'site_contatos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'motivo_contato',
        'mensagem',
        'telefone',
        'email',
    ];

    protected $primaryKey = 'site_contato_id';
}
