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

Route::prefix('/')->group(function(){
    Route::get('/', [IndexController::class, 'index'])->name("index");
    Route::get('/seja-franqueado', [IndexController::class, 'indexFranqueado'])->name("seja-franqueado");
    Route::get('/contato', [IndexController::class, 'contato'])->name("contato");
    Route::get('/cadastro', [CadastroController::class, 'index'])->name("cadastro");
    Route::post('/cadastrar-franqueado', [IndexController::class, 'cadastrarFranqueado'])->name("cadastrar-franqueado");
    Route::get('/login', [LoginController::class, 'index'])->name("page_login");
    Route::get('/login', [LoginController::class, 'index'])->name("login");
    Route::post('/login', [LoginController::class, 'logar'])->name("logar");
    Route::get('/logout', [LoginController::class, 'logout'])->name("deslogar");
});

Route::prefix('/user')->group(function(){
    Route::get('/atualizar-dados', [UserController::class, 'atualizarDados'])->middleware('auth')->name("atualizarDados");
    Route::post('/atualizar-dados', [UserController::class, 'updateDados'])->middleware('auth')->name("updateDados");
});
