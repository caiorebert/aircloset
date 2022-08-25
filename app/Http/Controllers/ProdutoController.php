<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index($id_produto){
        $produto = Produto::find($id_produto);
        return view("modulo_cliente.produto.index", ['produto' => $produto]);
    }
}
