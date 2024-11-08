<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::post('usuarios/cadastrar', [UsuarioController::class, 'cadastrar']);

Route::post('usuarios/login', [UsuarioController::class, 'login']);

Route::middleware('auth:sanctum')->post('usuarios/logout', [UsuarioController::class, 'logout']);

Route::middleware('auth:sanctum')->get('rota', [UsuarioController::class, 'protectedResource']);

