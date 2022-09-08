<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    public static function calcula_valor_diarias($array){
        $id = $array['id'];
        $produto = Produto::find($id)->get()[0];
        $values = $array['values'];
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
