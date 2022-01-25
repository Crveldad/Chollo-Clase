@extends('inicio')


@section('formulario')


<form action="{{ route('chollos.crear') }}" method="POST">
    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}

    <label for="titulo">Título:</label>
    <input type="text" name="titulo" class="form-control mb-2" autofocus ><br>
      @error('titulo')
          <div class="alert alert-danger">
            No olvides rellenar el título
          </div>
      @enderror

    <label for="descripcion">Descripción:</label>
    <input type="text" name="descripcion" class="form-control mb-2"><br>
    @error('descripcion')
          <div class="alert alert-danger">
            No olvides rellenar la descripción
          </div>
      @enderror

    <label for="url">URL:</label>
    <input type="url" name="url" class="form-control mb-2"><br>
    @error('url')
          <div class="alert alert-danger">
            No olvides rellenar la URL
          </div>
      @enderror

    <label for="categoria">Categoría:</label>
    <input type="text" name="categoria" class="form-control mb-2"><br>
    @error('categoria')
          <div class="alert alert-danger">
            No olvides rellenar la categoría
          </div>
      @enderror

    <label for="precio">Precio:</label>
    <input type="text" name="precio" class="form-control mb-2"><br>
    @error('precio')
          <div class="alert alert-danger">
            No olvides rellenar el precio
          </div>
      @enderror

    <label for="descuento">Precio de descuento:</label>
    <input type="text" name="descuento" class="form-control mb-2"><br>
    @error('descuento')
          <div class="alert alert-danger">
            No olvides rellenar el precio de descuento
          </div>
      @enderror
    

    <button class="btn btn-primary btn-block" type="submit">
      Crear nuevo chollo
    </button>
</form>
@endsection