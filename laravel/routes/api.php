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
    Route::post('/adicionar', function(){});
    Route::post('/remover', function(){});
    Route::post('/atualizar', function(){});
    Route::post('/listar', [App\Http\Controller\AlunoController::class, 'listar']);
});
