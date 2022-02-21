<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Chollo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $categoriasBD = Categoria::all();
        return view('formulario', compact('categoriasBD'));
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
        $cholloNuevo->user_id = Auth::user()->id;
        $cholloNuevo->url = $request->url;
        //$cholloNuevo->categoria = $request->categoria;

        $cholloNuevo->puntuacion = 0;
        $cholloNuevo->precio = $request->precio;
        $cholloNuevo->descuento = $request->descuento;
        $cholloNuevo->disponible = true;

        $cholloNuevo->save();

        //se necesita hacerlo después del save porque necesito la id del chollo, y hasta guardarlo, no exite. Así que esto relaciona la id del chollo con la de categoría
        $cholloNuevo->attachCategorias($request->categoria);

        return back()->with('mensaje', 'Chollo nuevo creado');
    }

    public function editar($id)
    {
        $chollo = Chollo::findOrFail($id);
        $categoriasBD = Categoria::all();

        return view('chollos.editar', compact('chollo', 'categoriasBD'));
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
        //$cholloActualizado->categoria = $request->categoria;
        $cholloActualizado->puntuacion = 0;
        $cholloActualizado->precio = $request->precio;
        $cholloActualizado->descuento = $request->descuento;
        $cholloActualizado->disponible = true;

        //primero le quito si tiene, y luego se la pongo, esta vez tiene que estar por encima del save porque ya existe el chollo
        //tengo que hacer detach all para que quite todas, no sólo la que tenía seleccionada
        $cholloActualizado->detachCategorias(Categoria::all());
        $cholloActualizado->attachCategorias($request->categoria);
        $cholloActualizado->save();

        return back()->with('mensaje', 'Chollo actualizado');
    }

    public function eliminar($id) {
        $cholloEliminado = Chollo::findOrFail($id);
        $cholloEliminado -> delete();
      
        return back() -> with('mensaje', 'Chollo eliminado');
      }
}
