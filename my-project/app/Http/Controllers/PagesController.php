<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function listado()
    {
        $chollos = Chollo::with('user')->get(); 
        //$chollos = Chollo::all();
        //Esto es si queremos que liste todas, lo hemos puesto que saque por páginas
        //$chollos = Chollo::paginate(5);

        return view('listado', compact('chollos'));
    }

    public function nuevos(){
        $chollos = Chollo::orderBy('id', 'desc') ->get();

        return view('listado', compact('chollos'));
    }

    public function destacados(){
        $chollos = Chollo::orderBy('puntuacion', 'desc') ->get();

        return view('listado', compact('chollos'));
    }

    public function detalle($id){
        $chollo = Chollo::findOrFail($id);

        return view('detalle', compact('chollo'));
    }
}
