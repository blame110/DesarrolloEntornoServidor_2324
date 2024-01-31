<?php

use App\Http\Controllers\BedsController;
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

// returns the home page with all Beds
Route::get('/', BedsController::class .'@index')->name('beds.index');

// deletes a BedsController
Route::delete('/beds/{bed}', BedsController::class .'@destroy')->name('beds.destroy');

// returns a page that shows a full BedsController
Route::get('/beds/{bed}', BedsController::class .'@show')->name('beds.show');

// returns the form for editing a BedsController
Route::get('/beds/{bed}/edit', BedsController::class .'@edit')->name('beds.edit');

// updates a BedsController
Route::put('/beds/{bed}', BedsController::class .'@update')->name('beds.update');

// returns the form for adding a Bed
Route::get('/beds/create', BedsController::class . '@create')->name('beds.create');

// adds a Bed to the database is post because the form has the data
Route::post('/beds', BedsController::class .'@store')->name('beds.store');


