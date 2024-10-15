<?php

use App\Http\Controllers\MaquinasController;
use App\Http\Controllers\OperadoresController;
use App\Http\Controllers\ComponentesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class);
Route::controller(MaquinasController::class)->group(function() 
{
    Route::get('maquinas',[MaquinasController::class, 'index']);
    Route::get('maquinas/create',[MaquinasController::class, 'create']);
    Route::get('maquinas/{idMaquinas}',[MaquinasController::class, 'show']);
    
});   
    Route::resource('maquinas', MaquinasController::class);
    Route::resource('maquinarias', MaquinasController::class);


Route::controller(OperadoresController::class)->group(function() {
    Route::get('operadores',[OperadoresController::class, 'index']);
    Route::get('operadores/create',[OperadoresController::class, 'create']);
    Route::get('operadores/{idOperador}',[OperadoresController::class, 'show']);
    Route::get('operadores/{id}/edit', [OperadoresController::class, 'edit'])->name('operadores.edit');

});
Route::resource('operadores', OperadoresController::class);

Route::controller(ComponentesController::class)->group(function() {
    Route::get('componentes', 'index');           // Listar todos los componentes
    Route::get('componentes/create', 'create');   // Formulario para crear un componente
    Route::get('componentes/show'); // Ver detalles de un componente
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');




