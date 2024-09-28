<?php

use App\Http\Controllers\MaquinasController;
use App\Http\Controllers\OperadoresController;
use App\Http\Controllers\ComponentesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class);
Route::controller(MaquinasController::class)->group(function() 
{
    Route::get('maquinas',[MaquinasController::class, 'index']);
    Route::get('maquinas/create',[MaquinasController::class, 'create']);
    Route::get('maquinas/{idMaquinas}',[MaquinasController::class, 'show']);
});   

Route::controller(OperadoresController::class)->group(function() 
{
    Route::get('operador',[OperadoresController::class, 'index']);
    Route::get('operador/create',[OperadoresController::class, 'create']);
    Route::get('operador/{idoperador}',[OperadoresController::class, 'show']);
});  
