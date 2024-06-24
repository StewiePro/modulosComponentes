@extends('layouts.app')

@section('titulo', 'Servicios')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($service->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$service->descripcion}}</p>
    </div>
    <br>
    <a href="/servicios/{{$service->id}}/edit" class="btn btn-warning">Editar Servicios</a>
</div>
@endsection
