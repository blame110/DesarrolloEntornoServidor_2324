<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PantalonController extends Controller
{
    //
    public static function index($idPantalon)
    {
        return "El pantalon es  $idPantalon";

    }
}
