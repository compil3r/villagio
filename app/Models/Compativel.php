<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compativel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'produto_id',
        'compativel_id',
        'imagem',
        'tipo'
    ];

}
