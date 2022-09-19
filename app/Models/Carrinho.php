<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cupom;

class Carrinho extends Model
{
    use HasFactory;

    protected $table = 'carrinho';

    public function calculaProdutoValorCarrinho(Carrinho $c, $valor, $op){
        if ($op==1){
            $c->valortotalcarrinho += $valor;
        } else {
            if ($c->valortotalcarrinho - $valor > 0) {
                $c->valortotalcarrinho -= $valor;
            } else {
                $c->valortotalcarrinho = 0;
            }
        }
        return $c;
    }

    public function calculaCupomValorCarrinho(Carrinho $c, Cupom $cupom, $op){
        if ($op==1){
            $new_total = 0;
            $total = $c->valortotalcarrinho;
            if ($cupom->percentual==1) {
                $new_total = ($cupom->desconto / 100) * $total;
            } else {
                $new_total = $total - $c->desconto;
            }
            if ($total == 0) {
                $c->valortotalcomdesconto = 0;
            } else {
                $c->valortotalcomdesconto = $total - $new_total;
            }
        }
        return $c;
    }
}
