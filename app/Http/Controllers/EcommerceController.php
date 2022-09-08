<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mensagem;
use App\Models\Produto;

class EcommerceController extends Controller
{
    public function search(Request $request) {
        if ($request->all()) {
            $objFiltros = $request->input('objFiltros');
            if ($objFiltros!= null) {
                $search = ($objFiltros['search']) ? $objFiltros['search'] : '' ;
                $ordenacao = ($objFiltros['ordenacao']) ? $objFiltros['ordenacao'] : '' ;
                $filtros = $objFiltros['filtros'];
                $max = $filtros[0]['value']; 
                $min = $filtros[1]['value'];
                unset($filtros[0]);
                unset($filtros[1]);
                $objSearch = Produto::where("nome", "like", "%" . $search . "%")
                                ->whereBetween("valor_diaria", [$min, $max]);
                $objSearch->where(function($query) use ($filtros) {
                    foreach ($filtros as $key => $value) {
                        $query->orWhere("filtros", "like", "%" . $value['name'] . ":" . $value['value'] . ";%");
                    }
                });
                $return = "";
                
                foreach ($objSearch->get()->toArray() as $key => $produto) {
                    $return .= '
                    <li class="produto">
                        <a href="' . route('produto', $produto['id']) . '" >
                            <div class="produto-img">
                                <img src="' . $produto['thumb'] . '"/>
                            </div>
                            <div class="produto-descricao">
                                <table style="width:100%; text-align:center;">
                                    <tr>
                                        <td>
                                            <h6 class="mt-3">'.
                                                $produto['nome']
                                            .'</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            R$ a diária
                                        </td>
                                    </tr>
                                </table>    
                            </div>
                        </a>
                    </li>';
                }

                print_r($return);
            } else {
                $produtos = Produto::all();

                $min = Produto::min('valor_diaria');
                $max = Produto::max('valor_diaria');

                return view('modulo_cliente.ecommerce.index', [
                    'produtos' => $produtos,
                    'max' => $max,
                    'min' => $min
                ]);
            }
        } else {

            $produtos = Produto::all();

            $min = Produto::min('valor_diaria');
            $max = Produto::max('valor_diaria');

            return view('modulo_cliente.ecommerce.index', [
                'produtos' => $produtos,
                'max' => $max,
                'min' => $min
            ]);
        }
    }
}
