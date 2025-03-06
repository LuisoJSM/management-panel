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

// Route::get('/Primer-Usuario', [UsuariosController::class, 'PrimerUsuario']);


Auth::routes();

//SUCURSALES
Route::get('Sucursales', [SucursalesController::class, 'index']);
Route::post('Sucursales',[SucursalesController::class, 'store']);
Route::get('Editar-Sucursal/{id_sucursal}', [SucursalesController::class, 'edit']);
Route::put('Actualizar-Sucursal',[SucursalesController::class, 'update']);
Route::get('Cambiar-Estado-Sucursal/{estado}/{id_sucursal}', [SucursalesController::class, 'CambiarEstado']);



//USUARIOS

Route::get('Mis-Datos',function() {
    return view('modulos.users.Mis-Datos');
});

Route::post('Mis-Datos', [UsuariosController::class, 'ActualizarMisDatos']);
