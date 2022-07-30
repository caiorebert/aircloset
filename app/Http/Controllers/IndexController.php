<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index_franqueado(){
        return view("franqueado.index");
    }

    public function cadastrar_franqueado(){
        // return view("franqueado.index");
    }
}
