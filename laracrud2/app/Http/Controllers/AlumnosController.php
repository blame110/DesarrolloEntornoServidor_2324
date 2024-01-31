<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Http\Requests\StoreAlumnosRequest;
use App\Http\Requests\UpdateAlumnosRequest;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Devuelve un array paginado de alumnos de 3 en 3
        //Ordenado por los últimos
        $alumnos = Alumnos::latest()->paginate(3);
        //$alumnos = Alumnos::all();    

        return view('alumnos.index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnosRequest $request)
    {
        Alumnos::create($request->all());
        return redirect()->route('alumnos.index')
                ->withSuccess('Se ha creado un nuevo Alumno.');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //Cargamos el alumno correspondiente
        $alumnos = Alumnos::find($id);

        //Lo mandamos a la vista
        return view('alumnos.show', [
            'alumnos' => $alumnos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {

        //Cargamos el alumno correspondiente
        $alumno = Alumnos::find($id);

        return view('alumnos.edit', [
            'alumno' => $alumno
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnosRequest $request, String $id)
    {
        //Cargamos el alumno correspondiente
        $alumno = Alumnos::find($id);

        //Actualizamos los datos del alumno
        $alumno->update($request->all());

        //Retornamos a la pagina previa
        return redirect()->back()
                ->withSuccess('El alumnos ha sido modificado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {

        //Cargamos el alumno correspondiente
        $alumno = Alumnos::find($id);

        //Borramos el alumno
        $alumno->delete();

        //retornamos a la ruta indice
        return redirect()->route('alumnos.index')
                ->withSuccess('El alumno se ha borrado correctamente.');
    }
}
