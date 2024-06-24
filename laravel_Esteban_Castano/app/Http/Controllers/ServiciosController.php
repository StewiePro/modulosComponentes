<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Servicio::all();
       // return $service;
       return view('servicios.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->all(); para devolver toda la info de los formularios
        $service =  new Servicio();
        $service->nombre = $request->input('nombre');
        $service->descripcion = $request->input('descripcion');
        if ($request->hasFile('imagen')){
            $service->imagen = $request->file('imagen')->store('public/servicios');
        }

        $service->save();
        return 'Guardado exitoso';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Servicio::find($id);
        return view('servicios.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Servicio::find($id);
        return view('servicios.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Servicio::find($id);
        $service->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){
            $service->imagen = $request->file('imagen')->store('public/servicios');
            $service->save();
            return 'Actualización completa';
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
