<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gerente extends Model
{
    use HasFactory;

    //Dentro del modelo tenemos que crear una variable fillable 
    //Que me define los campos accesibles de la entidad
    protected $fillable = [
'edad',
'nombre',
'sueldo',
'fchNacimiento'
    ];

    //Para poder sacar las discotecas asociadas a este gerente
    //hay que crear este metodo con el cual especificamos que este modelo
    //tiene muchos registros de la otra entidad
    public function discotecas()
    {
        return $this->hasMany(discoteca::class);
    }

}
