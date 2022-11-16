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
        'grupo',
        'tipo'
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function compativel()
    {
        return $this->belongsTo(Produto::class, 'compativel_id');
    }

  

}
