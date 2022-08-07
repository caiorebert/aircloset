<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class IndexController extends Controller
{

    public function index(){
        return view("index");
    }

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
