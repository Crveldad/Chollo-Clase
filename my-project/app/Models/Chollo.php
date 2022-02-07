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
        return $this -> belongsTo(User::class);
    }
}
