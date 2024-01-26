<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beds extends Model
{
    use HasFactory;

    //Hay que definir los campos de BD
    protected $fillable = [
        'marca',
        'modelo',
        'peso'
    ];
}
