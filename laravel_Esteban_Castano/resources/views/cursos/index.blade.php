@extends('layouts.app')

@section('titulo', 'Listado de Cursos')

@section('contenido')

<br>
<h3 class="text-center">Listado de Cursos Disponibles</h3>
<br>
<div class="row">
    @foreach ($course as $cursito)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($cursito->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                  <h4 class="card-title">{{$cursito->nombre}}</h4>
                  <p class="card-text">Cupos <b>{{$cursito->cupos}}</b></p>
                  <p class="card-text">{{$cursito->descripcion}}</p>
                  <p class="card-text">{{$cursito->sede}}</p>
                  <a href="/cursos/{{$cursito->id}}" class="btn btn-success">Ver Detalles</a>
                </div>
              </div>
        </div>
    @endforeach


</div>

@endsection
