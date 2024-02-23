<?php

namespace App\Http\Controllers;

use App\Models\discoteca;
use App\Models\gerente;
use Illuminate\Http\Request;

class discotecaController extends Controller
{
    /**
     * Va a cargar todas las discotecas y enviar los datos a la vista discotecas.index
     */
    public function index()
    {
        //Cargamos con el modelo todos los registros
        $discotecas = discoteca::all();

        //Cargamos la vista indice con los datos
        return view('discoteca.index',compact('discotecas'));

    }

    /**
     * Guarda en BD los datos del formulario de registro de discotecas
     * y despues redirecciona a el indice
     */
    public function store(Request $request)
    {
        //Validamos los datos
        $request->validate([
            'nombre' => 'required|max:70|min:5',
            'precio' => 'required',
        ]);

        //Guardamos en bd los datos
        discoteca::create($request->all());

        //Redireccionamos a la vista
        return redirect()->route('discotecas.index')->witch('success','Discoteca creada correctamente');

    }

    public function create()
    {
        return view('discoteca.create');
    }

    public function edit($id)
    {
        $discoteca = discoteca::find($id);
        $gerentes = gerente::all();

    
        return view('discoteca.edit', compact('discoteca','gerentes'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Sacamos los datos de la discoteca con id id
        $discoteca = discoteca::find($id);

        return view('discoteca.show',compact('discoteca'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
             //Validamos los datos
             $request->validate([
                'nombre' => 'required|max:70|min:5',
                'precio' => 'required',
            ]);

            //Cargamos la discoteca a modificar
            $discoteca = discoteca::find($id);

            //modificamos los datos en bd
            $discoteca->update($request->all());

            return redirect()->route('discotecas.index')
            ->witch('success','Modificación realizada');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $discoteca = discoteca::find($id);

        $discoteca->delete();

        return redirect()->route('discoteca.index')
            ->witch('success','Discoteca eraseada');
    }



    public function pruebasModelo()
    {

        //Con all nos saca todos los elementos de la entidad
        //$discotecas = discoteca::all();

        //var_dump($discotecas);

        //Para sacar un único registro utilizamos find
        //$discoteca5 = discoteca::find(6);

        //Para insertar un nuevo registro usamos create
       /* discoteca::create(
            [
                'capacidad'=>23,
                'nombre'=>'especial',
                'precio'=>1,
                'gerente_id'=>1,
                    ]
            );
*/
        //var_dump($discoteca4);

        //Para modificar un registro primero lo bucamos
        //modificamos el campo que queramos 
        //Y lo guardamos con save
        //$discoteca4->nombre = 'catalina';
        //$discoteca4->save();

        //Eliminamos un registro con delete
        //$discoteca5->delete();

        //Podemos hacer consultas condicionales utilizando la funcion where

        //$discotecas=discoteca::where('nombre','especial')->get();

        //$discotecas=discoteca::where('precio','>',200)->get();

        //$discotecas=discoteca::where('nombre','especial')->where('precio',1)->get();

            //whereIn('precio' ,[1,23,45,6])

        //foreach( $discotecas as $discoteca)
        //{
        // print( $discoteca->nombre );
        //print("<br>");
        //print( $discoteca->precio );
        //print("<br>");
        //}

        //dd($discoteca5->gerente());

        


    }
}
