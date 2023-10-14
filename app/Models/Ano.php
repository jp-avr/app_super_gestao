<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model
{
    protected $table = 'anos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ano_nascimento',
        ];

    protected $primaryKey = 'ano_id';
}
