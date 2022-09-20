<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Carrinho;

class CadastroController extends Controller
{
    public function index(){
        return view("cadastro.index");
    }

    public function cadastrar(Request $request) {
        $user = new User();
        $validated = $request->validate([
            'email' => 'required',
            'nome' => 'required',
            'senha' => 'required',
            'confirma_senha' => 'required',
            'cpf' => 'required',
            'data' => 'required',
            'celular' => 'required',
            'sexo' => 'required',
            'termos' => 'required',
        ],
        [
            'email.required' => 'O campo email é obrigatório.',
            'nome.required' => 'O campo nome é obrigatório.',
            'senha.required' => 'O campo senha é obrigatório.',
            'confirma_senha.required' => 'O campo confirmação de senha é obrigatório.',
            'cpf.required' => 'O campo cpf é obrigatório.',
            'data.required' => 'O campo data de nascimento é obrigatório.',
            'celular.required' => 'O campo celular é obrigatório.',
            'sexo.required' => 'O campo sexo é obrigatório.',
            'termos.required' => 'É necessário marcar esse campo para prosseguir.'
        ]);
        $user->nome = $request->input('nome');
        $user->email = $request->input('email');
        if (!isset(User::where('email', $user->email)->get()[0])) {
            $user->login = trim($request->input('email'));
            $user->password = Hash::make(trim($request->input('senha')));
            $user->telefone = str_replace(['-', '.', '(', ')'], '', trim($request->input('telefone')));
            $user->celular = str_replace(['-', '.', '(', ')'], '', trim($request->input('celular')));
            $user->cpf = str_replace(['-', '.', '(', ')'], '', trim($request->input('cpf')));
            $user->nivel_acesso = 1;
            if ($user->save()) {
                $carrinho = new Carrinho();
                $carrinho->user_id = $user->id; 
                if ($carrinho->save()) {
                    if (Auth::loginUsingId($user->id)){
                        return redirect()->route('index');
                    } else {
                        return redirect()->route('index');
                    }
                }
            }
        } else {
            return redirect()->back()->withErrors(['msg' => 'Email já cadastrado!']);
        }
    }
}
