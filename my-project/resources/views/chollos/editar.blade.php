@extends('inicio')

@section('editar')

    <form action="{{ route('chollos.actualizar', $chollo -> id) }}" method="POST" class="formulario">
    @method('PUT') {{-- Necesitamos cambiar al método PUT para editar--}}
    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo--}}
    <fieldset>
      <legend>Chollo Editor:</legend>
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" class="form-control mb-2" value="{{ $chollo -> titulo }}" autofocus><br>
      @error('titulo')
          <div class="alert alert-danger">
            No olvides rellenar el título
          </div>
      @enderror

    <label for="descripcion">Descripción:</label>
    <input type="text" name="descripcion" class="form-control mb-2" value="{{ $chollo -> descripcion }}"><br>
    @error('descripcion')
          <div class="alert alert-danger">
            No olvides rellenar la descripción
          </div>
      @enderror

    <label for="url">URL:</label>
    <input type="url" name="url" class="form-control mb-2" value="{{ $chollo -> url }}"><br>
    @error('url')
          <div class="alert alert-danger">
            No olvides rellenar la URL
          </div>
      @enderror

    <label for="categoria">Categoría:</label>
    <select name="categoria" id="categoria" value="{{ $chollo -> categoria }}">
      <option value="lorem">Lorem</option>
      <option value="ipsum">Ipsum</option>
      <option value="dolor">Dolor</option>
      <option value="sit">Sit</option>
      <option value="amet">Amet</option>
    </select><br>
    @error('categoria')
          <div class="alert alert-danger">
            No olvides rellenar la categoría
          </div>
      @enderror

    <label for="precio">Precio:</label>
    <input type="text" name="precio" class="form-control mb-2" value="{{ $chollo -> precio }}"><br>
    @error('precio')
          <div class="alert alert-danger">
            No olvides rellenar el precio
          </div>
      @enderror

    <label for="descuento">Precio de descuento:</label>
    <input type="text" name="descuento" class="form-control mb-2" value="{{ $chollo -> descuento }}"><br>
    @error('descuento')
          <div class="alert alert-danger">
            No olvides rellenar el precio de descuento
          </div>
      @enderror

    <button class="bot" type="submit">Guardar cambios</button>
    </fieldset>
    </form>
    
@endsection
