<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    public function index(){
        return view("login.index");
    }

    public function logar(Request $request){
        $email = $request->input("email");
        $password = $request->input("password");
        if (Auth::attempt(['email' => $email, 'password' => $password])){
            $request->session()->regenerate();
           
            return redirect()->route('index');

            // if (auth()->user()->nivel_acesso==1) {
            //     return redirect()->route('dashboard');
            // } else if (auth()->user()->nivel_acesso==2) {
            //     return redirect()->route('dashboard');
            // } else if (auth()->user()->nivel_acesso==3) {
            //     return redirect()->route('dashboard');
            // }
        } else {
            return redirect()->route('index');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
