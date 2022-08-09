<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function atualizarDados(Request $request){
        $id = auth()->user()->id;
        $user = User::find($id);
        return view("modulo_cliente.usuario.atualizar_dados", ["user" => $user]);
    }

    public function updateDados(Request $request){
        $id = auth()->user()->id;
        $id = 1;
        $user = User::find($id);
        $inputs = $request->input('values');
        foreach ($inputs as $key => $value) {
            switch($value['name']){
                case 'telefone':
                    $user->telefone = $value['value'];
                    break;
                case 'celular':
                    $user->celular = $value['value'];
                    break;
            }
        }
        if ($user->save()) {
            print_r("Usuário alterado com sucesso!");
        } else {
            print_r("Erro ao alterar!");
        }
    }
}
