<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Comentario;
use App\Models\Fotos;
use App\Models\Tamanho;

class ProdutoController extends Controller
{
    public function index($id_produto){
        $produto = Produto::find($id_produto);
        $comentarios = Comentario::join('users', 'users.id', '=', 'comentarios.user_id')->where('produto_id', '=', $id_produto)
                                    ->get();
        $fotos = Fotos::where('produto_id', '=', $id_produto)->get();
        $tamanhos = Tamanho::where('produto_id', '=', $id_produto)->get();
        return view("modulo_cliente.produto.index", [
            'produto' => $produto, 
            'comentarios' => $comentarios,
            'fotos' => $fotos,
            'tamanhos' => $tamanhos
        ]);
    }

    public function adiciona_carrinho($id_produto){

        // return redirect()->route('carrinho');
    }
}
