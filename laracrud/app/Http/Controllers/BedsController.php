<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beds;


class BedsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listado de beds

        //Cargamos con el modelo todos los registros
        $beds = Beds::all();

        //Cargamos la vista index de beds
        //Pasando los datos cargados
        return view('beds.index', compact('beds'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validacion de datos
        $request->validate([
            'marca' => 'required|max:200',
            'peso' => 'required',
        ]);
        //Con esta instruccion creamos un registro en la tabla
        //beds utilizando todos los datos que nos han pasado en el request
        Beds::create($request->all());

        //Una vez creado el bed se recirecciona al indice
        return redirect()->route('beds.index')
            ->with('sucess', 'bed created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Cargamos el registro
        $bed = Beds::find($id);

        //Cargamos la vista con los datos del registro
        return view('beds.show', compact('bed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Actualizacion

        //Validacion de datos
        $request->validate([
            'marca' => 'required|max:200',
            'peso' => 'required',
        ]);

        //Cogemos el registro a modificar
        $bed = Beds::find($id);

        //Modificamos con los datos que nos llegan
        $bed->update($request->all());

        //Volvemos a cargar el indice
        return redirect()->route('beds.index')
            ->with('success', 'Bed updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Eliminacion
        //Cargamos el registro
        $bed = Beds::find($id);

        //Lo borramos
        $bed->delete();

        //Cargamos el indice
        return redirect()->route('beds.index')
            ->with('success', 'bed deleted successfully');
    }

    public function create()
    {
      return view('beds.create');
    }
    public function edit($id)
    {
        //Carga el registro
        $bed = Beds::find($id);
        //Lo manda a la vista de edicion
        return view('beds.edit', compact('bed'));
    }
}
