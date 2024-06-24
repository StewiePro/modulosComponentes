@extends('layouts.app')

@section('titulo', 'Listado de servicios')

@section('contenido')
<br>
<h3 class="text-center">Listado de Servicios Disponibles</h3>
<br>
<div class="row">
    @foreach ($service as $modelos)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($modelos->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$modelos->nombre}}</h5>
                  <p class="card-text">{{$modelos->descripcion}}</p>
                  <a href="/servicios/{{$modelos->id}}" class="btn btn-success">Ver detalles</a>
                </div>
              </div>
        </div>
    @endforeach
</div>
@endsection
