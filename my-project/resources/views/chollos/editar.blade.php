{{--@extends('inicio')

@section('editar')
    <h2>Editando el chollo {{ $chollo -> id }}</h2>

    <form action="{{ route('chollos.actualizar', $chollo -> id) }}" method="POST">
    @method('PUT') {{-- Necesitamos cambiar al método PUT para editar
    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo

    @error('nombre')
        <div class="alert alert-danger">
            El nombre es obligatorio
        </div>
    @enderror
    @error('descripcion')
        <div class="alert alert-danger">
            La descripción es obligatoria
        </div>
    @enderror

    <input
        type="text"
        name="nombre"
        class="form-control mb-2"
        value="{{ $nota -> nombre }}"
        placeholder="Nombre de la nota"
        autofocus
    >
    <input
        type="text"
        name="descripcion"
        placeholder="Descripción de la nota"
        class="form-control mb-2"
        value="{{ $nota -> descripcion }}"
    >

    <button class="btn btn-primary btn-block" type="submit">Guardar cambios</button>
    </form>
@endsection--}}
