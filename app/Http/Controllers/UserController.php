<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function atualizarDados(){
        $id = 1;
        $user = User::find($id);
        return view("modulo_cliente.usuario.atualizar_dados", ["user" => $user]);
    }
}
