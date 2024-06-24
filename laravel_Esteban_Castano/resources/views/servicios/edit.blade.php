@extends('layouts.app')

@section('titulo', 'Editar servicio')

@section('contenido')
<br>
<h3 class="text-center">Editar información del servicio</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/servicios/{{$service->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombreservicio">Modifique el Nombre del Servicio</label>
        <input name="nombre" id="nombreservicio" value="{{$service->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="descripcion">Modifique la Descripción del Servicio</label>
        <input name="descripcion" id="descripcion" value="{{$service->descripcion}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="imagen">Cargar nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>

@endsection
