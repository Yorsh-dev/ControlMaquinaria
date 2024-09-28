<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ComponentesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('cursos',[CursoController::class, 'index']);
Route::get('cursos/create',[CursoController::class, 'create']);
Route::get('cursos/{curso}',[CursoController::class, 'show']);
