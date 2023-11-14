<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('/autenticar/login', [App\Http\Controllers\AutenticarController::class, 'login']);
Route::get('/autenticar/logout', [App\Http\Controllers\AutenticarController::class, 'logout']);
Route::get('/principal', [App\Http\Controllers\PrincipalController::class, 'index']);
Route::get('/inventario', [App\Http\Controllers\InventarioController::class, 'index']);