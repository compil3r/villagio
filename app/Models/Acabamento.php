<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Acabamento extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::created(function ($acabamento) {

            $acabamento->slug = $acabamento->createSlug($acabamento->nome);

            $acabamento->save();
        });
    }


    public function createSlug($titulo)
    {
        $slug = Str::slug($titulo, "-");

        $count = Acabamento::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }

    public function itens() {
        // model ItemAcabamento
        return $this->hasMany(ItemAcabamento::class);
    }

}
