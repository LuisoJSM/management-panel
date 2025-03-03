<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\SucursalesController;

Route::get('/', function () {
    return view('modulos.users.ingresar');
});

Route::get('/Inicio', function () {
    return view('modulos.inicio');
});

// Route::get(uri: '/Primer-Usuario', [UsuariosController::class, 'PrimerUsuario']);


Auth::routes();


Route::get('Sucursales', [SucursalesController::class, 'index']);

