<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Produto extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::created(function ($produto) {

            $produto->slug = $produto->createSlug($produto->titulo);

            $produto->save();
        });
    }

    public function createSlug($titulo)
    {
        $slug = Str::slug($titulo, "-");

        $count = Produto::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }

    public function imagens()
    {
        return $this->hasMany(Imagem::class);
    }

    //id to text in categoria
    public function getCategoriaCompletaAttribute()
    {
        $categorias = [
            (object) ['id' => 'solucoes-inteligentes', 'nome' => 'Solucões Inteligentes'],
            (object) ['id' => 'perfis-para-portas', 'nome' => 'Perfis para Portas'],
            (object) ['id' => 'puxadores', 'nome' => 'Puxadores'],
            (object) ['id' => 'divisorias-de-ambientes', 'nome' => 'Divisórias de Ambientes'],
            (object) ['id' => 'acessorios', 'nome' => 'Acessórios'],
            (object) ['id' => 'acabamentos', 'nome' => 'Acabamentos'],
            (object) ['id' => 'sistemas', 'nome' => 'Sistemas'],
            (object) ['id' => 'esquadrias', 'nome' => 'Esquadrias'],

        ];

        foreach ($categorias as $categoria) {
            if ($categoria->id == $this->categoria) {
                return $categoria->nome;
            }
        }
        
    }
}
