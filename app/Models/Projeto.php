<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Projeto extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::created(function ($projeto) {

            $projeto->slug = $projeto->createSlug($projeto->titulo);

            $projeto->save();
        });
    }

    public function createSlug($titulo)
    {
        $slug = Str::slug($titulo, "-");

        $count = Projeto::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }


}
