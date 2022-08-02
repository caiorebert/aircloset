<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/')->group(function(){
    Route::get('/seja-franqueado', [IndexController::class, 'indexFranqueado'])->name("sejaFranqueado");
    Route::get('/contato', [IndexController::class, 'contato'])->name("contato");
    Route::post('/cadastrar-franqueado', [IndexController::class, 'cadastrarFranqueado'])->name("cadastrarFranqueado");
});

Route::prefix('/user')->group(function(){
    Route::get('/atualizar-dados', [UserController::class, 'atualizarDados'])->name("atualizarDados");
});


Route::prefix('/cadastro')->group(function(){
    Route::get('/', [CadastroController::class, 'index'])->name("cadastro");
});