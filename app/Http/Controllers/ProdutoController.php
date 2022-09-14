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

    public function calcula_valor_diarias(Request $request){
        $id = $request->input('id');
        $produto = Produto::find($id)->get()[0];
        $values = $request->input('values');
        $checkin = strtotime($values[0]['value']);
        $checkout = strtotime($values[1]['value']);
        $diarias = floor(($checkout - $checkin) / (60 * 60 * 24));
        $return = [
            'diarias' => $diarias,
            'valor_diaria' => number_format($produto->valor_diaria, 2, ',', '.'),
            'valortotal' => number_format($diarias * $produto->valor_diaria, 2, ',', '.')
        ];
        return $return;
    }

}
