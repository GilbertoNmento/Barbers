<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Logins as ModelsLogins;
use Illuminate\Http\Request;

class Logins extends Controller
{
    public function validaUsuario(Request $request){

        $login=$request->login;
        $senha=$request->senha;

        $usuario=ModelsLogins::where('login', $login)->where('senha', $senha)->first();
    //dd($usuario);
        if ($usuario){
           // dd('dentro do if');
            
            $logins=ModelsLogins::all();
            $cadastros=Clientes::all();

            return view('Dashboard', compact('cadastros'));
        }
        else {

            return view ('Login');
            
            
        }
    }
}
