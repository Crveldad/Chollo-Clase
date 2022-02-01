<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //esto es para decirle que necesitas estar logueado para acceder
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
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
            'descuento' => 'required'
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

        return back()->with('mensaje', 'Chollo nuevo creado');
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
            'descuento' => 'required'
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

        return back()->with('mensaje', 'Chollo actualizado');
    }

    public function eliminar($id) {
        $cholloEliminado = Chollo::findOrFail($id);
        $cholloEliminado -> delete();
      
        return back() -> with('mensaje', 'Chollo eliminado');
      }
}
