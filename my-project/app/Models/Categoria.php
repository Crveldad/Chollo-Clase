<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Categoria extends Model
{
    use HasFactory;

    /*public function chollos(){
        //esto no está del todo bien, hay que poner la PK y la FK
        return $this->hasMany(Chollo::class);
    }*/
}
