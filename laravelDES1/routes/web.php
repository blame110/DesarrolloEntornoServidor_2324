<?php

use App\Http\Controllers\PantalonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Ruta que devuelve una cadena
Route::get('/buenosdias',function(){
return "Tenga usted";
});

//Ruta que carga un metodo de una clase
Route::get('/cargarPantalon/{idPantalon}', [PantalonController::class, 'index']);


//Ruta principal
Route::get('/', function () {
    return view('welcome');
});
