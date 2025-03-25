<?php

use App\Http\Controllers\CocheController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('coches', [CocheController::class, 'index'])->name('coches');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('coches', CocheController::class);
Route::resource('/', CocheController::class);
Route::resource('usuarios', UsuarioController::class);

Route::resource('home', CocheController::class);