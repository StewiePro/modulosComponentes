@extends('layouts.app')

@section('titulo', 'Crear Estudiante')

@section('contenido')
<br>
<h3>Creación de estudiante en BD</h3>
<form action='/estudiantes' method='post'>
    @csrf
    <div class="mb-3">
      <label for="nombreestudiante" class="form-label">Nombre y Apellido</label>
      <input type="texto" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="direccionestudiante" class="form-label">Dirección de residencia</label>
        <input type="texto" class="form-control" id="direccion" name="direccion">
      </div>
    <div class="mb-3">
        <label for="telefonoestudiante" class="form-label">Telefono celular</label>
        <input type="number" class="form-control" id="telefono" name="telefono">
      </div>
    <div class="mb-3">
        <label for="datosestudiante" class="form-label">Datos complementarios</label>
        <input type="texto" class="form-control" id="datos_adicionales" name="datos_adicionales">
    </div>
       <button type="submit" class="btn btn-success">Guardar</button>
</form>

@endsection
