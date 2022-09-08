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

    // CADASTRO

    Route::prefix('/')->group(function(){
        Route::get('/cadastro', [CadastroController::class, 'index'])->name("cadastro");
        Route::post('/cadastro', [CadastroController::class, 'cadastrar'])->name("cadastro");
    });

    //--------------------------------------------------------

    // FRANQUEADO

    Route::prefix('/franqueado')->group(function(){
        Route::get('/sejaum', [IndexController::class, 'indexFranqueado'])->name("seja-franqueado");
        Route::get('/cadastre-se', [IndexController::class, 'cadastrarFranqueado'])->name("cadastrar-franqueado");
    });

    //--------------------------------------------------------

    // LOGIN

    Route::prefix('/login')->group(function(){
        Route::get('/', [LoginController::class, 'index'])->name("page_login");
        Route::get('/', [LoginController::class, 'index'])->name("login");
        Route::post('/', [LoginController::class, 'logar'])->name("logar");
    });

    //--------------------------------------------------------

    // LOGOUT

    Route::get('/logout', [LoginController::class, 'logout'])->name("deslogar");

    //--------------------------------------------------------

    // CONTATO

    Route::prefix('/contato')->group(function(){
        Route::get('/', [IndexController::class, 'contato'])->name("contato");
        Route::post('/sendMessage', [IndexController::class, 'sendMessage'])->name("sendMessage");
    });

    //--------------------------------------------------------
});

Route::prefix('/search')->group(function(){
    Route::post('/', [EcommerceController::class, 'search'])->name('search');
    Route::get('/', [EcommerceController::class, 'search'])->name('search');
});

Route::prefix('/produto')->group(function(){
    Route::get('/{id_produto}', [ProdutoController::class, 'index'])->name("produto");
    Route::post('/calcula-valor-diarias', [ProdutoController::class, 'calcula_valor_diarias'])->middleware('auth')->name('calcula_valor_diarias');
});

// USER

Route::prefix('/user')->group(function(){
    Route::get('/atualizar-dados', [UserController::class, 'atualizarDados'])->middleware('auth')->name("atualizarDados");
    Route::post('/atualizar-dados', [UserController::class, 'updateDados'])->middleware('auth')->name("updateDados");
    Route::get('/meus-cupons', [UserController::class, 'listCupons'])->middleware('auth')->name("meus-cupons");

    // Carrinho
    Route::prefix('/carrinho')->group(function(){
        Route::get('/', [CarrinhoController::class, 'index'])->middleware('auth')->name("carrinho");
        Route::post('/adiciona-carrinho', [CarrinhoController::class, 'adiciona_carrinho'])->middleware('auth')->name('adiciona-produto');
        Route::post('/remove-carrinho', [CarrinhoController::class, 'remove_carrinho'])->middleware('auth')->name('remove-produto');
    });
});
