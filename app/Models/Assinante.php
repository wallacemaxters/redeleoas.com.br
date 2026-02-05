<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assinante extends Model
{
    protected $table = 'assinantes';

    protected $fillable = [
        'nome',
        'email',
        'whatsapp',
        'instagram',
        'ativo',
    ];
}
