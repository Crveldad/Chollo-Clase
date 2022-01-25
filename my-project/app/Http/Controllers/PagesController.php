<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function listado() {
        $chollos = Chollo::all();
        
        return view('listado', @compact('chollos'));
    }

    public function formulario(){
        return view('formulario');
    }

    public function crear(Request $request){
        $cholloNuevo = new Chollo;

        $cholloNuevo -> titulo = $request -> titulo;
        $cholloNuevo -> descripcion = $request -> descripcion;
        $cholloNuevo -> url = $request -> url;
        $cholloNuevo -> categoria = $request -> categoria;
        $cholloNuevo -> puntuacion = 0;
        $cholloNuevo -> precio = $request -> precio;
        $cholloNuevo -> descuento = $request -> descuento;
        $cholloNuevo -> disponible = true;

        $request -> validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required',
            'categoria' => 'required',
            'precio' => 'required',
            'descuento' => 'required',
          ]);

        $cholloNuevo -> save();

        return back() -> with('mensaje', 'Chollo nuevo creado dpm');

    }
}
