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
        'site_contato_nome',
        'site_contato_motivo_contato',
        'site_contato_mensagem',
        'site_contato_telefone',
        'site_contato_email',
    ];

    protected $primaryKey = 'site_contato_id';

}
