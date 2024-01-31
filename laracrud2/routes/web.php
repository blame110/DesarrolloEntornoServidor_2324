<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

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


//Nos genera una ruta para cada metodo del controller
//con php artisan route:list nos saca todas las rutas actuales
Route::resource('alumnos', AlumnosController::class);

Route::get('/', AlumnosController::class . '@index')->name('alumnos.index');

