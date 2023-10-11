<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $fillable = [
        'nome',
        'motivo_contato',
        'mensagem',
        'celular',
        'email',
    ];
}
