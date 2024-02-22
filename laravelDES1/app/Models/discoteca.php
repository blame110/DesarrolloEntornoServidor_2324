<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discoteca extends Model
{
    use HasFactory;

    //Dentro del modelo tenemos que crear una variable fillable 
    //Que me define los campos accesibles de la entidad
    protected $fillable = [
        'capacidad',
        'nombre',
        'precio',
        'gerente_id',
    ];

    //Para saber que gerente esta asociado a esta discoteca
    //Hay que crear un metodo que diga que tiene asociado 
    //Un único gerente
    public function gerente()
    {
        return $this->belongsTo(gerente::class);
    }
}
