<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexFranqueado(){
        return view("franqueado.index");
    }

    public function cadastrarFranqueado(){
        // return view("franqueado.index");
    }

    public function contato(){
        return view("modulo_cliente.contato");
    }
}
