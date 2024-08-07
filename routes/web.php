<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProovedorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return 'Nuestro clientes son nuestra prioridad';
});

Route::get('/mensaje', [ClientesController::class, 'mensaje']);

Route::resource('/proovedores', ProovedorController::class);
