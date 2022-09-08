<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrinho;
use App\Models\Produto;
use App\Models\ProdutosCarrinho;
use ProdutoController;

class CarrinhoController extends Controller
{
    
    public function index(){
        $produtoscarrinho = Carrinho::selectRaw("*,
                                                pc.id as produtocarrinhoid,
                                                DATE_FORMAT(pc.checkin, '%d/%m/%Y') as checkin_formatado,
                                                DATE_FORMAT(pc.checkin, '%h:%i') as horain_formatado,
                                                DATE_FORMAT(pc.checkout, '%d/%m/%Y') as checkout_formatado,
                                                DATE_FORMAT(pc.checkout, '%d:%i') as horaout_formatado")
                                        ->join('produtoscarrinho as pc', 'pc.carrinho_id', '=', 'carrinho.user_id')
                                        ->join('produtos as p', 'p.id', '=', 'pc.produto_id')
                                        ->join('tamanhos as t', 't.id', '=', 'pc.tamanho')
                                        ->where('carrinho.user_id', '=', auth()->user()->id)
                                        ->whereRaw("pc.deleted_at is null")
                                        ->get();
        $taxas = array_sum(array_column($produtoscarrinho->toArray(), 'taxalimpeza'));
        $valortotalcarrinho = array_sum(array_column($produtoscarrinho->toArray(), 'valortotal'));
        return view('modulo_cliente.usuario.carrinho.index', [
            'produtos' => $produtoscarrinho,
            'taxalimpeza' => $taxas,
            'valortotalcarrinho' => $valortotalcarrinho
        ]);
    }

    public function adiciona_carrinho(Request $request){
        $id = $request->input('id');
        
        $produtoscarrinho = new ProdutosCarrinho();
        
        $carrinho_id = Carrinho::select('id')->where('user_id', '=', auth()->user()->id)->get()[0]['id'];
        
        $informs = $request->input('values');
        
        if ($informs != "") {
            $valores = Produto::calcula_valor_diarias([
                'id' => $request->input('id'), 
                'values' => $informs
            ]);
    
            $produtoscarrinho->carrinho_id = $carrinho_id;
            $produtoscarrinho->produto_id = $id;
            $produtoscarrinho->tamanho = $request->input('tamanho');
            $produtoscarrinho->valorpordiaria = substr($valores['valor_diaria'], 0, -3);
            $produtoscarrinho->diarias = $valores['diarias'];
            $produtoscarrinho->valortotal = substr($valores['valortotal'], 0, -3);
            $produtoscarrinho->taxalimpeza = 15;
            $produtoscarrinho->valordesconto = 25;
            $produtoscarrinho->checkin = $informs[0]['value'] . " " . $informs[2]['value'] . ":00";
            $produtoscarrinho->checkout = $informs[1]['value'] . " " . $informs[3]['value'] . ":00";
            $produtoscarrinho->valordesconto = 25;
            if ($produtoscarrinho->save()) {
                return ['status' => true, 'data' => '<b>Produto adicionado com sucesso!</b> Para ir até o carrinho, <a href="' .  route('carrinho') . '">clique aqui.</a>'];
            } else {
                return ['status' => false, 'data' => '<b>Erro ao adicionar produto!</b> Tente novamente mais tarde.'];
            };
        } else {
            return ['status' => false, 'data' => '<b>É necessário escolher o tamanho, data de checkin e checkout para prosseguir!</b>'];
        }

    }

    public function remove_carrinho(Request $request){
        $id = $request->input('id');
        $deleted = ProdutosCarrinho::whereNull('deleted_at')->where('id', '=', $id)->delete();
        return redirect()->route('carrinho');
    }

}
