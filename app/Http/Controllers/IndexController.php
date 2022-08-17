<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Mensagem;
use App\Mail\SendMailUser;

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

    public function sendMessage(Request $request){
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'mensagem' => 'required'
        ],
        [
            'nome.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'telefone.required' => 'O campo telefone é obrigatório.',
            'mensagem.required' => 'O campo mensagem é obrigatório.'
        ]);
        $mensagem = new Mensagem();
        $mensagem->nome = trim($request->input('nome'));
        $mensagem->email = trim($request->input('email'));
        $mensagem->telefone = trim(str_replace(['-', ' ', '(', ')'], '', $request->input('telefone')));
        $mensagem->mensagem = trim($request->input('mensagem'));
        
        if ($mensagem->save()) {
            Mail::to('contato@aircloset.com.br')->send(new SendMailUser($mensagem, 'Contato AirCloset'));
            return redirect()->back()->withSuccess(['success' => 'Email enviado com sucesso!<br> Te retornaremos assim que possível!']);
        } else {
            return redirect()->back()->withErrors(['error' => 'Aconteceu algum erro ao enviar o email! Tente novamente mais tarde.']);
        }
    }
}
