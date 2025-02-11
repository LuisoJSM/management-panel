<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/Primer-Usuario', [UsuariosController::class, 'PrimerUsuario']);
