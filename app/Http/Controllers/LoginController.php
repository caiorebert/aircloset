<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    public function index(){
        if (!Auth::check()) {
            return view("login.index");
        } else {
            return redirect()->route('index');
        }
    }

    public function logar(Request $request){
        $request->validate([
            'login' => 'required', 
            'password' => 'required'
        ],
        [
            'login.required' => 'O campo login precisa ser preenchido!',
            'password.required' => 'O campo senha precisa ser preenchido!'
        ]
        );
        $email = $request->input("login");
        $password = $request->input("password");
        if (Auth::attempt(['login' => $email, 'password' => $password])){
            $request->session()->regenerate();
            return redirect()->back();

            // if (auth()->user()->nivel_acesso==1) {
            //     return redirect()->route('dashboard');
            // } else if (auth()->user()->nivel_acesso==2) {
            //     return redirect()->route('dashboard');
            // } else if (auth()->user()->nivel_acesso==3) {
            //     return redirect()->route('dashboard');
            // }
        } else {
            return redirect()->route('login')->withErrors(['error_login_msg' => "Login ou senha incorretos!"]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
