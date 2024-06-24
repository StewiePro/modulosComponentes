@extends('layouts.app')

@section('titulo', 'Listado de Estudiantes')

@section('contenido')

<br>
<h3 class="text-center">Listado de Estudiantes Creados</h3>
<br>
<div class="row">
    @foreach ($student as $estudianto)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">{{$estudianto->nombre}}</h4>
                  <p class="card-text">Dir: <b>{{$estudianto->direccion}}</b></p>
                  <p class="card-text">Tel:{{$estudianto->telefono}}</p>
                  <p class="card-text">{{$estudianto->datos_adicionales}}</p>
                  <a href="#" class="btn btn-success">Ver Detalles</a>
                </div>
              </div>
        </div>
    @endforeach


</div>

@endsection
