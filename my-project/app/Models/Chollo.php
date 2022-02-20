<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chollo extends Model
{
    use HasFactory;

    //lo pongo en minúscula porque es el 1 de 1:N
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function attachCategorias($categorias)
    {
        $this->categorias()->attach($categorias);
    }

    public function detachCategorias($categorias)
    {
        $this->categorias()->detach($categorias);
    }
}
