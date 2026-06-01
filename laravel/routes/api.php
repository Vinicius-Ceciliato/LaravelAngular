<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('adicionar-aluno', function () {
    return 'teste';
});

Route::prefix('/aluno')->group(function () {
    Route::get('/index', function(){});
    Route::get('/adicionar', function(){});
    Route::get('/remover', function(){});
    Route::get('/atualizar', function(){});
    Route::get('/listar', function(){});
});
