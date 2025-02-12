<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return view('modulos.users.ingresar');
});

Route::get('/Inicio', function () {
    return view('modulos.inicio');
});




Auth::routes();

// Route::get('/Primer-Usuario', [UsuariosController::class, 'PrimerUsuario']);
