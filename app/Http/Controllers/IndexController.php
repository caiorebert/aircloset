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
}
