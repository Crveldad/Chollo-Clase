<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function listado()
    {
        $chollos = Chollo::all();

        return view('listado', @compact('chollos'));
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function crear(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required',
            'categoria' => 'required',
            'precio' => 'required',
            'descuento' => 'required',
        ]);

        $cholloNuevo = new Chollo;

        $cholloNuevo->titulo = $request->titulo;
        $cholloNuevo->descripcion = $request->descripcion;
        $cholloNuevo->url = $request->url;
        $cholloNuevo->categoria = $request->categoria;
        $cholloNuevo->puntuacion = 0;
        $cholloNuevo->precio = $request->precio;
        $cholloNuevo->descuento = $request->descuento;
        $cholloNuevo->disponible = true;

        $cholloNuevo->save();

        return back()->with('mensaje', 'Chollo nuevo creado dpm');
    }

    public function editar($id)
    {
        $chollo = Chollo::findOrFail($id);

        return view('chollos.editar', compact('chollo'));
    }

    public function actualizar(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required',
            'categoria' => 'required',
            'precio' => 'required',
            'descuento' => 'required',
        ]);

        $cholloActualizado = Chollo::findOrFail($id);

        $cholloActualizado->titulo = $request->titulo;
        $cholloActualizado->descripcion = $request->descripcion;
        $cholloActualizado->url = $request->url;
        $cholloActualizado->categoria = $request->categoria;
        $cholloActualizado->puntuacion = 0;
        $cholloActualizado->precio = $request->precio;
        $cholloActualizado->descuento = $request->descuento;
        $cholloActualizado->disponible = true;

        $cholloActualizado->save();

        return back()->with('mensaje', 'chollo actualizado, loco');
    }

    public function eliminar($id) {
        $cholloEliminado = Chollo::findOrFail($id);
        $cholloEliminado -> delete();
      
        return back() -> with('mensaje', 'Chollo deleted, suerte');
      }

    public function nuevos(){
        $chollos = Chollo::orderBy('id', 'desc') ->get();

        return view('listado', @compact('chollos'));
    }

    public function destacados(){
        $chollos = Chollo::orderBy('puntuacion', 'desc') ->get();

        return view('listado', @compact('chollos'));
    }
}
