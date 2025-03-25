<?php

use App\Http\Controllers\CocheController;
use App\Http\Controllers\UsuarioController;

Route::resource('coches', CocheController::class);
Route::resource('/', CocheController::class);
Route::resource('usuarios', UsuarioController::class);
