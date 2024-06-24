@extends('layouts.app')

@section('titulo', 'Crear Curso')

@section('contenido')
<br>
<h3>Crear un nuevo curso</h3>
<form action='/cursos' method='post' enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nombrecurso" class="form-label">Nombre del Curso</label>
      <input type="texto" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="cupocurso" class="form-label">Cupos del Curso</label>
        <input type="number" class="form-control" id="cupos" name="cupos">
      </div>
    <div class="mb-3">
        <label for="sedecurso" class="form-label">Dependencia donde se dictará elCurso</label>
        <input type="texto" class="form-control" id="sede" name="sede">
      </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Reseña del Curso</label>
        <input type="texto" class="form-control" id="descripcion" name="descripcion">
    </div>
    <div class="form-group">
        <label for="imagen">Cargar Imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

@endsection
