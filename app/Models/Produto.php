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

    public function categoria() {
        return $this->belongsTo(Categoria::class);
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

    public function proximo() {
        // return next produto if not last or return first produto
        return Produto::where('id', '>', $this->id)->first() ?? Produto::first();
    }

    public function anterior() {
        // return previous produto if not first or return last produto
        return Produto::where('id', '<', $this->id)->orderBy('id', 'desc')->first() ?? Produto::orderBy('id', 'desc')->first();
    }

    // compativeis
    public function compativeis()
    {
        return $this->hasMany(Compativel::class, 'produto_id');
    }

    public function puxadores()
    {
        return $this->hasMany(Compativel::class, 'produto_id')->where('grupo', 'puxador');
    }

    public function divisores()
    {
        return $this->hasMany(Compativel::class, 'produto_id')->where('grupo', 'divisor');
    }
}
