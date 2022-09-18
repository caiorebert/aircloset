<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Carrinho;
use App\Models\Produto;
use App\Models\ProdutosCarrinho;
use App\Models\CupomUser;
use App\Models\Cupom;
use ProdutoController;

class CarrinhoController extends Controller
{
    
    public function index(){
        $carrinho = Carrinho::select('*','cp.nome as cupom_nome')->where('carrinho.user_id', '=', auth()->user()->id)
                        ->leftjoin('cupons as cp', 'cp.id', '=', 'carrinho.cupom_id')
                        ->get()[0];
        $produtoscarrinho = ProdutosCarrinho::selectRaw("*,
                                                produtoscarrinho.id as produtocarrinhoid,
                                                DATE_FORMAT(produtoscarrinho.checkin, '%d/%m/%Y') as checkin_formatado,
                                                DATE_FORMAT(produtoscarrinho.checkin, '%h:%i') as horain_formatado,
                                                DATE_FORMAT(produtoscarrinho.checkout, '%d/%m/%Y') as checkout_formatado,
                                                DATE_FORMAT(produtoscarrinho.checkout, '%d:%i') as horaout_formatado")
                                        ->join('carrinho as c', 'c.id', '=', 'produtoscarrinho.carrinho_id')
                                        ->join('produtos as p', 'p.id', '=', 'produtoscarrinho.produto_id')
                                        ->join('tamanhos as t', 't.id', '=', 'produtoscarrinho.tamanho')
                                        ->where('c.user_id', '=', auth()->user()->id)
                                        ->whereRaw("produtoscarrinho.deleted_at is null")
                                        ->get();
        $taxas = array_sum(array_column($produtoscarrinho->toArray(), 'taxalimpeza'));
        $valortotalcarrinho = array_sum(array_column($produtoscarrinho->toArray(), 'valortotal'));
        $date_atual = date('Y-m-d');
        $cupons = CupomUser::selectRaw("*, DATE_FORMAT(c.data_validade, '%d/%m/%Y') as data_validade")
                            ->join('cupons as c', 'c.id', '=', 'cupomuser.cupom_id')
                            ->where('cupomuser.user_id', auth()->user()->id)
                            ->where('c.data_validade', '>', $date_atual)
                            ->get();
        return view('modulo_cliente.usuario.carrinho.index', [
            'produtos' => $produtoscarrinho,
            'carrinho' => $carrinho,
            'taxalimpeza' => $taxas,
            'valortotalcarrinho' => $valortotalcarrinho,
            'cupons' => $cupons
        ]);
    }

    public function adiciona_carrinho(Request $request){
        $id = $request->input('id');
        
        $produtoscarrinho = new ProdutosCarrinho();
        
        $carrinho = Carrinho::where('user_id', '=', auth()->user()->id)->get()[0];
        
        $cupom = Cupom::find($carrinho->cupom_id);

        $carrinho_id = $carrinho->id;

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
            $produtoscarrinho->checkin = $informs[0]['value'] . " " . $informs[2]['value'] . ":00";
            $produtoscarrinho->checkout = $informs[1]['value'] . " " . $informs[3]['value'] . ":00";
            if ($produtoscarrinho->save()) {
                $carrinho = Carrinho::calculaProdutoValorCarrinho($carrinho, $produtoscarrinho->valorpordiaria * $produtoscarrinho->diarias, 1);
                if ($carrinho->cupom_id) {
                    $carrinho = Carrinho::calculaCupomValorCarrinho($carrinho, $cupom, 1);
                }
                if ($carrinho->save()) {
                    return ['status' => true, 'data' => '<b>Produto adicionado com sucesso!</b> Para ir até o carrinho, <a href="' .  route('carrinho') . '">clique aqui.</a>'];
                } else {
                    return ['status' => false, 'data' => '<b>Erro ao adicionar produto!</b> Tente novamente mais tarde.'];
                }
            } else {
                return ['status' => false, 'data' => '<b>Erro ao adicionar produto!</b> Tente novamente mais tarde.'];
            };
        } else {
            return ['status' => false, 'data' => '<b>É necessário escolher o tamanho, data de checkin e checkout para prosseguir!</b>'];
        }

    }

    public function remove_carrinho(Request $request){
        $id = $request->input('id');
        $carrinho = Carrinho::where('user_id', '=', auth()->user()->id)->get()[0];
        $cupom = Cupom::find($carrinho->cupom_id);
        $produtoscarrinho = ProdutosCarrinho::where('id', '=', $id)->get()[0];
        $carrinho = Carrinho::calculaProdutoValorCarrinho($carrinho, ($produtoscarrinho->valorpordiaria * $produtoscarrinho->diarias) + $produtoscarrinho->taxalimpeza, 0);
        if ($carrinho->cupom_id) {
            $carrinho = Carrinho::calculaCupomValorCarrinho($carrinho, $cupom, 1);
        }
        $carrinho->save();
        $deleted = ProdutosCarrinho::whereNull('deleted_at')->where('id', '=', $id)->delete();
        return redirect()->route('carrinho');
    }

    public function aplica_cupom(Request $request) {
        $id_cupom = 1;
        $carrinho = Carrinho::where('user_id', '=', auth()->user()->id)->get()[0];
        $cupom = Cupom::find($id_cupom);
        $carrinho->cupom_id = $id_cupom;
        $carrinho = Carrinho::calculaCupomValorCarrinho($carrinho, $cupom, 1);
        if ($carrinho->save()) {
            return ['status' => true, 'data' => $carrinho->valortotalcarrinho, 'message' => 'Cupom adicionado com sucesso!'];
        } else {
            return ['status' => false, 'data' => null, 'message' => 'Erro ao aplicar cupom!'];
        }
    }

    public function remove_cupom(Request $request) {
        $carrinho = Carrinho::where('user_id', '=', auth()->user()->id)->get()[0];
        $carrinho->cupom_id = null;
        $carrinho->valortotalcomdesconto = null;
        if ($carrinho->save()) {
            return ['status' => true, 'data' => $carrinho->valortotalcarrinho, 'message' => 'Cupom removido com sucesso!'];
        } else {
            return ['status' => false, 'data' => null, 'message' => 'Erro ao aplicar cupom!'];
        }
    }

    public function count_produtos(){
        $carrinho = Carrinho::where('user_id', '=', auth()->user()->id)->whereNull('deleted_at')->get()[0];
        $produtos = ProdutosCarrinho::where('carrinho_id', '=', $carrinho->id)->get();
        return $produtos->count('id');
    }
}
