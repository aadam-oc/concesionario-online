<?php

use App\Http\Controllers\CocheController;

Route::resource('coches', CocheController::class);
Route::resource('/', CocheController::class);